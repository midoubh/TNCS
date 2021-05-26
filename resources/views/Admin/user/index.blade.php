@extends('layouts.admin')
@section('content')
  
<div class="blog-listing blog-listing-classic wow fadeIn">
      <div class="row">
            <div class="col-md-12 col-sm-12  ">
    
    <a href="{{ route('user.create') }}" class="btn btn-primary btn-round">Add New User</a>     
<table class="table table-bordered table-striped">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>E-MAIL</th>
    <th>Action</th>
</tr>
@foreach($users as $c)
<tr>
    <td>{{ $c->id }}</td>
    <td>{{ $c->name }}</td>
    <td>{{ $c->email }}</td>
    <td><a href="{{ route('user.edit',$c->id) }}"  class="btn btn-info ">Edit</a>
    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger btn-round">Delete</a>
<form action="{{ route('user.destroy',$c->id) }}" method="post">
    @method('DELETE')
    @csrf
</form>
</td>
</tr>
@endforeach
</table>
</div>
</div>
</div>

 @endsection    
      
         

