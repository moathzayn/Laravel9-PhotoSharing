<!DOCTYPE html>
<html lang="en">
<head>
<!-- Bootstrap Core CSS -->
<link href="{{asset('assets')}}/user/css/bootstrap.min.css" rel="stylesheet">
<!-- Owl Carousel Assets -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
<!-- Main CSS -->
<link rel="stylesheet" href="{{asset('assets')}}/user/css/style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('assets')}}/user/css/responsive.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
@include('user.header')
@include('user.bar')
@include('user.sidebar')
@include('user.footer')
</body>