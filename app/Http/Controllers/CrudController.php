<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use File;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function crud(){
        return view('crud');
    }
    public function crudpost(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'description'=>'required',
            'image'=>'nullable|mimes:png,jpg,jpeg,webp'
        ]);
        if($request->has('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $path = 'uploads/category/';
            $file->move($path,$filename);
        }
        $addData = new Crud();
        $addData->name = $request->name;
        $addData->email = $request->email;
        $addData->description = $request->description;
        $addData->active = $request->active;
        $addData->image = $path.$filename;
        $addData->save();
        return redirect(route('index'));
    }

    public function index(){
        $datas = Crud::all();
        return view('index',compact('datas'));
    }

    public function edit($id){
        $datas = Crud::find($id);
        return view('edit',compact('datas'));
    }

    public function editpost(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'description'=>'required',
            'image'=>'nullable|mimes:png,jpg,jpeg,webp'
        ]);
        $addData = Crud::find($id);
        if($request->has('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $path = 'uploads/category/';
            $file->move($path,$filename);
            if(File::exists($addData->image)){
                File::delete($addData->image);
            }
        }
        if($addData){
            $addData->name = $request->name;
            $addData->email = $request->email;
            $addData->description = $request->description;
            $addData->active = $request->active;
            $addData->image = $path.$filename;
            $addData->save();
            return redirect(route('index'));
        }
        else{
            return back();
        }
        
    }

    public function delete($id){
        $datas = Crud::find('id');
        if(File::exists($datas->image)){
            File::delete($datas->image);
        }
        $datas->delete();
        return redirect(route('index'));
    }
}
