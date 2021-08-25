<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
    public function ShowImgNew()
    {
        $img = DB::table('contents')
        ->join('file_uploads', 'contents.id', '=', 'file_uploads.id_content')        
        ->select('file_uploads.*')
        ->get();
        return response()->json($img);
    }
}
