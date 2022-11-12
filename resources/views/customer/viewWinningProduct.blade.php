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
            <h1>Winning Products</h1>
    <tr>
    <thead class="thead-dark">
    <th scope="col">Picture</th>
        <th scope="col">Winning Amount</th>
        <th scope="col">Bank Name</th>
        <th scope="col">Seller Account Number</th>
        </thead>
        
    </tr>
    @foreach($details as $detail)
    <tr>
        
        <td ><img  src="{{asset('ProductImages/'.$detail->Picture)}}" width="200px" height="200px" ></td>
        
        <td >{{$detail->Final_Amount}}</td>
        <td >{{$detail->S_BankName}}</td>
        <td >{{$detail->S_AccountNo}}</td>
        
         @if(is_null($detail->Payment_Id))
            <td> <a href="{{route('createPayment',['id'=>$detail->id])}}"  class="btn btn-danger">Payment</a></td>
         
         @endif

    </tr>
    @endforeach

</table>

@endsection