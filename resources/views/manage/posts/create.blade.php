@extends('layouts.manage')
@section('title','DevMarketer - New Posts')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Add New Blog Post</h1>
      </div>
    </div>
    <hr>
    <div class="card">
      <form class="" action="{{route('posts.store')}}" method="post">
        {{csrf_field()}}
        <div class="card-content">
          <div class="columns">
            <div class="column is-three-quarters-desktop is-three-quarters-tablet">
              <b-field>
                <b-input placeholder="Post title" v-model="title">
                </b-input>
              </b-field>

              <slug-widget
                  url="{{url('/')}}"
                  subdirectory="blog"
                  :title="title"
                  @slug-changed="updateSlug"
              ></slug-widget>
              <input type="hidden" v-model="slug" name="slug">

              <b-field>
                  <b-input type="textarea" placeholder="Compose your masterpiece">
                  </b-input>
              </b-field>
            </div><!--is-three-quarters-->
            <div class="is-one-quarter-desktop is-narrow-tablet">
              @include('_includes.widget.widget')
            </div><!--column is-one-quarter-->
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
    var app = new Vue ({
      el:'#app',
      data: {
        title: '',
        slug: ''
      },//data
      methods: {
        updateSlug: function(request) {
          this.slug = request;
        }
      }//metodos
    })//app
  </script>
@endsection
