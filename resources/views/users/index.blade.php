@extends('layouts.app')


@section('content')



 <div class="card card-default">
 <div class="card-header">User</div>


 <table class="table">
 <thead>
 <th>Image</th>
 <th>email</th>
 <th>Name</th>
 <th></th>

 <th></th>
 </thead>
 <tbody>
 @foreach($users as $user)
 <tr>
 <td>
 
 
 </td>
 <td>
 {{ $user->email }}
 
 </td>
 <td>
 {{ $user->name }}
 </td>

 <td>

  @if(!$user->isAdmin())
  <form action="{{route('users.make-admin', $user->id)}}" method="POST">
 <button type="submit" class="btn btn-success btn-sm">Make as Admin</button>
 </form>
  @endif
 </td>
 
 </tr>
@endforeach
 
 </tbody>
 
 </table>

 


 
 </div>

@endsection