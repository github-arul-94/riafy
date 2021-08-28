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
    <a href="{{ route('role_index') }}" class="btn btn-primary">View All</a>
    <h1 class="display-3">Add Roles</h1>
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
      <form method="post" action="{{ route('role_save') }}">
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          
          <div class="form-group">    
              <label for="first_name">Role Name:</label>
              <input type="text" class="form-control" name="role"/>
          </div>

          <div class="form-group">
              <label for="last_name">description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>                    
          <button type="submit" class="btn btn-primary-outline">Add Role</button>
      </form>
  </div>
</div>
</div>
@endsection