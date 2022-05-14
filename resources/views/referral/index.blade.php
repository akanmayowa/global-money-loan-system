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




    
        <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Button Example </h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                  @if ($referrals->count())
              <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Email</th>
                      <th>Date</th>
                      <th>Completed</th>
                    </tr>
                  </thead>
                  <tbody>
                    <label hidden>{{ $count = 1; }}</label>
                      @foreach ($referrals as  $referral)
                      <tr>
                        <td>{{  $count++;}}</td>
                        <td>{{  $referral->email}}</td>
                         <td>{{ $referral->created_at->toDayDateTimeString() }}</td>
                         <td>
                            @if ($referral->completed)
                                <button type="button" class="btn btn-success">Yes</button>
                            @else
                      <a class="btn btn-warning" target="blank"   href="{{ route('register', ['referral' =>  $referral->token]) }}"
                          <strong>No</strong>&nbsp Click to Get Link
                         </a>                                         
                            @endif 
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                @else
                    <span>No Referrals Right now</span>
                @endif
              </div>
            </div>
          </div>
        </div>
            </div>
          </div>
    </div>






        
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                       @include('includes.errors')
                        <form action="{{ route('referrals.store') }}"  method="POST" data-parsley-validate class="form-horizontal form-label-left">
                            {{ csrf_field() }}
                            <div class="item form-group">
 <label class="col-form-label col-md-3 col-sm-3 label-align">Email Address <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 ">
                <input type="email" required  class="form-control" name="email">
            </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
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
<!-- /page

                @endsection