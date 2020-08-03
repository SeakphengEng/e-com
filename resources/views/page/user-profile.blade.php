@extends('layouts.master')

@section('title')  Profile @endsection

@section('styles')

    <link rel="stylesheet" href="{{asset('css/user_profile.css')}}" />

@endsection

@section('loader')
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
@endsection

@section('user_profile')

    <div class="user-profile-section">
        <div class="container">

            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" action="{{ route('users.updateImage', $user) }}" role="form" enctype="multipart/form-data">

                                {{ csrf_field() }}
                                {{ method_field('patch') }}

                                <div class="profile-picture">
                                    <label for="avatar{{$errors->has('avatar')?' has-error':''}}">

                                        @if($user->avatar === 'default_avatar.gif')
                                            <img class="rounded-circle" id="image-uploading" src="{{url('/image/user_profile/59563d4b9c.png')}}"/>
                                        @else
                                            <img class="rounded-circle" id="image-uploading" src="{{url('image/user_profile/', $user->avatar)}}" />
                                        @endif

                                        <span class="text-danger">
                                            <input id="avatar" name="avatar" type="file" accept="image/gif, image/jpeg, image/png">
                                            {{$errors->first('avatar')}}
                                        </span>
                                    </label>

                                    <h5> {{ $user->name }} </h5>

                                    <p class="description">  " {{ $user->bio }} "   </p>

                                    <hr>

                                        <button type="submit" class="btn btn-light">Update Profile Image</button>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="card">

                        <div class="card-header">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-account-tab" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="true">My account</a>
                                    <a class="nav-item nav-link" id="nav-setting-tab" data-toggle="tab" href="#nav-setting" role="tab" aria-controls="nav-setting" aria-selected="false">Setting</a>
                                </div>
                            </nav>
                        </div>

                        <div class="card-body">
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">

                                        <form method="post" action="{{ route('users.update', $user) }}" role="form" enctype="multipart/form-data">

                                            {{ csrf_field() }}
                                            {{ method_field('patch') }}

                                            <div class="row">
                                                <!--username-->
                                                <div class="col-md-4{{$errors->has('name')?' has-error':''}}">
                                                    <div class="form-group">
                                                        <label for="name">UserName</label>
                                                        <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter UserName">
                                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                                    </div>
                                                </div>

                                                <!--EMAIL ADDRESS-->
                                                <div class="col-md-8{{$errors->has('email')?' has-error':''}}">
                                                    <div class="form-group">
                                                        <label for="email">Email address</label>
                                                        <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                                        <span class="text-danger">{{$errors->first('email')}}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <!--PhoneNumber-->
                                                <div class="col-md-6{{$errors->has('phone_number')?' has-error':''}}">
                                                    <div class="form-group">
                                                        <label for="phone_number">PhoneNumber</label>
                                                        <input type="text" class="form-control" value="{{ $user->phone_number }}" id="phone_number" name="phone_number" aria-describedby="phoneNumberHelp" placeholder="Enter PhoneNumber">
                                                        <span class="text-danger">{{$errors->first('phone_number')}}</span>
                                                    </div>
                                                </div>
                                                <!--Profession-->
                                                <div class="col-md-6{{$errors->has('career')?' has-error':''}}">
                                                    <div class="form-group">
                                                        <label for="career">Career</label>
                                                        <input type="text" class="form-control" value="{{ $user->career }}" id="career" name="career" aria-describedby="careerHelp" placeholder="Enter Career">
                                                        <span class="text-danger">{{$errors->first('career')}}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                {{--Country--}}
                                                <div class="col-md-6{{$errors->has('city_country')?' has-error':''}}">
                                                    <div class="form-group">
                                                        <label for="city_country">City && Country</label>
                                                        <input type="text" class="form-control" value="{{ $user->city_country }}" id="city_country" name="city_country" aria-describedby="cityCountryHelp" placeholder="Enter City,Country">
                                                        <span class="text-danger">{{$errors->first('city_country')}}</span>
                                                    </div>
                                                </div>
                                                <!-- Address -->
                                                <div class="col-md-6{{$errors->has('address')?' has-error':''}}">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control" value="{{ $user->address }}" id="address" name="address" aria-describedby="addressHelp" placeholder="Enter Exact Address">
                                                        <span class="text-danger">{{$errors->first('address')}}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12{{$errors->has('bio')?' has-error':''}}">
                                                    <div class="form-group">
                                                        <label for="bio">Bio OR Quote</label>
                                                        <textarea class="form-control" id="bio" name="bio" rows="5">

                                                           {{ $user->bio }}

                                                        </textarea>
                                                        <span class="text-danger">{{$errors->first('bio')}}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn-update">
                                                <button type="submit" class="btn btn-secondary"> Update Profile </button>
                                            </div>

                                        </form> <!--end account setting form-->

                                    </div>   <!--end tap one "Account"-->

                                    <div class="tab-pane fade" id="nav-setting" role="tabpanel" aria-labelledby="nav-setting-tab">

                                        <form method="post" action="{{ route('users.updatePasswordUser', $user) }}" role="form" enctype="multipart/form-data">

                                            {{ csrf_field() }}
                                            {{ method_field('patch') }}

                                            <div class="row">
                                                {{-- Current Password--}}
                                                <div class="col-md-12{{$errors->has('current_password')?' has-error':''}}">
                                                    <div class="form-group">
                                                        <label for="current_password">Old Password</label>
                                                        <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter Old Password">
                                                        <span class="text-danger">{{$errors->first('current_password')}}</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                {{-- New Password--}}
                                                <div class="col-md-6{{$errors->has('new_password')?' has-error':''}}">
                                                    <div class="form-group">
                                                        <label for="new_password"> New Password</label>
                                                        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter New Password">
                                                        <span class="text-danger">{{$errors->first('new_password')}}</span>
                                                    </div>
                                                </div>

                                                {{-- Confirmed New Password--}}
                                                <div class="col-md-6{{$errors->has('confirm_password')?' has-error':''}}">
                                                    <div class="form-group">
                                                        <label for="confirm_password"> Confirmed New Password </label>
                                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter New Password">
                                                        <span class="text-danger">{{$errors->first('confirm_password')}}</span>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="btn-update">
                                                <button type="submit" class="btn btn-secondary"> Update Profile </button>
                                            </div>

                                        </form>

                                    </div>  <!--end password setting class-->

                                </div>
                            </div>
                        </div>  <!--end card-body class-->

                    </div>  <!--end card class-->
                </div>
            </div>  <!--end row class-->

        </div>   <!--end container class-->
    </div>

@endsection

@section('js_block')

    <script>

        function readURL(input) {

            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image-uploading').attr('src', e.target.result);

                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#avatar").change(function() {

            readURL(this);

        });

    </script>

@endsection

