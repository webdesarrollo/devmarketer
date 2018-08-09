@extends('layouts.manage')
@section('title','DevMarketer - Roles show')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit {{$role->display_name}}</h1>
      </div>
      <div class="column">
        <a href="{{route('roles.create')}}" class="button is-primary is-pulled-right">
          <i class="fa fa-user-add m-r-10"></i> Create new Role
        </a>
      </div>
    </div>
    <hr>
    <form action="{{route('roles.update', $role->id)}}" method="POST">
    <div class="columns">
        <div class="column">
          <div class="box">
            <div class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">Role details:</h2>
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="field">
                    <label for="display_name" class="label">Name</label>
                    <p class="control">
                      <input type="text" name="display_name" value="{{$role->display_name}}" class="input">
                    </p>
                    </div>

                    <div class="field">
                    <label for="slug" class="label">Slug (Can not be edited)</label>
                    <p class="control">
                      <input type="text" name="name" value="{{$role->name}}" class="input" disabled>
                    </p>
                    </div>

                    <div class="field">
                    <label for="display_name">Description</label>
                    <p class="control">
                      <input type="text" name="description" value="{{$role->description}}" class="input">
                    </p>
                    </div>

                    <input type="hidden" name="permissions" :value="permissionsSelected">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
          <div class="box">
            <div class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">Permissions:</h2>
                    @foreach ($permissions as $permission)
                      <div class="field">
                        <b-checkbox v-model="permissionsSelected" :native-value="{{$permission->id}}">
                          {{$permission->display_name}} <em> ({{$permission->description}})</em>
                        </b-checkbox>
                      </div>
                    @endforeach
                </div>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <button type="submit" class="button is-primary m-t-10">Save Role</button>
              </div>
            </div>
            </div>
          </div>
        </div>
    </form>
    </div>
@endsection
@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        permissionsSelected: {!!$role->permissions->pluck('id')!!}
      }
    });
  </script>
@endsection
