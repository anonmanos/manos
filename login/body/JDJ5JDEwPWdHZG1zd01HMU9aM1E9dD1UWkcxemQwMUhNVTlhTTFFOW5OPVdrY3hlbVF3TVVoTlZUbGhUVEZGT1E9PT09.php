<?
  if(isset($_SESSION["gtnsession"])) {
    // for error
    header('Refresh: 0; url=/');
    exit();
  }
?>
    <div class="page-header">
      <h3>Sign in</h3>
    </div>
    <form method="POST" action="/login/login/">
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
          <button type="submit" class="btn btn-primary"><i class="fa fa-user"></i>Signin</button>
          <a href="/" class="btn btn-link">Forgot your password?</a>
        </div>
        <hr>
        <a href="/auth/facebook" class="btn btn-block btn-facebook btn-social">
          <i class="fa fa-facebook"></i>Sign in with Facebook
        </a>
        <a href="/auth/twitter" class="btn btn-block btn-twitter btn-social">
          <i class="fa fa-twitter"></i>Sign in with Twitter
        </a>
        <a href="/auth/google" class="btn btn-block btn-google-plus btn-social">
          <i class="fa fa-google-plus"></i>Sign in with Google
        </a>
        <a href="/auth/github" class="btn btn-block btn-github btn-social">
          <i class="fa fa-github"></i>Sign in with GitHub
        </a>
        <a href="/auth/linkedin" class="btn btn-block btn-linkedin btn-social">
          <i class="fa fa-linkedin"></i>Sign in with LinkedIn
        </a>
        <a href="/auth/instagram" class="btn btn-block btn-instagram btn-social">
          <i class="fa fa-instagram"></i>Sign in with Instagram
        </a>
      </div>
    </form>
