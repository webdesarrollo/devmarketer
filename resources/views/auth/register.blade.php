@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="columns">
      <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card">
          <div class="card-content">
            <h1 class="title is-2 has-text-centered">Register</h1>

            <form class="" action="{{route('register')}}" method="post" role="form">
              {{csrf_field()}}
              <div class="field">
                <label for="name" class="label">Name</label>
                <p class="control">
                  <input class="input {{$errors->has('name') ? ' is-danger' : ''}}" type="text" name="name" id="name"  value="{{old('name')}}" required>
                </p>
                @if ($errors->has('name'))
                  <p class="help is-danger">
                    {{$errors->first('name')}}
                  </p>
                @endif
              </div>
              <div class="field">
                <label for="email" class="label">Email address</label>
                <p class="control">
                  <input class="input {{$errors->has('email') ? ' is-danger' : ''}}" type="email" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}" required>
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
                  <input class="input {{$errors->has('password') ? ' is-danger' : ''}}" type="password" name="password" id="password" required>
                </p>
                @if ($errors->has('password'))
                  <p class="help is-danger">
                    {{$errors->first('password')}}
                  </p>
                @endif
              </div>
              <div class="field">
                <label for="password_confirmation" class="label"> Confirm Password</label>
                <p class="control">
                  <input class="input {{$errors->has('password_confirmation') ? ' is-danger' : ''}}" type="password" name="password_confirmation" id="password_confirmation" required>
                </p>
                @if ($errors->has('password_confirmation'))
                  <p class="help is-danger">
                    {{$errors->first('password_confirmation')}}
                  </p>
                @endif
              </div>

              <button type="submit" name="button" class="button is-primary  is-fullwidth m-t-20">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
