
<style type="text/css">
	
.panel-body a {

	text-decoration: none;
}
</style>


@extends('admin.master')

@section ('page-title')
 Admin: Category Manage
@endsection



@section('content_heading')
  
  Category Manage
<br>
{{ Session::get('message') }}


@endsection





@section ('maincontent')
  
						<div class="panel-body">

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th>Category Name</th>
                                        <th>Short Description</th>
                                        <th>Publication Status</th>                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=0; ?>
 								   @foreach( $category as $singlename) 
                                       <tr class="odd gradeX">                                                                

                                        <td>{{ ++$i }}</td>
                                        <td>{{ $singlename->categoryName }} </td>
                                        <td>{{ $singlename->shortDescription }}</td>
                                        <td class="center">{{ ($singlename->publicationStatus == 1)? 'Published' : 'Unpublished'  }}</td>
                                        <td class="center"> <a class="btn btn-info" href="{{ url('/category/edit/'. $singlename->id) }}">Edit</a>  <a class="btn btn-danger" href="{{ url('/category/delete/'. $singlename->id) }}">Delete</a></td>

                                      </tr>
                                     @endforeach
                                </tbody>
                             </table>     

                           {{ $category->onEachSide(3)->links() }}



                        </div>       


@endsection