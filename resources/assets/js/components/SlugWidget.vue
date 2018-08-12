<style scoped>
  .slug-widget {
    display: flex;
    justify-content: flex-start;
    align-items: center;
  }
  .wrapper {
    margin:8px;
  }
  .slug {
    background-color:yellow;
    padding: 3px 5px;
  }
  .input {
    width: auto;
  }
  .url-wrapper {
    display: flex;
    -ms-align-items: center;
    align-items: center;
    height: 28px;
  }
</style>
<template>
    <div class="slug-widget m-b-10">
      <div class="icon-wrapper wrapper">
        <i class="fa fa-link"></i>
      </div>
      <div class="url-wrapper wrapper">
        <span class="root-url">{{url}}</span><!--
        --><span class="subdirectory-url">/{{subdirectory}}/</span><!--
        --><span class="slug" v-show="slug && !isEditing">{{slug}}</span><!--
        --><span class="slug-edit" v-show="isEditing">
            <input type="text" name="slug" class="input" v-model="customSlug">
        </span>
      </div>
      <div class="button-wrapper wrapper">
        <button class="save-slug-button button is-small" v-show="!isEditing" @click.prevent="editSlug">Edit</button>
        <button class="save-slug-button button is-small" v-show="isEditing" @click.prevent="saveSlug">Save</button>
        <button class="reset-slug button is-small" v-show="isEditing" @click.prevent="resetEditing">Reset</button>

      </div>
    </div>
</template>

<script>
    export default {
      props: {
        url: {type: String, required: true},
        subdirectory: {type: String, required: true},
        title: {type: String, required: true},
      },//props
      data: function() {
        return {
          slug: this.convertTitle(),
          isEditing: false,
          customSlug: '',
          wasEdited: false
        }
      },//data
      methods: {
        convertTitle: function() {
          this.title = slugify(this.title, {
            remove: /[*+~.()'"¡!¿?:@´`☢=]/g,
          });//lo tengo q pasar en dos, para q me eilmine todo
          return slugify(this.title, {
            remove: false,
            lower: true
          });
        },
        editSlug: function() {
          this.customSlug = this.slug
          this.isEditing= true;
        },
        saveSlug: function() {
          if (this.customSlug !== this.slug) {
            this.wasEdited = true;
          }
          this.slug = slugify(this.customSlug);
          this.isEditing= false;
        },
        resetEditing: function() {
          this.slug = this.convertTitle();
          this.wasEdited =false;
          this.isEditing= false;
        },
      },//metodos
      watch: {
        title: _.debounce(function() {
          if (this.wasEdited == false){
            this.slug = this.convertTitle()
          }
        },500),
        slug: function (request) {
          this.$emit.event('slug-changed', this.slug)
        }
      }//watch
    }
</script>
