<div class="jumbotron">
  <div class="container">
    <h1>{{heading}}</h1>
    <small class="label label-default">{{time}}</small>
    <p>content</p>
    <p>{{#link-to 'about' class="btn btn-primary btn-lg" role="button"}}Learn more »{{/link-to}}</p>
  </div>
</div>

<div class="container">
  <h2>Latest Posts</h2>
  <div class="row">
    {{#each latest3}}
      <div class="col-sm-4">
        <h3>{{title}}</h3>
        {{{excerpt}}}
        <p>{{#link-to 'post' this class="btn btn-default" role="button"}}View details »{{/link-to}}</p>
      </div>
    {{/each}}
  </div>
  <hr>
  {{#link-to 'posts' class="btn btn-info"}}View all Posts »{{/link-to}}
</div>