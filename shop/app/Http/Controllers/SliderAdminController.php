<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use App\Traits\DeleteModelTrait;
use App\Traits\StorageImageTrait;
use App\Http\Requests\SliderAddRequest;

class SliderAdminController extends Controller
{
    use DeleteModelTrait;
    use StorageImageTrait;
    public function index(Slider $slider)
    {
        $sliders = Slider::latest()->paginate(5);
        return view('admin.slider.index', [
            'sliders' => $sliders,
        ]);
    }

    public function create()
    {
        return view('admin.slider.add');
    }

    public function store(SliderAddRequest $request, Slider $slider)
    {
        $dataInsert = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        $dataImageSlider = $this->storageTraitUpload($request, 'image_path', 'slider');

        if (!empty($dataImageSlider)) {
            $dataInsert['image_path'] = $dataImageSlider['file_path'];
            $dataInsert['image_name'] = $dataImageSlider['file_name'];
        }

        Slider::create($dataInsert);
        return redirect()->route('slider.index');
    }

    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', [
            'slider' => $slider,
        ]);
    }

    public function update(Request $request, Slider $slider)
    {

        $dataUpdate = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        $dataImageSlider = $this->storageTraitUpload($request, 'image_path', 'slider');

        if (!empty($dataImageSlider)) {
            $dataUpdate['image_path'] = $dataImageSlider['file_path'];
            $dataUpdate['image_name'] = $dataImageSlider['file_name'];
        }

        $slider->update($dataUpdate);
        return redirect()->route('slider.index');

    }

    public function delete(Slider $slider)
    {
        return $this->deleteModelTrait($slider, $slider->id);
    }
}
