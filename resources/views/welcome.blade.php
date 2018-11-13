@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body ">
                    <div class="container c">
                    <div class="row">
                        @foreach($prods as $p)
                        <div class="col-md-4 p ">
                            <div class="prod">
                            <img src="{{$p->image}}">
                            <h5>{{$p->price}}</h5>
                            <p>{{$p->name}}</p>
                            <p>{{$p->category}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
