<head>
    
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

    

          

<form action="{{route('seller')}}" class="form-group" method="post" align="center" style="background: linear-gradient(45deg, #47cebe,#ef4a82) ;"  enctype="multipart/form-data">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    <h1 class="badge rounded-pill bg-danger"></h1>
        <h1>Registration as A Seller</h1>
 <div class="col-md-9 form-group">
        <span class="id">Bank Name</span>
        <input type="text" name="Bank_Name" value="{{old('Bank_name')}}" class="form-control" placeholder="Enter bank name where you want to recieve payment">
        @error('Bank_Name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-9 form-group">
        <span class="id">Account Number</span>
        <input type="text" name="Account_Number" value="{{old('Account_Number')}}" class="form-control" placeholder="Enter your Account_Number">
        @error('Account_Number')
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