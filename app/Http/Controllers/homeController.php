<?php

namespace App\Http\Controllers;

use App\files;
use App\Helper\Helper;
use App\Product;
use App\Type;
use Faker\Provider\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class homeController extends Controller
{
    public function add_form()
    {
        $type=Type::all();
        return view("home.product_add",["type"=>$type]);
    }
    public function ck_file_uploader(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(storage_path('app/public/upload'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url =url("/").Storage::url($fileName) ;
            $msg = $url;
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url')</script>";
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function product_submit(Request $request)
    {
        $check= Validator::make(
            $request->all(),
            [
                "per_title"=>"required|min:3|max:255",
                "eng_title"=>"required|min:3|max:255",
                "image"=>"required|mimes:jpeg,jpg,gif,png",
                "des"=>"required",
            ],
            [
                "per_title.required"=>"تکمیل عنوان فارسی ضروری می باشد",
                "per_title.min"=>"عنوان فارسی حداقل ۳ کلمه می باید",
                "per_title.max"=>"عنوان فارسی حداکثر ۲۵۵ کلمه می باید",
                "eng_title.required"=>"تکمیل عنوان لاتین ضروری می باشد",
                "eng_title.min"=>"عنوان لاتین حداقل ۳ کلمه می باید",
                "eng_title.max"=>"عنوان لاتین حداکثر ۲۵۵ کلمه می باید",
                "image.required"=>"انتخاب تصویر ضروری می باشد",
                "image.mimes"=>"فرمت عکس های انتخاب شده مورد تایید نمی باشد",
                "des.required"=>"توضیحات ضروری می باشد",
            ]
        );
        if($check->fails()==false){
            $image = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(storage_path('app/public/upload'), $image);
            $product=new Product();
            $product->per_title=$request->per_title;
            $product->eng_title=$request->eng_title;
            $product->type=$request->type;
            $product->description=$request->des;
            $product->image=$image;
            $product->save();
            $lastid=$product->id;
            //upload files
            $files = $request->file('files');
            $exp_file=array();
            foreach ($files as $file){
                $filename = time().$file->getClientOriginalName();
                $file->move(storage_path('app/public/upload'), $filename);
                $row=["filename"=>$filename,"product"=>$lastid];
                array_push($exp_file,$row);
            }
            DB::table("files")->insert($exp_file);
            //below code not work :(
//            $file=new files();
//            $file->create($exp_file);
//            $file->save();
            return back();
        }else
        {
            return back()->withErrors($check->errors());
        }
    }

    public function product_list($page)
    {
        if (is_numeric($page)){
            $helper=new Helper();
            $limit=5;
            $all=Product::all()->count();
            if ($page==1){
                $count=0;
            }else
            {
                $count=ceil(($page-1)*$limit);
            }
            $pagecount=ceil($all/$limit);
            $product=Product::all()->skip($count)->take($limit);
            return view("home.product_list",
                ["products"=>$product,
                    "pagecount"=>$pagecount,
                    "i"=>1,
                    "currentpage"=>$page,
                    "helper"=>$helper,
                ]
            );
        }else
        {
            return back();
        }

    }

    public function product_edit($id)
    {
        $type=Type::all();
        $files=Files::where("product","=",$id)->get();
        $product=Product::find($id)->first();
        return view("home.product_edit",["product"=>$product,"type"=>$type,"files"=>$files]);
    }
}
