@extends('layouts.manage')
@section('title','DevMarketer - Users')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Edit User</h1>
      </div>
    </div>
    <hr>
    <div class="card">
      <form class="" action="{{route('users.update',$user->id)}}" method="post">
        {{method_field('PUT')}}
        {{csrf_field()}}
        <div class="card-content">
          <div class="field">
            <label for="name" class="label">Name:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name"
              value="{{$user->name}}">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="emil" class="input" name="email" id="email" value="{{$user->email}}">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            <div class="field">
              <b-radio name="password_options" v-model="password_options" native-value="keep">Do Not Change Password</b-radio>
            </div>
            <div class="field">
              <b-radio name="password_options" v-model="password_options" native-value="auto">Auto-Generate New Password</b-radio>
            </div>
            <div class="field">
              <b-radio name="password_options" v-model="password_options" native-value="manual">Manually Set New Password</b-radio>
              <p class="control m-t-10">
                <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'" placeholder="Manually give a password to this user" required>
              </p>
            </div>
          </div>

          <div class="field">
            <p class="control">
              <button class="button is-primary m-b-10">Edit User</button>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep',
      }
    });
  </script>
@endsection
