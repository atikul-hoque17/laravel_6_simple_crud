
<style type="text/css">
	
.panel-body a {
	color: red;
	text-decoration: none;
}
</style>



@extends('admin.master')

@section('page-title')
  Product View
@endsection

@section('content_heading')
  Product View 
  <br>
  <h4 style="color: green">{{ Session::get('message') }}</h4>
@endsection


@section('maincontent')

  <img src="{{ asset(url($productsView->pic)) }}" alt="No Pic"style="width:200px;height: 200px;"><hr>
    Product Name:{{ $productsView->productName}}<br>
    Category Name:{{ $productsView->catName}}<br>
    Price:{{ $productsView->price}}<br>
    Quantity:{{ $productsView->qty}}<br>
    Publication Status:{{ $productsView->publicationStatus }}<br><br>
    <b>Short Description:</b>{{ $productsView->shortDescription }}<br>
    <b>Long Description:</b>{{ $productsView->longDescription }}<br>




@endsection