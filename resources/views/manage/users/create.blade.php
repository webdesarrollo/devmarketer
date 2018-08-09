@extends('layouts.manage')
@section('title','DevMarketer - Users')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create new User</h1>
      </div>
    </div>
    <hr>
    <div class="card">
      <form class="" action="{{route('users.store')}}" method="post">
        {{csrf_field()}}
        <div class="card-content">
          <div class="field">
            <label for="name" class="label">Name:</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="email" class="input" name="email" id="email">
            </p>
          </div>

          <div class="field">
            <label for="password" class="label">Password</label>
            <p class="control">
              <input type="text" class="input" name="password" id="password" v-if="!auto_password" placeholder="Manually give a password to this user">
              <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Auto Generate Password</b-checkbox>
            </p>
          </div>

          <div class="field">
            <p class="control">
              <button class="button is-primary">Create User</button>
            </p>
          </div>

        <div class="card-footer">
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
        auto_password: true,
      }
    });
  </script>
@endsection
