@extends('layouts.manage')
@section('title','DevMarketer - Users')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">View User Details</h1>
      </div>
    </div>
    <hr>
    <div class="card">
      <div class="card-content">
        <div class="column">
          <a href="{{route('users.edit',$user->id)}}" class="button is-primary is-pulled-right">
            <i class="fa fa-user m-r-5"></i>Edit User
          </a>
        </div>
        <div class="column is-half">
        <div class="field">
          <label for="name">Name</label>
          <pre>{{$user->name}}</pre>
        </div>

        <div class="field">
          <label for="email">Email</label>
          <pre>{{$user->email}}</pre>
        </div>
      </div>
    </div>
    </div>
  </div>
@endsection
