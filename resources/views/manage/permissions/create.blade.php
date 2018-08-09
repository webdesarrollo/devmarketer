@extends('layouts.manage')
@section('title','DevMarketer - Permissions')
@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create new Permission</h1>
      </div>
    </div>
    <hr>
    <div class="card">
      <form class="" action="{{route('permissions.store')}}" method="post">
        {{csrf_field()}}

        <div class="card-content">
          <div class="block">
            <div class="field">
              <b-radio name="permission_type" native-value="basic" v-model="permissionType">
                Basic Permission
              </b-radio>
              <b-radio name="permission_type" native-value="crud" v-model="permissionType">
                Crud Permission
              </b-radio>
            </div>
          </div>

          <div class="field" v-if="permissionType == 'basic'">
            <label for="name" class="label">Name</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name">
            </p>
          </div>

          <div class="field" v-if="permissionType == 'basic'">
            <label for="display_name" class="label">Display Name:</label>
            <p class="control">
              <input type="text" class="input" name="display_name" id="display_name">
            </p>
          </div>

          <div class="field" v-if="permissionType == 'basic'">
            <label for="description" class="label">Description</label>
            <p class="control">
              <input type="text" class="input" name="description" id="description">
            </p>
          </div>

          <div class="field" v-if="permissionType == 'crud'">
            <label for="resource" class="label">Resource</label>
            <p class="control">
              <input type="text" class="input" name="resource" id="resource"
              v-model="resource"
              placeholder="The name of the resource"
              >
            </p>
          </div>
          <div class="columns" v-if="permissionType == 'crud'">
            <div class="column is-one-quarter">
              <div class="field">
                <b-checkbox v-model="crudSelected" native-value="create">Create</b-checkbox>
              </div>
              <div class="field">
                <b-checkbox v-model="crudSelected" native-value="read">Read</b-checkbox>
              </div>
              <div class="field">
                <b-checkbox v-model="crudSelected" native-value="update">Update</b-checkbox>
              </div>
              <div class="field">
                <b-checkbox v-model="crudSelected" native-value="delete">Delete</b-checkbox>
              </div>
            </div>
          <input type="hidden" name="crud_selected" :value="crudSelected">

            <div class="column">
                <table class="table" v-if="resource.length>=3">
                  <thead>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Description</th>
                  </thead>
                  <tbody>
                    <tr v-for="item in crudSelected">
                      <td v-text="crudName(item)"></td>
                      <td v-text="crudDisplayName(item)"></td>
                      <td v-text="crudDescription(item)"></td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>

          <div class="field">
            <p class="control">
              <button class="button is-primary">Create Permission</button>
            </p>
          </div>
        </div><!--Card content -->
      </form>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        permissionType: 'basic',
        resource: '',
        crudSelected: ['create', 'read', 'update', 'delete']
      },
      methods: {
        crudName: function(item) {
          return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        },
        crudDisplayName: function(item) {
          return item.toLowerCase() + "-" + app.resource.toLowerCase();
        },
        crudDescription: function(item) {
          return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
        },
      }
    });
  </script>
@endsection
