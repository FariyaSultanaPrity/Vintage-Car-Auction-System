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
            <h1>Registration Details</h1>
    <tr>
    <thead class="thead-dark">
        <th scope="col">Original Purchase Invoice Photo</th>
        <th scope="col">Insurance Photo</th>
        <th scope="col">Road_Tax_Recipt_Certificate</th>
        <th scope="col">Pullotion_Certificate</th>
        
        </thead>
        
    </tr>
    
    <tr>
    <td ><img  src="{{asset('ProductImages/'.$details->Original_Purchase_Invoice_Photo)}}" width="200px" height="200px" ></td>
    <td ><img  src="{{asset('ProductImages/'.$details->Insurance_Photo)}}" width="200px" height="200px" ></td>
    <td ><img  src="{{asset('ProductImages/'.$details->Road_Tax_Recipt_Certificate)}}" width="200px" height="200px" ></td>
    <td ><img  src="{{asset('ProductImages/'.$details->Pullotion_Certificate)}}" width="200px" height="200px" ></td>     
        
        
    </tr>
   

</table>

@endsection