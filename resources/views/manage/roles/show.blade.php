@extends('layouts.manage')
@section('title','DevMarketer - Roles show')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">{{$role->display_name}} <small><em> ({{$role->name}})</em></small></h1>
      </div>
      <div class="column">
        <a href="{{route('roles.edit',$role->id)}}" class="button is-primary is-pulled-right">
          <i class="fa fa-user-add m-r-10"></i> Edit Role
        </a>
      </div>
    </div>
    <hr>
    <div class="columns">
        <div class="column">
          <div class="box">
            <div class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">Permissions:</h2>
                  <ul>
                    @foreach ($role->permissions as $r)
                      <li>
                        {{$r->display_name}}
                        <em class="m-l-5 has-text-grey">
                          ({{$r->description}})
                        </em>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection
