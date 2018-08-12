@extends('layouts.manage')
@section('title','DevMarketer - Posts')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Posts page</h1>
      </div>
      <div class="column">
        <a href="{{route('posts.create')}}" class="button is-primary  is-pulled-right">
          <i class="fa fa-user-add m-r-10"></i> Create New Post
        </a>
      </div>
    </div>
    <hr>
    <div class="card">
      <div class="card-content">
        <table class="table is-fullwidth is-narrow is-hoverable">
          <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Date Created</th>
            <th></th>
          </thead>
          <tbody>

          </tbody>
        </table>
      <div class="card-footer">

      </div>
      </div>
    </div>
  </div>
@endsection
