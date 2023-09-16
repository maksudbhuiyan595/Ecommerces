<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories= Category::all();
       return view('backend.categories.index',compact('categories')); 
    }
    public function create(){
        return view('backend.categories.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name'           =>['required','unique:categories','min:3', 'max:50'],
            'slug'           => ['required'],
            'subcategory_num'=>['required'],
             
        ]);
        Category::create([
            'name'              =>$request->name,
            'slug'              =>$request->slug,
            'subcategory_count' =>$request->subcategory_num,
            
        ]);
        // Toastr::success('message', 'title', ['options']);
        Toastr::success('successfully created.', 'Category');
        return redirect()->back();
    }
    public function view($id){
        // return $id;.
        $categories=Category::find($id);
        return view('backend.categories.view',compact('categories'));
    }
    public function edit($id){
        // return $id;
      $categories=Category::find($id); 
      return view('backend.categories.edit', compact('categories')); 
    }
    public function update(Request $request, $id){
        // dd($request->all());
        $request->validate([
            'name'           =>['required','unique:categories','min:3', 'max:50'],
            'slug'           => ['required'],
            'subcategory_num'=>['required'],
              
        ]);
        $categoy=Category::find($id);
        $categoy->update([
            'name'              =>$request->name,
            'slug'              =>$request->slug,
            'subcategory_count' =>$request->subcategory_num,
            
        ]);
        Toastr::success('successfully Updated.', 'Category');
        return redirect()->back();
    }
    public function destroy($id){
        // return $id;
        Category::destroy($id);
        Toastr::error('successfully deleted','Category');
        return redirect()->back();

    }



}
