@extends('admin.master');

@section ('page-title')
 Admin: Category Edit
@endsection


@section('content_heading')
  
  Category Edit

@endsection


@section ('maincontent')
  
					{!! Form::open(['url' => '/category/edit','method'=>'post','name'=>'editform','role'=>'form']) !!}

                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" value="{{ $category -> categoryName }}" placeholder="Enter Category Name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Short Description</label>
                                            <textarea class="form-control" placeholder="Enter short Description" name="shortdescription">{{ $category -> shortDescription }}</textarea>
                                        </div>

                                         <div class="form-group">
                                            <label>Publication status</label>
                                            <select class="form-control" name="publicationstatus">
                                            	<option value="1">Published</option> 
                                            	<option value="0">Unpublished</option>                                            	
                                            </select>
                                        </div>

                                        <input type="hidden" name="updateid" value="{{ $category->id }}">

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" value="Submit" name="submit">
                                        </div>

                                       
                                       
                                       
                    {!! Form::close() !!}
                              
                                        <script type="text/javascript">
                                        	
                                        	document.forms['editform'].elements['publicationstatus'].value='{{ $category -> publicationStatus }}'
                                        </script>

@endsection