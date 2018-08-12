<div class="widget">
  <article class="media">
    <figure class="media-left">
      <p class="image">
        <img src="https://placehold.it/50x50" class="is-rounded">
      </p>
    </figure>
    <div class="media-content">
      <div class="field">
        <p class="control">
          <h5 class="title is-5">By: {{auth::user()->name}}</h5>
          <p class="subtitle is-italic is-size-6">(lorem)</p>
        </p>
      </div>
    </div>
  </article>
  <article class="media">
    <figure class="media-left">
      <p class="status-icon">
        <i class="fa fa-file"></i>
      </p>
    </figure>
    <div class="media-content">
      <div class="field">
        <p class="control">
          <strong>Draft Saved</strong>
          <p class="subtitle is-italic is-size-6">A few minutes ago</p>
        </p>
      </div>
    </div>
  </article>
  <div class="field is-grouped">
    <p class="control is-flex widget-btn">
      <button class="button is-info is-outlined is-fullwidth">Save Draft</button>&nbsp;
      <button class="button is-primary is-fullwidth">Publish</button>
    </p>
  </div>
</div>
