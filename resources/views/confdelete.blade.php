@extends('layouts.app')

@section('content')

<style type="text/css">
	.d
	{
		position: absolute;
		top: 40%;
		width: 100%;
		text-align: center;
	}
	.d h1
	{
		margin-bottom: 20px;
	}
	.d a
	{
		text-decoration: none;
	}
</style>

<div class="d">
<h1>Do You Want To Delete This Item</h1>
<a href="confirm" class="btn btn-danger">confirm</a>
</div>

@stop