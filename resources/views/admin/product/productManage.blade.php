
<style type="text/css">
	
.panel-body a {

	text-decoration: none;
}
</style>



@extends('admin.master')

@section('page-title')
  Product Manage
@endsection

@section('content_heading')
  Product Manage 
  <br>
  <h4 style="color: green">{{ Session::get('message') }}</h4>
@endsection


@section('maincontent')

		<div class="panel-body">
			Total product: {{ $products->total() }}

                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SI.</th>
                                        <th> Name</th>
                                        <th>Category Name</th>
                                        <th> price</th>
                                        <th> pic</th>
                                        <th> qty</th>
                                        <th> Pub.Status</th>
                                        <th> Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php $i=0; ?>
 								   @foreach( $products as $pro) 
                                       <tr class="odd gradeX">                                                                

                                        <td>{{ ++$i }}</td>
                                        <td>{{ $pro->productName }} </td>
                                        <td>{{ $pro->catName }} </td>
                                        <td>{{ $pro->price }} </td>
                                        <td><img src="{{ asset( $pro->pic)}}" alt="No pic" style="height: 50px;width: 50px;"></td>
                                        <td>{{ $pro->qty }} </td>
                                        <td class="center">{{ ($pro->publicationStatus == 1)? 'Published' : 'Unpublished'  }}</td>
                                        <td class="center">

                                          <a class="btn btn-primary" target="__blank"href="{{ url('product/view/'.$pro->id)}}">View</a> 
                                          <a  class="btn btn-success"target="__blank"href="{{ url('product/edit/'.$pro->id)}}">Edit</a> 
                                           <a class="btn btn-danger" href="{{ url('product/delete/'.$pro->id)}}" onclick="return confirm('are you want to delete ?')">Delete</a>

                                        </td>
                                        
                                      </tr>
                                     @endforeach
                                </tbody>
                             </table>     

				{{ $products->links() }}

      

         </div>       


@endsection