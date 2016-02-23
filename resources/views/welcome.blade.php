<!DOCTYPE html>
<html>
    <head>
        <title>CDTS APP</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Bootstrap -->
        <link href="{{ asset("css/app.css") }}" rel="stylesheet" type="text/css" />

    </head>
    <body>

            <h1>Info: {{ session('mensagem') }}</h1>

        <div class="container">
            <div class="content">
                <div class="text-center"><span style="font-size: 30px; font-weight: bolder; font-family: Calibri, Helvetica, Arial;">CDTS</span></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <span class="label label-success label-pill pull-xs-right badge">14</span>
                                    <a href="{{ url('lista') }}">Carregar Lista</a>
                                </li>
                                <li class="list-group-item">
                                    <span class="label label-default label-pill pull-xs-right">2</span>
                                    Dapibus ac facilisis in
                                </li>
                                <li class="list-group-item">
                                    <span class="label label-default label-pill pull-xs-right">1</span>
                                    Morbi leo risus
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>


            </div>


        </div>

    </body>
</html>
