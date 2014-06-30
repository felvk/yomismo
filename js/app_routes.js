App.IndexRoute = Ember.Route.extend({
  model: function() {
    return this.store.findAll('post');
  }
});

App.PostsRoute = Ember.Route.extend({
  model: function() {
    return this.store.findAll('post');
  }
});

App.PostsGeneralRoute = Ember.Route.extend({
  model: function() {
    return this.store.find('post').filterBy('category', 'general');
  }
});

App.PostsPeopleRoute = Ember.Route.extend({
  model: function() {
    return this.store.find('post').filterBy('category', 'people');
  }
});

App.GamesRoute = Ember.Route.extend({
  model: function() {
    return this.store.findAll('game');
  }
});
