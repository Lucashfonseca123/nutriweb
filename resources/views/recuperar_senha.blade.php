<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        body{
            background-image: url('/img/Morangodesfoque.jpg');
        }
    </style>
</head>
<body>
<!-- if you want to create login page and register page together in one page ...you have to only chnage his name...that's it...                 -->
<div class="container" style="margin-top: 2%;">
    <img class="logo6" src="img/logo.png">
    <div class="row">
        <div class="col-sm-4"> </div>
        <div class="col-md-4">
            <h2 class="text-center"> Recuperar senha</h2>
            <br/>
            <div class="col-sm-12">
                <ul class="nav nav-pills" >
               {{--     <li class="" style="width:50%"><a class="btn btn-lg btn-default" data-toggle="tab" href="#home">Doctor</a></li>
                    <li class=" " style="width:48%"><a class=" btn btn-lg btn-default" data-toggle="tab" href="#menu1">patient</a></li>
               --}} </ul>
                <br/>
                <div class="tab-content">
                    <div id="home" class="">
                        <form action="#">
                            <div class="form-group">
                                <label for="email" style="font-size: 15px">Email:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="pwd" style="font-size: 15px">Senha antiga:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label for="pwd" style="font-size: 15px">Senha nova:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                            <div class="form-group">
                                <label for="pwd" style="font-size: 15px">Confirmar nova senha:</label>
                                <input type="password" class="form-control" id="pwd">
                            </div>
                        </form>
                        <br/>
                        <a href="/" class="pull-right btn btn-block btn-success"> Alterar cadastro </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- This design is created by manoj chauhan  -->
</body>
</html>
