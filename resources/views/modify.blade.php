@extends('layouts.app')

@section('content')

<style type="text/css">
	.panel-default
	{
		padding: 20px;
	}
	.panel-default .btn
	{
		margin-top: 20px;
	}
	input,textarea
	{
		margin-bottom: 20px;
	}
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Product</div>
                <div class="panel-body"> 

                  <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default ">
                      <div>
                      	<form action="addtodb">
                      	<label>Name : </label>
                      	<input type="text" name="name" class="form-control">

                      	<label>Category : </label>
                      	<input type="text" name="category" class="form-control">

                      	<label>price : </label>
                      	<input type="number" name="price" class="form-control">

                      	<label>discription : </label>
                      	<textarea cols="150"  rows="5" name="discription" class="form-control"></textarea>

                      	<label>Image Url : </label>
                      	<input type="text" class="form-control" name="image">

                      	<button type="submit" class="btn btn-success">Add Product</button>
                      	</form>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@stop