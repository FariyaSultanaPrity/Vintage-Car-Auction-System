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
    <br> </br>
    <br> </br>
    <br> </br>
            <h1>My Product Details</h1>
    <tr>
    <thead class="thead-dark">
    <th scope="col">Name</th>
        <th scope="col">Picture</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">Varification</th>
        <th scope="col"></th>
        </thead>
        
    </tr>
    @foreach($products as $product)
    <tr>
        <td >{{$product->P_CarName}}</td>
        <td ><img  src="{{asset('ProductImages/'.$product->P_Photo)}}" width="200px" height="200px" ></td>
        

        <td> <a href="{{route('productCatagory',['id'=>$product->Category_Id])}}"  class="btn btn-info">Catagory Details</a></td>
        <td> <a href="{{route('productRegDetails',['id'=>$product->Car_Reg_Details_Id])}}"  class="btn btn-info">Registration Details</a></td>

       <td><a href="{{route('productDelete',['id'=>$product->id])}}" type="button" class="btn btn-danger">Delete</a></td>

       @if($product->Valid_Status === 0)
       <td>Pending</td>
       
       @else
       <td>Approved</td>
       <td><a href="{{route('createAuction',['id'=>$product->id])}}" type="button" class="btn btn-danger">Go For Auction</a></td>
       @endif
       
    </tr>
    @endforeach

</table>

@endsection