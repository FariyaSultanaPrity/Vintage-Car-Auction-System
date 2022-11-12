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
            <h1>Product Details</h1>
    <tr>
    <thead class="thead-dark">
    <th scope="col">Picture</th>
        <th scope="col">Start Time</th>
        <th scope="col">End Time</th>
        <th scope="col">Minimum Amount</th>
        <th scope="col">Running Amount</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </thead>
        
    </tr>
    @foreach($details as $detail)
    @if($detail->Win_Status === 0)
    <tr>
       
        <td ><img  src="{{asset('ProductImages/'.$detail->Picture)}}" width="200px" height="200px" ></td>
        
        <td >{{$detail->Start_Time}}</td>
        <td >{{$detail->End_Time}}</td>
        <td >{{$detail->Start_Amount}}</td>
        <td >{{$detail->Final_Amount}}</td>
        <td> <a href="{{route('productCatagory',['id'=>$detail->Catagory_Id])}}"  class="btn btn-info">Catagory Details</a></td>
        <td> <a href="{{route('productRegDetails',['id'=>$detail->RegD_Id])}}"  class="btn btn-info">Registration Details</a></td>
        <td> <a href="{{route('createBid',['id'=>$detail->id])}}"  class="btn btn-danger">Bid</a></td>
      

    </tr>
    @endif
    @endforeach

</table>

@endsection