<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>OEW Kickstarter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <link href="http://getbootstrap.com/examples/jumbotron/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/ie-emulation-modes-warning.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/vendor/ie10-viewport-bug-workaround.js"></script>
  </head>
  <body>

    <script type="text/x-handlebars" data-template-name="application">

      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>  
            </button>
            {{#link-to 'index' class='navbar-brand'}}My Site{{/link-to}}
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown dropdown-toggle" data-toggle="dropdown">
                {{#link-to 'posts'}}Posts{{/link-to}}
                <ul class="dropdown-menu">
                  <li>{{#link-to 'posts.general'}}General Posts{{/link-to}}</li>
                  <li>{{#link-to 'posts.people'}}People Posts{{/link-to}}</li>
                </ul>
              </li>
              <li>{{#link-to 'drawings'}}Gallery{{/link-to}}</li>
              <li>{{#link-to 'games'}}Games{{/link-to}}</li>
              <li>{{#link-to 'about'}}About{{/link-to}}</li>
            </ul>
          </div>
        </div>
      </div>

      {{outlet}}

      <footer class="container">
        <p>© Company 2014</p>
      </footer>

    </script>

<!-- #################### Templates ####################### -->

    <script type="text/x-handlebars" data-template-name="index">
      <?php include_once('templates/index.php'); ?>
    </script>

    <script type="text/x-handlebars" data-template-name="posts">
      <?php include_once('templates/posts.php'); ?>
    </script>

    <script type="text/x-handlebars" data-template-name="components/posts-overview">
      <?php include_once('templates/posts_overview.php'); ?>
    </script>

    <script type="text/x-handlebars" data-template-name="posts/general">
      <?php include_once('templates/posts_general.php'); ?>
    </script>

    <script type="text/x-handlebars" data-template-name="posts/people">
      <?php include_once('templates/posts_people.php'); ?>
    </script>

    <script type="text/x-handlebars" data-template-name="post">
      <?php include_once('templates/post.php'); ?>
    </script>

    <script type="text/x-handlebars" data-template-name="games">
      <?php include_once('templates/games.php'); ?>
    </script>

    <script type="text/x-handlebars" data-template-name="games/index">
      <?php include_once('templates/games_index.php'); ?>
    </script>

    <script type="text/x-handlebars" data-template-name="game">
      <?php include_once('templates/game.php'); ?>
    </script>

    <script type="text/x-handlebars" data-template-name="about">
      <?php include_once('templates/about.php'); ?>
    </script>

<!-- #################### End Templates ####################### -->

    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 
    <script src="js/vendor/handlebars-1.1.2.js"></script>
    <script src="js/vendor/ember-1.5.1.js"></script>
    <script src="js/vendor/ember-data.js"></script>
    <script src="js/app.js"></script>
    <script src="js/app_modules.js"></script>
    <script src="js/app_fixdata.js"></script>
    <script src="js/app_routes.js"></script>
    <script src="js/app_controllers.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
