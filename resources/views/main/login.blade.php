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
table{
  width : 100%;
}
table tr td{
  border : 1px solid #eee;
  padding : 10px;
}
</style>


<div class="row">

<ul id="menu">
  <li><a href="{{ route('role_index') }}">Roles</a></li>
  <li><a href="{{ route('index') }}">User</a></li>
  <li><a href="{{ route('login1') }}">Login</a></li>
</ul>  
 <div class="col-sm-8 offset-sm-2">
    
    <h1 class="display-3">Login</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('login') }}">
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          
          <div class="form-group">    
              <label for="first_name">Email Id:</label>
              <input type="text" class="form-control" name="email"/>
          </div>

          <div class="form-group">
              <label for="last_name">Password:</label>
              <input type="password" class="form-control" name="password"/>
          </div>                     
          <button type="submit" class="btn btn-primary-outline">Login</button>
      </form>
  </div>
</div>
</div>
@endsection