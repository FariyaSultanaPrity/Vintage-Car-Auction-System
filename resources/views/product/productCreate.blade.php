<head>
    <title>Add Product </title>
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




<form action="{{route('productCreate')}}" class="form-group" method="post"    enctype="multipart/form-data">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}
    <div class="col-md-9 form-group">
   
    <h1 class="badge rounded-pill bg-danger"></h1>
        <h1>Add Product</h1>
 <div class="col-md-9 form-group">
        <span class="id">Car Name</span>
        <input type="text" name="P_CarName" value="{{old('P_CarName')}}" class="form-control" placeholder="Enter your car's name">
        @error('P_CarName')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Model</span>
        <input type="text" name="Model" value="{{old('Model')}}" class="form-control" placeholder="Enter your car's model name">
        @error('Model')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Color</span>
        <input type="text" name="Color" value="{{old('Color')}}" class="form-control" placeholder="Enter your car's color name">
        @error('Color')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Glass</span>
        <input type="text" name="Glass" value="{{old('Glass')}}" class="form-control" placeholder="Enter your car's glass name">
        @error('Glass')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


    <div class="col-md-9 form-group">
        <span class="id">Wheel Size</span>
        <input type="text" name="Wheel_Size" value="{{old('Wheel_Size')}}" class="form-control" placeholder="Enter your car's wheel size">
        @error('Wheel_Size')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


    <div class="col-md-9 form-group">
        <span class="id">Body</span>
        <input type="text" name="Body" value="{{old('Body')}}" class="form-control" placeholder="Enter your car's body name">
        @error('Body')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


    <div class="col-md-9 form-group">
        <span class="id">Reg_Num</span>
        <input type="number" name="Reg_Num" value="{{old('Reg_Num')}}" class="form-control" placeholder="Enter your car's registration number">
        @error('Reg_Num')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Car Picture</span>
        <input type="file" name="P_Photo"  class="form-control" >
        @error('P_Photo')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Original Purchase Invoice Photo</span>
        <input type="file" name="Original_Purchase_Invoice_Photo"  class="form-control" >
        @error('Original_Purchase_Invoice_Photo')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Insurance Photo</span>
        <input type="file" name="Insurance_Photo"  class="form-control" >
        @error('Insurance_Photo')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Road Tax Recipt Certificate</span>
        <input type="file" name="Road_Tax_Recipt_Certificate"  class="form-control" >
        @error('Road_Tax_Recipt_Certificate')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>


    <div class="col-md-9 form-group">
        <span class="id">Pullotion Certificate</span>
        <input type="file" name="Pullotion_Certificate"  class="form-control" >
        @error('Pullotion_Certificate')
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
    </div>

    
</body>
 
</html>
@endsection

