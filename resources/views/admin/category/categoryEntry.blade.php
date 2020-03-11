@extends('admin.master')

@section ('page-title')
  Category Entry
@endsection


@section ('content_heading')
  Category Entry
    <br>
  {{ Session::get('message') }}
@endsection

@section ('maincontent')
  
<div style="width: 50%;padding-bottom: 10px;">
 									{!! Form::open(['url' => '/category/save','method'=>'post','role'=>'form']) !!}

                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" placeholder="Enter Category Name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea class="form-control" placeholder="Enter short Description" name="shortdescription"></textarea>
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
                                        
                                       
                                    {!! Form::close() !!}
                              
</div>                               


@endsection