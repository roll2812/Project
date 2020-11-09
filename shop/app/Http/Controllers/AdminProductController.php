<?php

namespace App\Http\Controllers;

use App\Category;
use App\Components\Recusive;
use App\Http\Requests\ProductAddRequest;
use App\Product;
use App\Tag;
use App\Traits\DeleteModelTrait;
use App\Traits\StorageImageTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminProductController extends Controller
{
    use DeleteModelTrait;
    use StorageImageTrait;

    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('admin.product.index', [
            'products' => $products,
        ]);
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');

        return view('admin.product.add', [
            'htmlOption' => $htmlOption,
        ]);
    }

    public function getCategory($parentId)
    {
        $data = Category::get();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    public function store(ProductAddRequest $request)
    {
        try {
            DB::beginTransaction();
            $dataProductCreate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->contents,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
            ];

            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path', 'product');

            if (!empty($dataUploadFeatureImage)) {
                $dataProductCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $product = Product::create($dataProductCreate);

            // Insert data to product_images

            if ($request->hasFile('image_path')) {
                foreach ($request->image_path as $fileItem) {
                    $dataProductImageDetail = $this->storageTraitUploadMultiple($fileItem, 'product');
                    $product->images()->create([
                        'image_path' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name'],
                    ]);

                }
            }

            //Insert tags for product
            $tagIds = [];
            if (!empty($request->tags)) {
                foreach ($request->tags as $tagItem) {
                    $tagInstance = Tag::firstOrCreate([
                        'name' => $tagItem,
                    ]);
                    $tagIds[] = $tagInstance->id;

                }
            }
            $product->tags()->attach($tagIds);

            DB::commit();

            return redirect()->route('product.index');

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('message: ' . $exception->getMessage() . 'Line: ' . $exception->getLine());
        }

    }

    public function edit(Product $product)
    {
        $htmlOption = $this->getCategory($product->category_id);
        return view('admin.product.edit', [
            'product' => $product,
            'htmlOption' => $htmlOption,

        ]);
    }

    public function update(Request $request, Product $product)
    {

        try {
            DB::beginTransaction();

            // Product update

            $dataProductUpdate = [
                'name' => $request->name,
                'price' => $request->price,
                'content' => $request->contents,
                'user_id' => auth()->id(),
                'category_id' => $request->category_id,
            ];

            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'feature_image_path', 'product');

            if (!empty($dataUploadFeatureImage)) {

                $dataProductUpdate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductUpdate['feature_image_path'] = $dataUploadFeatureImage['file_path'];

            }

            $product->update($dataProductUpdate);

            // Insert data to product_images

            if ($request->hasFile('image_path')) {
                ProductImage::where('product_id', $product->id)->delete();
                foreach ($request->image_path as $fileItem) {
                    $dataProductImageDetail = $this->storageTraitUploadMultiple($fileItem, 'product');
                    $product->images()->create([
                        'image_path' => $dataProductImageDetail['file_path'],
                        'image_name' => $dataProductImageDetail['file_name'],
                    ]);

                }
            }

            //Insert tags for product
            $tagIds = [];
            if (!empty($request->tags)) {
                foreach ($request->tags as $tagItem) {
                    $tagInstance = Tag::firstOrCreate([
                        'name' => $tagItem,
                    ]);
                    $tagIds[] = $tagInstance->id;
                }

            }
            $product->tags()->sync($tagIds);

            DB::commit();

            return redirect()->route('product.index');

        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('message: ' . $exception->getMessage() . 'Line: ' . $exception->getLine());
        }
    }

    public function delete(Product $product)
    {

        return $this->deleteModelTrait($product, $product->id);
    }
}
