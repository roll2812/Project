<?php

namespace App\Traits;

trait DeleteModelTrait
{
    public function deleteModelTrait($model, $id)
    {
        try {

           $model->find($id)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'success',
            ], 200);

        } catch (\Exception $exception) {
            Log::error('message: ' . $exception->getMessage() . '--Line: ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'fail',
            ], 500);
        }
    }
}
