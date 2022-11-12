@extends('layouts.app')
@section('content')

    @if(Session::get('user')) 
         @if(Session::get('Seller_Id'))
         <html>
           <div class="col-md-9 form-group">
        <h1> Your  Seller Id is:{{Session::get('Seller_Id')}}</h1>
        
        
    </div>

              
           </html>
         @else
           <html>
           <div class="col-md-9 form-group">
        <h1>Welcome, {{Session::get('user')}}</h1>
        <h3><a href="{{route('seller')}}">Want to be a seller?</a><h3>
        
    </div>

              
           </html>
        @endif
    @endif 
@endsection 