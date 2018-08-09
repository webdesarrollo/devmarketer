@extends('layouts.manage')
@section('title','DevMarketer - Roles show')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create new Role</h1>
      </div>
    </div>
    <hr>
    <form action="{{route('roles.store')}}" method="POST">
    <div class="columns">
        <div class="column">
          <div class="box">
            <div class="media">
              <div class="media-content">
                <div class="content">
                  <h2 class="title">Role details:</h2>
                    {{csrf_field()}}
                    <div class="field">
                    <label for="display_name" class="label">Name</label>
                    <p class="control">
                      <input type="text" name="display_name" value="{{old('display_name')}}" class="input">
                    </p>
                    </div>

                    <div class="field">
                    <label for="slug" class="label">Slug (Can not be edited)</label>
                    <p class="control">
                      <input type="text" name="name" value="{{old('name')}}" class="input">
                    </p>
                    </div>

                    <div class="field">
                    <label for="display_name">Description</label>
                    <p class="control">
                      <input type="text" name="description" value="{{old('description')}}" class="input">
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
                <button type="submit" class="button is-primary m-t-10">Save New Role</button>
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
        permissionsSelected: []
      }
    });
  </script>
@endsection
