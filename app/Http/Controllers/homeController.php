<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Symfony\Component\Console\Input\Input;

class homeController extends Controller
{
    public function add_form()
    {
        $type=Type::all();
        return view("home.add_form",["type"=>$type]);
    }
    public function ck_file_uploader(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(storage_path('app/public'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url =url("/").Storage::url($fileName) ;
            $msg = $url;
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
