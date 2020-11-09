<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Storage;
/**
 *
 */
trait StorageImageTrait
{
    public function storageTraitUpload($request, $fieldName, $folderName)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->$fieldName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file($fieldName)->storeAs('public/' . $folderName . '/' . auth()->id(), $fileNameHash);
            $dataUploadTrait = [
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($filePath),
            ];
            return $dataUploadTrait;
        }

        return null;
    }

    public function storageTraitUploadMultiple($fileName, $folderName)
    {

        $fileNameOrigin = $fileName->getClientOriginalName();
        $fileNameHash = Str::random(20) . '.' . $fileName->getClientOriginalExtension();
        $filePath = $fileName->storeAs('public/' . $folderName . '/' . auth()->id(), $fileNameHash);
        $dataUploadTrait = [
            'file_name' => $fileNameOrigin,
            'file_path' => Storage::url($filePath),
        ];
        return $dataUploadTrait;

    }

}
