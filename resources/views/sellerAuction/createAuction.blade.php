<head>
@extends('layouts.app')
@section('content')
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
     <style type="text/css">
        *{
            text-decoration: none;
        }
 
        .col-md-9{
            text-align: left;
        }
        form.form-group{
            padding-top: 0%;
            text-align: left;
            margin-left: 40%;
            margin-right: 25%;
            border-radius: 30px;
            margin-top: 0%;
            box-shadow: 5px 7px 10px rgba(0, 0, 0, .5);
            
        }
        .form-control{
            margin-left: 45px;
           box-shadow: 5px 7px 10px rgba(0, 0, 0, .5);
            
        }
        .id{
            margin-left: 45px;
        }
        .text-danger{
            margin-left: 45px;
        }
        .edit{
            color: red;
           
            font: bold;
            font-size: 25px;
        }
 
        
        div.pro{
            
            margin-top: 40px;
            height: 80px;
            border-radius: 40px;
        }
        .id{
            color: black;
            font-size: 18px;
        }
        .p{
            margin-top: 10px;
        }
        h1{
            margin-left: 150px;
            color: blue;
            font-size: 30px;
            margin-bottom: 20px;
        }
        .text-danger{
            font-size: 15px;
            background-color: black;
        }
 
    </style>
</head>
<body>        

    

          

<form action="{{route('createAuction')}}" class="form-group" method="post" align="center"   enctype="multipart/form-data">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    <h1 class="badge rounded-pill bg-danger"></h1>
        <h1>Add Product in Auction</h1>
 <div class="col-md-9 form-group">
        <span class="id">Product Id</span>
        <input type="text" name="P_Id" value="{{$item->id}}" class="form-control" readonly>
       
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Start Amount</span>
        <input type="number" name="Start_Amount" value="{{old('Start_Amount')}}" class="form-control" placeholder="Enter Start Amount for Auction">
        @error('Start_Amount')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Start Time</span>
        <input type="datetime-local" name="Start_Time" value="{{old('Start_Time')}}" class="form-control" placeholder="Enter Start Time for Auction">
        @error('Start_Time')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">End Time</span>
        <input type="datetime-local" name="End_Time" value="{{old('End_Time')}}" class="form-control" placeholder="Enter End Time for Auction">
        @error('Start_Time')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    
    <div class="p">
    <div class="d-grid col-12 mx-auto">
            <input type="submit" class="btn btn-primary" value="Submit" >
    </div>
</div>

</form>


</div>

    
</body>
</html>
@endsection