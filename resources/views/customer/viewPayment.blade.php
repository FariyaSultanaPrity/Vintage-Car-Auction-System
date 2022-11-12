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
            <h1>Payment Details</h1>
    <tr>
    <thead class="thead-dark">
    <th scope="col">Recipt Picture</th>
        <th scope="col">Status</th>
       
        </thead>
        
    </tr>
    @foreach($details as $detail)
    <tr>
        
        <td ><img  src="{{asset('ProductImages/'.$detail->Payment_Recipt)}}" width="200px" height="200px" ></td>
        @if($detail->Verifiaction_Status == 1)
        <td >Collected</td>
        @else
        <td >Pending</td>
        @endif

    </tr>
    @endforeach

</table>

@endsection