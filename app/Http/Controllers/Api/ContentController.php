<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => 'required',
                'type' => 'required',
                'detail' => 'required',
            ],
            [
                'title.required' => 'กรุณากรอกหัวเรื่อง',
                'type.required' => 'กรุณาเลือกหมวดหมู่',
                'detail.required' => 'กรุณากรอกรายละเอียด',
            ]
        );

        if ($request->time_show == '') {
            $time_show = date('Y-m-d');
        } else {
            $time_show = $request->time_show;
        }
        $qry =  Content::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'type' => $request->type,
            'time_show' => $time_show,
            'detail' => $request->detail,
        ]);
        return response()->json($qry);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if (isset($_GET['id_content'])) {
            return view('pages.content.edit-content')->with('id_content', $_GET['id_content']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'title' => 'required',
                'type' => 'required',
                'detail' => 'required',
            ],
            [
                'title.required' => 'กรุณากรอกหัวเรื่อง',
                'type.required' => 'กรุณาเลือกหมวดหมู่',
                'detail.required' => 'กรุณากรอกรายละเอียด',
            ]
        );
        $res = Content::find($id)->update([
            'title' => $request->title,
            'type' => $request->type,
            'time_show' => $request->time_show,
            'detail' => $request->detail,
        ]);
        return response()->json(['req' => $res, 'id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $res = Content::find($id)->delete();
        $delFiles = FileUpload::where('id_content', '=', $id)->get();
        foreach ($delFiles as $delFile) {
            Storage::disk('public')->delete($delFile->url);
        }
        $delFiles = FileUpload::where('id_content', '=', $id)->delete();

        return response()->json('ok');
    }
}
