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
    <h1 class="display-3">{{ $role->role }}</h1>
    <h6>{{ $role->description }}</h6>

    <p>Because websites are often complex, a term "content management" appeared in the late 1990s identifying a method or in some cases a tool to organize all the diverse elements to be contained on a website.[3][better source needed] Content management often means that within a business there is a range of people who have distinct roles to do with content management, such as content author, editor, publisher, and administrator. But it also means there may be a content management system whereby each of the different roles is organized to provide their assistance in operating the system and organizing the information for a website. A business may also employ various content protection measures, which are typically technologies used to attempt to frustrate copying without permission.

Even though a business may organize to collect, contain, and represent that information online, content needs organization in such a manner to provide the reader (browser) with an overall "customer experience" that is easy to use, to be sure the site can be navigated with ease, and that the website can fulfill the role assigned to it by the business, that is, to sell to customers, to market products and services, or to inform customers. </p>
  <div>
    
  </div>
</div>
</div>
@endsection