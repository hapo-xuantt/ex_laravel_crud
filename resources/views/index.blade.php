@extends('header')
@section('content')

     <div class="container">
  	  	<h2 class="text-center">CRUD EXAMPLE</h2>
  	  	<a href="{{ route('product.create') }}" class="btn btn-primary mb-2">Create</a>
    	<div class="list-group text-center">
			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Name</th>
			      <th scope="col">Price</th>
			      <th scope="col">Vendor</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($product as $pro) 
			    <tr>
			      <th scope="row">{{ $pro->id }}</th>
			      <td>{{ $pro->name }}</td>
			      <td>{{ $pro->price }} $</td>
			      <td>{{ $pro->vendor }}</td>
			      <td class="d-flex flex-row justify-content-center">
			      	<a href="{{ route('product.show', $pro->id) }}" class="btn btn-warning mr-2">Show</a>
			      	<a href="{{ route('product.edit', $pro->id) }}" class="btn btn-success mr-2">Edit</a>
			      	<form action="{{ route('product.delete', $pro->id) }}" method="POST" accept-charset="utf-">
			      		@method('DELETE')
			      		@csrf
			      		<button type="submit" class="btn btn-danger">Del</button>
			      	</form>
			      </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
    	</div>
    </div>
    
  @endsection
