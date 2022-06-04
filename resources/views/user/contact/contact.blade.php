@extends('layouts.userbase')
@section('title', "".$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))
@section('content')
    <div class="col-md-10">
        <br>

        <div class="col-md-8">
            <h1 class="page-title"><span>Contact</span></h1>
            <form action="{{route("storemessage")}}" method="post" enctype="multipart/form-data">
                @include('user.contact.message')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label>First Name</label>
                        <input type="text" name="firstName" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label>Last Name</label>
                        <input type="text" name="lastName" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label>Phone</label>
                        <input type="tel" name="phone" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label>E-mail</label>
                        <input type="text" name="email" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="">
                    </div>

                    <div class="col-md-12">
                        <label>Massage</label>
                        <textarea class="form-control" name="message" rows="4" placeholder="Write your message here. "></textarea>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" id="contact_submit" class="btn btn-dm">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
