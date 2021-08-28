@extends('base') 
@section('main')
<style>
  body{
    padding : 0;
    margin : auto;
  }
ul{
  float : left;
  width : 100%;
  padding : 0;
}
ul li{
  float : left;
  width : 20%;
  border : 1px solid red;
  padding : 10px;
  list-style : none;
  background : #ddd;
}
ul li a{
  text-decoration : none;
  
}
</style>


<div class="row">

<ul id="menu">
  <li><a href="{{ route('role_index') }}">Roles</a></li>
  <li><a href="{{ route('index') }}">User</a></li>
  <li><a href="{{ route('login1') }}">Login</a></li>
</ul>
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update</h1>
        <a href="{{ route('index') }}" class="btn btn-primary">View All</a>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('update', $user->id) }}">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group">

                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" name="user_name" value="{{ $user->name }}" />
            </div>

            <div class="form-group">
                <label for="last_name">Email:</label>
                <input type="text" class="form-control" name="user_email" value="{{ $user->email }}" />
            </div>

            <div class="form-group">
                <label for="email">Password:</label>
                <input type="text" class="form-control" name="user_password" value="{{ $user->password }}" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection