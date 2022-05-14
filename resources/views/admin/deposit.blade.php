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

      <div class="clearfix"></div>
      <div class="row">
          <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                  <div class="x_title">
                      <h2>Form Design </h2>
                      <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <br />
                      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                          <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">User ID<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                  <input type="number" value="{{ $savings->user_id }}" required="required" class="form-control">
                              </div>
                          </div>


                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">transaction_id<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="number" value="{{ $savings->user_id }}" required="required" class="form-control">
                            </div>
                        </div>

                          
                          <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Saving Package <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                  <select type="text" name="saving_package" value="{{ $savings->saving_package }}" required="required" class="form-control">
                                  </select>
                                </div>
                          </div>
                          <div class="item form-group">
                              <label  class="col-form-label col-md-3 col-sm-3 label-align">Saving type</label>
                              <div class="col-md-6 col-sm-6 ">
                                  <select  class="form-control" type="text" value="{{ $savings->saving_type }}"  name="saving_type" required="required">
                                  </select>
                                </div>
                          </div>
                   
                   
                          <div class="item form-group">
                            <label  class="col-form-label col-md-3 col-sm-3 label-align">Amount</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control"  value="{{ $savings->amount }}" type="text" name="amount" required="required">
                              </div>
                        </div>
                 
                   
                        <div class="item form-group">
                            <label  class="col-form-label col-md-3 col-sm-3 label-align">Amount</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control" type="text" name="amount" required="required">
                              </div>
                        </div>
                 
                   
                        <div class="item form-group">
                            <label  class="col-form-label col-md-3 col-sm-3 label-align">Bank Account</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control" type="number" name="bankaccount" required="required">
                              </div>
                        </div>
                 
                        <div class="item form-group">
                            <label  class="col-form-label col-md-3 col-sm-3 label-align">interest</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control" type="number" name="interestrate" required="required">
                              </div>
                        </div>




                        <div class="item form-group">
                          <label  class="col-form-label col-md-3 col-sm-3 label-align">Transaction Type</label>
                          <div class="col-md-6 col-sm-6 ">
                              <select  class="form-control" type="number" name="approvedby" required="required">
                              </select>
                              </div>
                      </div>

                        <div class="item form-group">
                          <label  class="col-form-label col-md-3 col-sm-3 label-align">Agent</label>
                          <div class="col-md-6 col-sm-6 ">
                              <input  class="form-control" type="number" name="approvedby" required="required">
                            </div>
                      </div>

                        

                        <div class="item form-group">
                              <label class="col-form-label col-md-3 col-sm-3 label-align">Duration <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                  <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                  <script>
                                      function timeFunctionLong(input) {
                                          setTimeout(function() {
                                              input.type = 'text';
                                          }, 60000);
                                      }
                                  </script>
                              </div>
                          </div>
                          <div class="ln_solid"></div>
                          <div class="item form-group">
                              <div class="col-md-6 col-sm-6 offset-md-3">
                                  <button class="btn btn-primary" type="reset">Back</button>
                                  <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                          </div>

                      </form>
                  </div>
              </div>
          </div>
      </div>


    </div>
    <div class="clearfix"></div>
  </div>
  @endsection

