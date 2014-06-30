App.Post = DS.Model.extend({
  title: DS.attr('string'),
  category: DS.attr('string'),
  image: DS.attr('string'),
  published: DS.attr('string'),
  excerpt: DS.attr('string'),
  content: DS.attr('string'),
  author: DS.belongsTo('author')
});

App.Author = DS.Model.extend({
  name: DS.attr('string'),
  posts: DS.hasMany('post', { async: true })
});

App.Game = DS.Model.extend({
  title: DS.attr('string'),
  description: DS.attr('string'),
  src: DS.attr('string')
});