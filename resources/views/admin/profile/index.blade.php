@extends('layouts.appadmin')
@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>General Elements</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="x_panel">
                <div class="x_content">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        @include('includes.messages')
                                        @include('sweetalert::alert')
                                        <h2>Form Design </h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br>
                                            <form action="{{ route('admin.profile.update',[$user->id]) }}"  data-parsley-validate class="form-horizontal form-label-left"  method="post">
                                                @csrf
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Username <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input  value="{{$user->name}}" type="text" required="required"  name="name" class="form-control" autofocus>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align">Current Password <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input  type="password"  name="old_password" required="required"  autofocus class="form-control">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="col-form-label col-md-3 col-sm-3 label-align"> New Password <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input  type="password"  name="new_password" required="required"  autofocus class="form-control">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label  class="col-form-label col-md-3 col-sm-3 label-align"> Confirm Password</label>
                                                <div class="col-md-6 col-sm-6">
                                                    <input  class="form-control"  required="required" type="password" name="confirm_password" autofocus>
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                            <div class="item form-group">
                                                <div class="col-md-6 col-sm-6 offset-md-3">
                                                    <button type="submit" class="btn btn-success">Update User</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
</div>

@endsection
