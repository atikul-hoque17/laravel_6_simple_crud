@extends('admin.master')

@section('page-title')
  Product Entry
@endsection

@section('content_heading')
  Product Entry 
  <br>
  <h4 style="color: green">{{ Session::get('message') }}</h4>
@endsection



@section('maincontent')

<div style="width: 50%;padding-bottom: 10px;">
                                       {!! Form::open(['url' => '/product/entry','method'=>'post','role'=>'form','enctype'=>'multipart/form-data']) !!}
    	                                <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Product Name" name="name">
                                        </div>

										<div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="caregoryId">
  												@foreach($categories as $category)
                                            	<option value="{{$category->id }}">{{ $category->categoryName }}</option> 
                                            	@endforeach
                                            	                                      	
                                            </select>
                                        </div>

 										<div class="form-group">
                                            <label>price</label>
                                            <input type="number"class="form-control" placeholder="Enter Product price" name="price">
                                        </div>

                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" placeholder="Enter Product price" name="qty">
                                        </div>

                                         <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea class="form-control" placeholder="Enter short Description" name="shortDescription"></textarea>
                                        </div>



                                        <div class="form-group">
                                            <label>Long Description</label>
                                            <textarea class="form-control" placeholder="Enter Long Description" name="longDescription"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <input type="file"  name="picture">
                                        </div>

                                        <div class="form-group">
                                            <label>Publication status</label>
                                            <select class="form-control" name="publicationstatus">
                                            	<option value="1">Published</option> 
                                            	<option value="0">Unpublished</option>                                            	
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                                        </div>

                                        {{  Form::close() }}
</div>

@endsection