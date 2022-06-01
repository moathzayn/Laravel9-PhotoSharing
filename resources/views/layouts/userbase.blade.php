@extends('layouts.fontbase')
<!DOCTYPE html>
<html lang="en">
<head>
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
<link href="{{asset('assets')}}/user/css/bootstrap.min.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Raleway:400,500,700|Roboto:300,400,500,700,900|Ubuntu:300,300i,400,400i,500,500i,700" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets')}}/user/css/style.css">
<link rel="stylesheet" href="{{asset('assets')}}/user/css/responsive.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<title>{{$setting->title}}:@yield('title')</title>
</head>
<body>
@include('user.header')
@include('user.bar')
@include('user.sidebar')
@include('user.footer')
@yield('content')
</body>
