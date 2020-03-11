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

	{{ $producteditbyid->id }}
	{{ $producteditbyid->caregoryId }}

                                       {!! Form::open(['url' => '/product/update','method'=>'post','role'=>'form','enctype'=>'multipart/form-data','name'=>'productedit']) !!}
    	                                <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" class="form-control" value="{{ $producteditbyid->productName }}" name="name">
                                        </div>

										<div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="caregoryId">
  												@foreach($categories as $category)
  												{{ $category->id }}
                                            	<option value="{{$category->id }}">{{ $category->categoryName }}</option> 
                                            	@endforeach
                                            	                                      	
                                            </select>
                                        </div>

 										<div class="form-group">
                                            <label>price</label>
                                            <input type="number"class="form-control" value="{{ $producteditbyid->price }}" name="price">
                                        </div>

                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" value="{{ $producteditbyid->qty }}" name="qty">
                                        </div>

                                         <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea class="form-control"  name="shortDescription">{{ $producteditbyid->shortDescription }}</textarea>
                                        </div>



                                        <div class="form-group">
                                            <label>Long Description</label>
                                            <textarea class="form-control" p name="longDescription">{{ $producteditbyid->longDescription }}</textarea>
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
                                        
										<input type="hidden" name="updateid" value="{{ $producteditbyid->id }}">

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                                        </div>

                                        {{  Form::close() }}

                                        <script type="text/javascript">
                                        	
                                        	document.forms['productedit'].elements['caregoryId'].value='{{ $producteditbyid -> caregoryId }}'
                                        	document.forms['productedit'].elements['publicationstatus'].value='{{ $producteditbyid -> publicationStatus }}'
                                        </script>

</div>

@endsection