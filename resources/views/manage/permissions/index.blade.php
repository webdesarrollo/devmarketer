@extends('layouts.manage')
@section('title','DevMarketer - Permissions')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Manage Permissions</h1>
      </div>
      <div class="column">
        <a href="{{route('permissions.create')}}" class="button is-primary is-pulled-right">
          <i class="fa fa-user-add m-r-10"></i> Create New Permissions
        </a>
      </div>
    </div>
    <hr>
    <div class="card">
      <div class="card-content">
        <table class="table is-fullwidth is-narrow is-hoverable">
      <thead>
        <th>Name</th>
        <th>Slug</th>
        <th>Description</th>
        <th>Actions</th>
      </thead>
      <tbody>
        @foreach ($permissions as $permission)
        <tr>
          <td>{{$permission->name}}</td>
          <td>{{$permission->display_name}}</td>
          <td>
            {{$permission->description}}
          </td>
          <td>
            <a href="{{route('permissions.show',$permission->id)}}" class="button is-outlined is-info">
              Show
            </a>
            <a href="{{route('permissions.edit',$permission->id)}}" class="button is-outlined is-info">
              Edit
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

      </div>
    </div>
  </div>
@endsection
