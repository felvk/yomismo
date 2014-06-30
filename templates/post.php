<div class="container">
  <div class="row">
    <div class="col">
      <div class="image">
        <img {{bind-attr src='image'}} alt="">
      </div>
      <div class="content">
        <h2>{{title}} <small>by {{author.name}}</small></h2>
        <p>{{content}}</p>
      </div>
    </div>
  </div>
</div>