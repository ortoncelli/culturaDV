<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Painel - Laravel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
</head>
<body>
@include("includes.top")
@yield('content')
@include("includes.rodape")

<!-- jQuery 2.1.4 -->
<script src="{{asset("plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script>
<script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
<!-- page script -->
<script>
    $(function () {
        // Scripts aqui
    })
</script>

</body>
</html>
