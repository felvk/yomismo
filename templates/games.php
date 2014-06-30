<div class="container">
  <h2>All my {{gamesCount}} Games</h2>
  <div class="row">
    <div class="col-sm-4 col-md-3">
      <ul class="nav nav-pills nav-stacked">
        {{#each}}
          {{#link-to 'game' this class="btn btn-default" tagName="li"}}{{title}}{{/link-to}}
        {{/each}}
      </ul>
    </div>
    <div class="col-sm-8 col-md-9">
      <div class="content">
        {{outlet}}
      </div>
    </div>
  </div>
</div>