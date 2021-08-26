<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function ShowNew()
    {
        $content = Content::orderBy('time_show', 'asc')->take(5)->get();
        return response()->json($content);
    }
    public function ShowCateMageUser()
    {
        $category = Category::get();        
        return response()->json($category);        
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
}
