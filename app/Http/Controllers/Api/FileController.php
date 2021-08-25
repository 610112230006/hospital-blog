<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FileUpload;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function uploadImg(Request $request)
    {
        if ($request->images) {
            $uploadedFiles = $request->images;
            foreach ($uploadedFiles as $file) {

                $pathFile = 'contents/' . date('Y-m');
                $namepath = $file->store($pathFile);
                $resFile = FileUpload::create([
                    'id_content' => $_GET['content_id'],
                    'type' => 'image',
                    'url' => $namepath,
                ]);
                // echo $file;
            }
            return response()->json(['status' => 'ok'],200);
        }
        return;
    }
    public function uploadFile(Request $request)
    {
        if ($request->file) {
            $uploadedFiles = $request->file;
            foreach ($uploadedFiles as $file) {

                $pathFile = 'contents/' . date('Y-m');
                $namepath = $file->store($pathFile);
                $resFile = FileUpload::create([
                    'id_content' => $_GET['content_id'],
                    'type' => 'file',
                    'url' => $namepath,
                ]);
                // echo $file;
            }
            return response()->json($resFile);
        }
        return;
    }
}
