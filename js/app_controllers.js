App.IndexController = Ember.ArrayController.extend({
  heading: 'My awesome new site',
  time: function() {
    return (new Date()).toDateString();
  }.property(),
  latest3: function() {
    return this.slice(0,3);
  }.property()
});

App.PostsController = Ember.ArrayController.extend({
  sortProperties: ['published']
});

App.PostsGeneralController = Ember.ArrayController.extend({
  sortProperties: ['published']
  // postsGernal: function() {
  //   return this.filterBy('category', 'general');
  // }
});

App.PostsPeopleController = Ember.ArrayController.extend({
  sortProperties: ['published']
  // postsPeople: function() {
  //   return this.filterBy('category', 'general');
  // }
});

App.GamesController = Ember.ArrayController.extend({
  sortProperties: ['title'],
  gamesCount: function() {
    return this.get('length');
  }.property('length')
});

App.AboutController = Ember.Controller.extend({

});