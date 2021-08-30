<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\FileUpload;
use App\Models\Statistics;
use App\Models\SubCategory;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ShowController extends Controller
{
    public function ShowNew()
    {
        // $content = Content::orderBy('time_show', 'ds')->take(5)->get();
        $content = DB::select('SELECT contents.*, users.f_name, users.l_name
        FROM
            contents
        INNER JOIN
            users
        ON 
            contents.user_id = users.id
        ORDER BY
            contents.time_show DESC
        LIMIT 5');
        return response()->json($content);
    }
    public function ShowContentAllByCreate()
    {
        $content = Content::latest()->get();
        return response()->json($content);
    }
    public function ShowContentByUser($id_user)
    {
        $content = Content::where('user_id', '=', $id_user)->latest()->get();
        return response()->json($content);
    }
    public function ShowCateMageUser()
    {
        $category = Category::get();
        return response()->json($category);
    }
    public function ShowSubCateByCate($id)
    {
        $subcate = SubCategory::where('category_id', '=', $id)->get();
        return response()->json($subcate);
    }
    public function ShowImgNew()
    {
        $img = DB::table('contents')
            ->join('file_uploads', function ($join) {
                $join->on('contents.id', '=', 'file_uploads.id_content')
                    ->where('file_uploads.type', '=', 'image');
            })
            ->get();
        return response()->json($img);
    }
    public function ShowImageByUser($id_user)
    {
        $img = DB::select('SELECT file_uploads.* FROM users 
        INNER JOIN contents 
            ON users.id = contents.user_id
        INNER JOIN
            file_uploads
            ON 
                contents.id = file_uploads.id_content
        WHERE
            users.id = ?', [$id_user]);
        return response()->json($img);
    }
    public function ShowContentById($id_content)
    {
        $data = DB::select('SELECT contents.*, users.f_name, users.l_name FROM contents 
                            INNER JOIN
                                users
                            ON 
                                contents.user_id = users.id
                            WHERE
                                contents.id = ?
                            LIMIT 1', [$id_content]);
        return response()->json($data);
    }
    public function ShowImageByIdContent($id_content)
    {
        $data = FileUpload::where('id_content', '=', $id_content)->get();
        return response()->json($data);
    }   
    public function CheckPermissDetailContent(Request $request)
    {
        $id_user = $request->id_user;
        $id_content = $request->id_content;
        return response()->json();
    }
    public function DelOneImage($id_file)
    {
        $data = FileUpload::find($id_file);
        Storage::disk('public')->delete($data->url);
        $data->delete();
        return response()->json($data);
    }
    public function DelOneFile($id_file)
    {
        $data = FileUpload::find($id_file);
        Storage::disk('public')->delete($data->url);
        $data->delete();
        return response()->json($data);
    }
    public function PushStatis($id_content)
    {
        $check = Statistics::where('id_content', '=',$id_content)->first();
        if ($check == null) {            
            $res = Statistics::create([
                'id_content' => $id_content,
            ]);
        } else{
            $push_static = $check->number_preview + 1;
            $res = $check->update([
                'number_preview' => $push_static
            ]);
        }      
        
        return response()->json($res);
    }
    public function ShowStatisAll()
    {
        $data = Statistics::all();
        return response()->json($data);
    }
    public function ShowStatisByContent($id_content)
    {
        $data = Statistics::where('id_content', '=',$id_content)->first();
        return response()->json($data);
    }
}
