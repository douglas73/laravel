<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{{ asset("css/app.css") }}" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <![endif]-->
</head>
<body>
<h1>Laravel 5.1!</h1>




<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel Training</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">fg
                <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </div>

    <hr>

    <footer>
        <p>© 2015 Company, Inc.</p>
    </footer>
</div> <!-- /container -->

<script src="{{ asset("js/jquery.min.js") }}"></script>
<script src="{{ asset("js/bootstrap.min.js") }}"></script>
</body>
</html>