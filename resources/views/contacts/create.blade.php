@extends('layouts.appuser')
@section('content')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Elements</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

         @include('includes.errors')

    
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Design</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-label-left input_mask" action="{{ route('contacts.store') }}"   method="post">
                            {{ csrf_field() }}


                            <div class="col-md-6 col-sm-6  form-group has-feedback mb-4">
                                <input name="name" type="text" class="form-control has-feedback-left"  placeholder="Full Name">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6  form-group has-feedback mb-4">
                                <input name="sentby"  type="text" class="form-control" id="inputSuccess3" placeholder="Sent by">
                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6  form-group has-feedback mb-4">
                                <input name="email"   type="email" class="form-control has-feedback-left"  placeholder="Email">
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-6 col-sm-6  form-group has-feedback mb-4">
                                <input name="subject"  type="text" class="form-control"  placeholder="subject">
                            </div>
                          
                            <div class="form-group mb-4">
                                <label><span class="">Message</span></label>
                                <textarea  name="message"  class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                              </div>
					</div>
                           
                       
                            <div class="ln_solid"></div>
                            <div class="form-group row">
                                <div class="col-md-9 col-sm-9  offset-md-3">
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                
               
            </div>
        </div>
    </div>
</div>

  @endsection