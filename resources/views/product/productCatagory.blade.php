
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
<head>
<style type="text/css">
    h1{
	font-size: 20px;
    text-align:center;
}
</style>



</style>
</head>



@extends('layouts.app')
@section('content')


<table class="table" align=center>
            <h1>Catagory Details</h1>
    <tr>
    <thead class="thead-dark">
        <th scope="col">Model</th>
        <th scope="col">Color</th>
        <th scope="col">Glass</th>
        <th scope="col">Wheel Size</th>
        <th scope="col">Body</th>
        <th scope="col"></th>
        </thead>
        
    </tr>
    
    <tr>
        <td >{{$catagories->Model}}</td>
        <td >{{$catagories->Color}}</td>
        <td >{{$catagories->Glass}}</td>
        <td >{{$catagories->Wheel_Size}}</td>
        <td >{{$catagories->Body}}</td>
        <td> <a href="{{route('productCatagoryEdit',['id'=>$catagories->id])}}"  class="btn btn-info">Edit</a></td>
        
    </tr>
   

</table>

@endsection