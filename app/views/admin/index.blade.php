@extends('layout.main')
@section('content')

<div class="container">
 <div class="col-md-12">
 <div class="pull-right">
<!-- <a href=""><div class="btn btn-success">Add New Blog Post</div></a> -->
 </div>
 <table class="table table-striped">
 <thead>
 <tr>
 <th>ID</th>
 <th>Email</th>
 <th>Username</th>
 <th>Address</th>
 </tr>
 </thead>
 <tbody>
 @foreach($decp as $user)
 <tr>
 <td>{{ $user->id }}</td>
 <td>{{ $user->email }}</td>
 <td>{{ $user->username }}</td>
 <td>{{ $user->address }}</td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </div>


		
		

	


</tbody>

 </div>
@stop