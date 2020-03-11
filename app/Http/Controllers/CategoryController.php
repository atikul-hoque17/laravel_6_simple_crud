<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
Use DB;

class CategoryController extends Controller
{
    //
    public function index(){
      return view('admin.category.categoryEntry');
    }

    public function save(Request $request){     

      $categoryEntry= new Category();
      $categoryEntry->categoryName =$request->name;
      $categoryEntry->shortDescription =$request->shortdescription;
      $categoryEntry->publicationStatus =$request->publicationstatus;      
      $categoryEntry->save();
      return redirect('/category/save')->with('message','data insert succesfully');

    } 	

   
    public function manage(){
    	//$categories = Category::all();
    	//$categories = DB::table('categories', '>', 100)->paginate(15);
    	$categories = DB::table('categories')->paginate(10);
    	return view('admin.category.categoryManage',['category'=> $categories]);
    }


   public function edit($id){
    $categoryEdit = Category::where('id',$id)->first();
    return view('admin.category.categoryEdit',['category'=>$categoryEdit]);
   }

   public function update(Request $request){
    $category = Category::find($request->updateid);
    $category->categoryName =$request->name;
    $category->shortDescription =$request->shortdescription;
    $category->publicationStatus =$request->publicationstatus;
    $category->save();
    return redirect('/category/manage')->with('message','update succesfully');
   }

   public function delete($id){    
    echo $id; 
    $categorydelete = Category::find($id);
    $categorydelete->delete();
    return redirect('/category/manage')->with('message','delete succesfully');

   }

   
}
