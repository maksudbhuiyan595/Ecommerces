<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    
    public function index(){
        $categories =Subcategory::with('category')->get();
        return view('backend.subcategories.index',compact('categories'));
    }
    public function create(){
        $categories=Category::all();
        // dd($categories);
        return view('backend.subcategories.create',compact('categories'));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>['required'],
            'category_id'=>['required'],
        ]);
        Subcategory::create([
            'subcategory_name'=>$request->name,
            'category_id'=>$request->category_id,
          
        ]);
        Toastr::success('successfully crated', 'Subcategory');
        return redirect()->back();
    }
    public function view($id){
        // return $id;
        $subcategories=Subcategory::find($id);
        return view('backend.subcategories.view',compact('subcategories'));
    }
    public function edit($id){
        $categories=Subcategory::find($id);
        // dd($categories);
        return view('backend.subcategories.edit',compact('categories'));
    }

}
