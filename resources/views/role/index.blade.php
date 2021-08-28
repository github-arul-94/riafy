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

<div class="col-sm-12">
    <h1 class="display-3">Roles </h1>    
    <a href="{{ route('role_create') }}" class="btn btn-primary">Add New</a>
    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>#</td>
          <td>Role</td>
          <td>Description</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($role as $i=> $role)
        
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{$role->role}}</td>
            <td>{{$role->description}}</td>
            <td>
                <a href="{{ route('role_edit',$role->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection