@extends('layouts.manage')
@section('title','DevMarketer - Roles')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Manage Roles</h1>
      </div>
      <div class="column">
        <a href="{{route('roles.create')}}" class="button is-primary is-pulled-right">
          <i class="fa fa-user-add m-r-10"></i> Create New Role
        </a>
      </div>
    </div>
    <hr>
    <div class="columns is-multiline">
      @foreach ($roles as $role)
        <div class="column is-one-quarter is-mobile">
          <div class="box">
            <div class="media">
              <div class="media-content">
                <div class="content">
                  <h3 class="title">{{$role->name}}</h3>
                  <h4 class="subtitle"><em>{{$role->display_name}}</em></h4>
                  <p>
                    {{$role->description}}
                  </p>
                </div>

                <div class="columns is-mobile m-t-5">
                  <div class="column is-one-half">
                    <div class="level-item">
                      <a href="{{route('roles.show',$role->id)}}" class="button is-info is-outlined is-fullwidth">
                        Details
                      </a>
                    </div>
                  </div>
                  <div class="column is-one-half">
                    <div class="level-item">
                      <a href="{{route('roles.edit',$role->id)}}" class="button is-light is-fullwidth">
                        Edit
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
