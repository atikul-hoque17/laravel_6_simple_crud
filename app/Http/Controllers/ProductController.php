<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\product;
Use DB;



class ProductController extends Controller
{
    //
    public function index(){

      $categories= Category::where('publicationStatus',1)->get();
      return view('admin.product.productEntry',['categories'=>$categories]);
    }


    public function save(Request $request){
       
       $product= new product();

        // $picInfo=$request->file('picture'); 
        // $picName=$picInfo->getClientOriginalName();
        // $folder="productImage/";


       $product->productName=$request->name;
       $product->caregoryId=$request->caregoryId;
       $product->price=$request->price;
       $product->qty=$request->qty;
	     $product->shortDescription=$request->shortDescription;
	     $product->longDescription=$request->longDescription;
       $product->pic="Picture";       
	     $product->publicationStatus=$request->publicationstatus;
 
      $product->save();


      $lastID=$product->id;
      $picInfo=$request->file('picture');     
      $picName=$lastID.$picInfo->getClientOriginalName();
    //  $picName=$picInfo->getClientOriginalName();
      $folder="productImage/";
      $picInfo->move($folder,$picName);


  
      

      $picUrl=$folder.$picName;      
      $productPic= product::find($lastID);
      $productPic->pic=$picUrl;
      $productPic->save();

      return redirect('/product/save')->with('message','Insert Succesfully'); 


       }


       public function manage(){
       
         
          $products=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')

                    ->paginate(6);

            return view('admin.product.productManage',['products'=>$products]);
       }

       public function view($id){
       
         //echo $id;

        $productsbyId=DB::table('products')
                    ->join('categories','categories.id','=','caregoryId')
                    ->select('products.*','categories.categoryName as catName')
                    ->where('products.id',$id)
                    ->first();

            return view('admin.product.productView',['productsView'=>$productsbyId]);


       }


       public function edit($id){
       
         //echo $id;

        $producteditbyid = product::where('id',$id)->first();
        $categories= Category::where('publicationStatus',1)->get();

        return view('admin.product.productEdit',['producteditbyid'=>$producteditbyid,'categories'=>$categories]);


       }

       public function update(Request $request){

           // dd($request->all());
        $updatedID=$request->updateid;

        $productPic=product::where('id',$request->updateid)->first();
        $exist_pic=$productPic->pic;

         $picInfo=$request->file('picture');   
         
         if($picInfo){

            if(file_exists($exist_pic)){           
             unlink($exist_pic);
            }

          $picName=$updatedID.$picInfo->getClientOriginalName();

            $path="productImage/";
            $picUrl=$path.$picName;
            $picInfo->move($path,$picName);           


           }else{
             $picUrl=$exist_pic;

         }

        $updateproduct=product::find($updatedID);

        $updateproduct->productName=$request->name;
        $updateproduct->caregoryId=$request->caregoryId;
        $updateproduct->price=$request->price;
        $updateproduct->qty=$request->qty;
        $updateproduct->shortDescription=$request->shortDescription;
        $updateproduct->longDescription=$request->longDescription;
        $updateproduct->pic=$picUrl;
        $updateproduct->publicationStatus=$request->publicationstatus;

        $updateproduct->save();
        return redirect('/product/manage')->with('message','Updated succesfully');

       }

       

      public function delete($id){

         echo $id;
        $productpic=product::where('id',$id)->first();

        $anypic=$productpic->pic;

        if(file_exists($anypic)){
            unlink($anypic);
        }

        $prodcutdelete=product::find($id);
        $prodcutdelete->delete();

        return redirect('/product/manage')->with('message','Deleted Succesfully');  

      }


}
