<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="o3eKO3ilPC6h2J78NzoRUCyzLVKi9MJGZjeCw=">
    <title>Login - Hackathon Starter</title>
    <link rel="stylesheet" href="/assets/main.css" />
  </head>

  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/" class="navbar-brand"><i class="fa fa-cube"></i>Project name</a></div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/api">API Examples</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/login">Login</a></li>
            <li><a href="/signup">Create Account</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="page-header">
        <h3>Sign in</h3></div>
      <form method="POST">
        <input type="hidden" name="_csrf" value="o3eKO3ilPC6h2J78NzoRUCyzLVKi9MJGZjeCw=">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="form-group">
            <label for="email" class="control-label">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" autofocus class="form-control">
          </div>
          <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i>Login</button><a href="/forgot" class="btn btn-link">Forgot your password?</a></div>
          <hr><a href="/auth/facebook" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i>Sign in with Facebook</a><a href="/auth/twitter" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
          <a
            href="/auth/google" class="btn btn-block btn-google-plus btn-social"><i class="fa fa-google-plus"></i>Sign in with Google</a><a href="/auth/github" class="btn btn-block btn-github btn-social"><i class="fa fa-github"></i>Sign in with GitHub</a>
            <a href="/auth/linkedin" class="btn btn-block btn-linkedin btn-social"><i class="fa fa-linkedin"></i>Sign in with LinkedIn</a><a href="/auth/instagram" class="btn btn-block btn-instagram btn-social"><i class="fa fa-instagram"></i>Sign in with Instagram</a></div>
      </form>
    </div>
    <footer>
      <div class="container text-center">
        <p class="pull-left">© 2015 Company, Inc. All Rights Reserved</p>
        <ul class="pull-right list-inline">
          <li><a href="https://github.com/sahat/hackathon-starter">GitHub Project</a></li>
          <li><a href="https://github.com/sahat/hackathon-starter/issues">Issues</a></li>
        </ul>
      </div>
    </footer>
    <script src="/assets/lib/jquery-2.1.3.min.js"></script>
    <script src="/assets/lib/bootstrap.min.js"></script>
    <script src="/assets/main.js"></script>
    <script src="/assets/application.js"></script>
  </body>

</html>
