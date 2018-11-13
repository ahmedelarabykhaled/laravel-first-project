@extends('layouts.app')

@section('content')

<style type="text/css">
    form .btn:nth-child(2)
    {
        background-color: red;
        color: #fff;
    }
    form .btn:nth-child(1)
    {
        border: 1px red solid;
        color: red;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Control</div>
                <div class="panel-body"> 

                  <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default">
                      

                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>category</th>
                            <th>action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($prods as $p)
                          <tr>
                            <th scope="row">{{$p->id}}</th>
                            <td>{{$p->name}}</td>
                            <td>{{$p->category}}</td>
                            <td>
                              <div class="form-group" style="
    margin-bottom: 0px;
">
                                  <form >
                                    {{csrf_field()}}
                                    <div class="btn-group mr-2" role="group" aria-label="Second group">
    <a href="product/{{$p->id}}/modify" class="btn">modify</a>
    
    <a href="product/{{$p->id}}/delete" class="btn btn-danger">delete</a>
    
  </div>
                                  </form>
                              </div>
                            </td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>
                    </div> 
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection