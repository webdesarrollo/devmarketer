@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
@endif
<div class="container">
  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
        <div class="card-content">
          <h1 class="title is-4 has-text-centered">Forgot Your Password?</h1>

          <form class="" action="{{route('password.email')}}" method="post" role="form">
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

            <button type="submit" name="button" class="button is-primary  is-fullwidth m-t-20">Get Reset Link</button>
          </form>
        </div>
        <footer class="card-footer">
          <h5 class="column has-text-centered">
            <a href="{{route('login')}}" class="has-text-grey">Back to login</a>
          </h5>
        </footer>
      </div>
    </div>
  </div>
</div>
@endsection
