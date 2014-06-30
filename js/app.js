var App = Ember.Application.create();

App.ApplicationAdapter = DS.FixtureAdapter.extend();

App.Router.map(function() {
  // this.resource('posts', function() {
  //   this.resource('post', { path: ':post_id'});
  // });
  this.resource('posts', function() {
    this.route('general');
    this.route('people');
  });
  this.resource('post', { path: ':post_id'});
  this.resource('drawings');
  this.resource('games', function() {
    this.resource('game', { path: ':game_id'});
  });
  this.route('about');
});