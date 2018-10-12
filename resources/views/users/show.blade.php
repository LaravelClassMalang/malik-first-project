@extends('layouts.app')

@section('page-title')
<h1>
    <i class="fa fa-user"></i> User
</h1>
@endsection

@section('breadcrumb')
<li><a href="#">Dashboard</a></li>
<li class="active">User</li>
@endsection

@section('content')
<div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="{{$user->photo ?? 'https://profile.actionsprout.com/default.jpeg'}}" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle text-center">
                        <div class="profile-usertitle-name">
                            <h3>{{$user['user']->name}}</h3>
                        </div>
                        <div class="profile-usertitle-job">
                            {{$user['user']->email}}
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                </div>
            </div>
            
@endsection