@extends('layouts.app')

@section('content')
<div class="container">
  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
        <div class="card-content">
          <h1 class="title is-2 has-text-centered">Log In</h1>

          <form class="" action="{{route('login')}}" method="post" role="form">
            {{csrf_field()}}
            <div class="field">
              <label for="email" class="label">Email address</label>
              <p class="control">
                <input class="input {{$errors->has('email') ? ' is-danger' : ''}}" type="email" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">
                  {{$errors->first('email')}}
                </p>
              @endif
            </div>
            <div class="field">
              <label for="password" class="label">Password</label>
              <p class="control">
                <input class="input {{$errors->has('password') ? ' is-danger' : ''}}" type="password" name="password" id="password">
              </p>
              @if ($errors->has('password'))
                <p class="help is-danger">
                  {{$errors->first('password')}}
                </p>
              @endif
            </div>

            <div class="field">
              <b-checkbox name="remember" class="m-t-15">Remenber Me</b-checkbox>
            </div>
            <button type="submit" name="button" class="button is-primary  is-fullwidth m-t-20">Log In</button>
          </form>
        </div>
        <footer class="card-footer">
          <h5 class="column has-text-centered">
            <a href="{{route('password.request')}}" class="has-text-grey">Forgot Your Password?</a>
          </h5>
        </footer>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
  <script>
    var app = new Vue ({
      el:'#app',
      data: {
      }
    })
  </script>
@endsection
