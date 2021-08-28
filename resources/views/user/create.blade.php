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
    <a href="{{ route('index') }}" class="btn btn-primary">View All</a>
    <h1 class="display-3">Add a contact</h1>
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
      <form method="post" action="{{ route('save') }}">
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}" />
          
          <div class="form-group">    
              <label for="first_name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="city">Password:</label>
              <input type="password" class="form-control" name="password"/>
          </div> 
          <div class="form-group">
              <label for="city">Select Role</label>
              <select class="form-control" name="role_id">
                <option value="">Select</soption>
                @foreach ($roles as $i=> $role)
                <option value="{{$role->id}}">{{$role->role}}</soption>
                @endforeach

              </select>
              
          </div>                    
          <button type="submit" class="btn btn-primary-outline">Save</button>
      </form>
  </div>
</div>
</div>
@endsection