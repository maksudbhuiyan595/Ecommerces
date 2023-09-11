<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
       return view('backend.categories.index'); 
    }

    public function create(){
        return view('backend.categories.create');
    }

    public function store(Request $request){

        // dd($request->all());

        $request->validate([
            'name'=>['required','unique:categories','min:3', 'max:50'],
            'description'=>['required','max:200'],
            'image'=>['required', 'image', 'mimes:jpg,png, jpeg,gif,svg'],
            
        ]);

        
        if($request->hasFile('image')){
            $image=$request->file('image');
            $fileName=date('Ymdhsi').'.'.$image->getClientOriginalExtension();
            $image->storeAs('/categories',$fileName);
        }
        // dd($fileName);
        Category::create([
            'name'=>$request->name,
            'description'=>$request->descriptiion,
            'image'=>$fileName
        ]);
        return redirect()->back();
    }
}
