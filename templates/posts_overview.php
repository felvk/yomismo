  <div class="col-sm-4 col-md-3">
    <img {{bind-attr src='post.image'}} alt="">
  </div>
  <div class="col-sm-8 col-md-9">
    <h2>{{post.title}}</h2>
    <p>{{post.excerpt}}</p>
    <p>{{#link-to 'post' post class="btn btn-default" role="button"}}View details »{{/link-to}}</p>
  </div>
