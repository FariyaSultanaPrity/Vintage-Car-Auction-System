@extends('layouts.app')
@section('content')

<form action="{{route('login')}}" class="form-group" method="post"  >
    {{csrf_field()}}
    
    <div class="col-md-4 form-group">
    <br><br><h1>Login</h1></br><br>
        <span>Email</span>
        <input type="text" name="User_Email" value="{{old('User_Email')}}" class="form-control">
        @error('User_Email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="password" name="Password" value="{{old('Password')}}" class="form-control">
        @error('Password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
   
    <input type="checkbox" id="me" name="rem_me" value="Remember Me">
      <label for="remember me"> Remember Me</label><br><br>
    <input type="submit" class="btn btn-success" value="Sign In" > 
  
                  
</form>


@endsection    