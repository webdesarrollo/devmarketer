@extends('layouts.manage')
@section('title','DevMarketer - Users')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Manage Users</h1>
      </div>
      <div class="column">
        <a href="{{route('users.create')}}" class="button is-primary  is-pulled-right">
          <i class="fa fa-user-add m-r-10"></i> Create New Users
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
        @foreach ($users as $user)
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>
            {{$user->created_at->toFormattedDateString()}}
          </td>
          <td class="has-text-right">
            <a href="{{route('users.edit', $user->id)}}" class="button is-outlined is-info">
              Edit
            </a>
            <a href="{{route('users.show', $user->id)}}" class="button is-outlined">
              Show
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="card-footer">
      {{$users->render()}}
    </div>
      </div>
    </div>
  </div>
@endsection
