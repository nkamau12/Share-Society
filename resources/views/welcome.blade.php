<!DOCTYPE html>
<html>
    <head>
        <title>Share Society</title>
        <link rel="stylesheet" href="css/login.min.css">



    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="container" id="formContainer">

                <form class="form-signin" id="login" role="form" method="POST" action="{{ url('/auth/login') }}">
                    <h3 class="form-signin-heading">Please sign in</h3>
                    <a href="#" id="flipToRecover" class="flipLink">
                        <div id="triangle-topright"></div>
                    </a>


                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"  placeholder="Email address" required autofocus>
                    <input type="password" class="form-control" name="password"  placeholder="Password" required>
                    <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <div style="text-align:center">OR</div>
                    <a href="stats" class="btn btn-lg btn-primary btn-block">View Stats</a>
                </form>

                <form class="form-signin" id="recover" role="form" method="POST" action="{{ url('/password/email') }}">
                    <h3 class="form-signin-heading">Enter email address</h3>
                    <a href="#" id="flipToLogin" class="flipLink">
                        <div id="triangle-topleft"></div>
                    </a>
                    <input type="email" class="form-control" name="email" id="loginEmail" placeholder="Email address" required autofocus>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Recover password</button>

                </form>

            </div> <!-- /container -->


        </div>
    </div>
    <script src="/js/login.min.js"></script>
    </body>
</html>
