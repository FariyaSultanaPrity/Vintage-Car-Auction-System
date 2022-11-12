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
    <br></br>
    <br></br>
    <br></br>
            <h1>My Auctioning Product Details</h1>
    <tr>
    <thead class="thead-dark">
    <th scope="col">Minimum Amount</th>
        <th scope="col">Final Amount</th>
        <th scope="col">Start Time</th>
        <th scope="col">End Time</th>
        <th scope="col">Status</th>
        
        </thead>
        
    </tr>
    
    @foreach($details as $detail)
    <tr>
        <td >{{$detail->Start_Amount}}</td>
        <td >{{$detail->Final_Amount}}</td>
        <td >{{$detail->Start_Time}}</td>
        <td >{{$detail->End_Time}}</td>
       
       @if($detail->Win_Status === 0)
       <td>Running</td>
       
       @else
       <td>Done</td>
       @endif
       <td><a href="{{route('auctionDelete',['id'=>$detail->id])}}" type="button" class="btn btn-danger">Delete</a></td> 
    </tr>
    @endforeach

</table>

@endsection