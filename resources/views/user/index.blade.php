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
    <h1 class="display-3">Users </h1>    
    
    <a href="{{ route('create') }}" class="btn btn-primary">Add </a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $i=> $users)
        
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            
            <td>
                <a href="{{ route('edit',$users->id)}}" class="btn btn-primary">Edit</a>
                <!-- <a href="{{ route('delete',$users->id)}}" class="btn btn-primary">Delete</a> -->
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
<script type="text/javascript">
$(document).ready(function(){
   console.log("ok"); 
});
</script>
@endsection
