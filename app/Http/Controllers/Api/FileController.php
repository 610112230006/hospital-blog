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
                $pathFile = 'content/' . date('Y-m');
                $file_name = time() . '_' . $file->getClientOriginalName();
                $file_path = $file->storeAs($pathFile, $file_name, 'public');


                $resFile = FileUpload::create([
                    'id_content' => $_GET['content_id'],
                    'type' => 'image',
                    'url' => $file_path,
                ]);
                // echo $file;
            }
            return response()->json(['status' => 'ok', 'name' => $file_path], 200);
        }
        return;
    }
    public function uploadFile(Request $request)
    {
        // $validate = $request->validate([
        //     'file' => 'mimes:doc,pdf,xlsx,xls,docx,ppt,zip|size:20000',
        // ], [
        //     'file.mimes' => 'ต้องเป็นไฟล์ประเภท "doc,pdf,xlsx,xls,docx,ppt,zip"',
        //     'file.size' => 'ไฟล์ขนาดใหญ่เกินไป'
        // ]);
        if ($request->file) {
            $uploadedFiles = $request->file;
            foreach ($uploadedFiles as $file) {

                $pathFile = 'content/' . date('Y-m');
                $file_name = time() . '_' . $file->getClientOriginalName();
                $file_path = $file->storeAs($pathFile, $file_name, 'public');
                $resFile = FileUpload::create([
                    'id_content' => $_GET['content_id'],
                    'type' => 'file',
                    'url' => $file_path,
                ]);
                // echo $file;
            }
            return response()->json($resFile);
        }
        return;
    }
}
