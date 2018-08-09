@extends('layouts.manage')
@section('title','DevMarketer - Permissions')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit Permission</h1>
      </div>
    </div>
    <hr>
    <div class="card">
      <form class="" action="{{route('permissions.update',$permission->id)}}" method="POST">
        {{csrf_field()}}
        {{method_field('PUT')}}

        <div class="card-content">

          <div class="field">
            <label for="display_name" class="label">Display Name:</label>
            <p class="control">
              <input type="text" class="input" name="display_name" id="display_name" value="{{$permission->display_name}}">
            </p>
          </div>

          <div class="field">
            <label for="description" class="label">Description</label>
            <p class="control">
              <input type="text" class="input" name="description" id="description" value="{{$permission->description}}">
            </p>
          </div>

          <div class="field">
            <p class="control">
              <button  type="submit" class="button is-primary">Save Permission</button>
            </p>
          </div>
        </div><!--Card content -->
      </form>
    </div>
  </div>
@endsection
