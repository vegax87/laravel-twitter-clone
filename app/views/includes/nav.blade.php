<nav class="navbar navbar-default" role="navigation">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="{{action('HomeController@showMain')}}">Twitter-clone</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search" action="/search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </form>
        <li><a href="/settings" title="Settings"><span class="glyphicon glyphicon-cog"></span></a></li>
        <li><a href="{{action('UserController@logout')}}">Logout</a></li>
        <li>
            <a href="/#user/{{User::getCurrent()->userName}}" class="nav-profile-link">
                <img src="http://fillmurray.com/49/49" alt="Profile Image" class="img-circle" height="49" width="49">
            </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>