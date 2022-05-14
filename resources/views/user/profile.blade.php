@extends('layouts.appuser')
@section('content')
<div class="right_col" role="main">
    <div class="row" style="display: inline-block;"></div>
    <br />

    <!-- page content -->
    <div class="">


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>User Profile</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    @include('includes.errors')

                    <div class="x_content">
                        <div class="col-md-3 col-sm-3  profile_left">
                            <div class="profile_img">

                                <form action="{{ route('user.profile.update') }}" method="POST"
                                    enctype="multipart/form-data" id="demo-form2" data-parsley-validate
                                    class="form-horizontal form-label-left">
                                    {{ csrf_field() }}
                                    <br /><br /><br />
                                    <div class="container">
                                        <div class="">
                                            <label for="Image" class="form-label">Passport</label>
                                            <input class="form-control" name="passport" type="file" id="formFile"
                                                onchange="preview()">
                                        </div>
                                    </div>
                                    <div id="crop-avatar">
                                        <img id="frame" src="{{ asset($user->profile->passport) }}" class="img-fluid" />
                                    </div>
                                    <button onclick="clearImage()" class="btn btn-primary">Clear</button>

                                    <script>
                                        function preview() {
                                            frame.src = URL.createObjectURL(event.target.files[0]);
                                        }

                                        function clearImage() {
                                            document.getElementById('formFile').value = null;
                                            frame.src = "";
                                        }

                                    </script>

                            </div>
                            <br />
                        </div>
                        <div class="col-md-9 col-sm-9 ">

                            <div class="profile_title">
                                <div class="col-md-6">
                                    <h2>User Details</h2>
                                </div>
                                <div class="col-md-6">
                                    <div id="reportrange" class="pull-right"
                                        style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                    </div>
                                </div>
                            </div>
                            <div class="x_content">
                                <br />

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Full
                                        Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="name" value="{{ $user->name }}" required="required"
                                            readonly class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="last-name">Email<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="email" readonly value="{{ $user->email }}" name="email"
                                            required="required" class="form-control">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label for="middle-name"
                                        class="col-form-label col-md-3 col-sm-3 label-align">Username</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input value="{{ $user->username }}" class="form-control" readonly type="text"
                                            name="username">
                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select name="gender" required="required" class="form-control">
                                            <option>--Choose option--</option>
                                            <option value="male"
                                                <?= $user->profile->gender === 'male' ? 'selected' : '' ?>>Male</option>
                                            <option value="female"
                                                <?= $user->profile->gender === 'female' ? 'selected' : '' ?>>Female
                                            </option>
                                        </select>
                                    </div>
                                </div>





                                <div class="item form-group">
                                    <label for="middle-name"
                                        class="col-form-label col-md-3 col-sm-3 label-align">BVN</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input value="{{ $user->profile->bvn }}" class="form-control"
                                            required="required" type="number" name="bvn">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label for="middle-name"
                                        class="col-form-label col-md-3 col-sm-3 label-align">NIN</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input value="{{ $user->profile->nin }}" class="form-control" type="number"
                                            name="nin">
                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID
                                        card (Front)</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input class="form-control" type="file" name="id_card">
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                        <button class="btn btn-warning" type="reset">Reset</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
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
@endsection
