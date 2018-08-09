@extends('layouts.manage')
@section('title','DevMarketer - Permissions show')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">View Permission Details</h1>
      </div>

      <div class="column">
        <a href="{{route('permissions.edit',$permission->id)}}" class="button is-outlined is-info is-pulled-right">
          <i class="fa fa-edit m-r-10"></i> Edit
        </a>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <div class="card-content">
          <div class="box">
            <div class="media">
              <div class="media-content">
                <p>
                  <strong>{{$permission->display_name}}</strong> <small>{{$permission->name}}</small>
                  <br>
                  {{$permission->description}}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
