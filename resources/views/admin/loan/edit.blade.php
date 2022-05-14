@extends('layouts.appuser')
@section('content')
<link href="{{ asset('css/loancalculator.css') }}" rel="stylesheet">
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
            <h2>Loan</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form action="" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">First Name
              <span style="color:red;font-weight:bold"  class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" name="firstname" required="required" class="form-control ">
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name
                  <span style="color:red;font-weight:bold"  class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="last-name" name="last_name" required="required" class="form-control">
                </div>
              </div>



              <div class="item form-group">
                <label for="phone-number" class="col-form-label col-md-3 col-sm-3 label-align">PHone Number
                  <span style="color:red;font-weight:bold"  class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="phone-number" maxlength="11" minlength="11" pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$" class="form-control" type="number" name="phone_number">
                </div>
              </div>


              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bank Name
                  <span style="color:red;font-weight:bold"  class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select class="form-control" type="text" name="bank_id">
                    <option>--Choose option--</option>
                    @foreach ($bank as $banks)
                    <option value="{{ $banks->id }}"> {{ $banks->bankname }} </option>
                    @endforeach
                  </select>
                    </div>
              </div>

              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bank Account
                  <span style="color:red;font-weight:bold"  class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="account" class="form-control" type="number" name="account">
                </div>
              </div>



              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tenor
                  <span style="color:red;font-weight:bold"  class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <select class="form-control" type="text" name="tenor">
                    <option>--Choose option--</option>
                    <option value="30">30</option>
                    <option value="90">90</option>
                    <option value="180">180</option>
                  </select>
                    </div>
              </div>

              <div class="item form-group">
                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">BVN
                  <span style="color:red;font-weight:bold"  class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input id="bvn" class="form-control" type="text" name="bvn">
                </div>
              </div>



              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth
                  <span style="color:red;font-weight:bold"  class="required">*</span>
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



              <div class="x_content">
                <div data-parsley-validate class="form-horizontal form-label-left">
                  <h2>Loan Calculator</h2>
                    <form id="loan-form" class="loan-form">





                      <div class="item form-group">
                      <label  class="col-form-label col-md-3 col-sm-3 label-align">Loan Amount</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="number" class="form-control" id="amount" onchange="calculate();" >
                      </div>
                    </div>


                      <div class="item form-group">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align">Interest</label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="number" class="form-control" id="apr" onchange="calculate();" value="1.3" readonly>
                      </div>
                    </div>



                      <div class="item form-group">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align">Tenor</label>
                        <div class="col-md-6 col-sm-6 ">
                        <select type="number" class="form-control" id="years" onchange="calculate();">
                          <option>--Choose option--</option>
                          <option value=0.25>3 Month</option>
                          <option value=0.5>6 Month</option>
                          <option value=0.9>9 Month</option>
                        </select>
                      </div>
                    </div>


                    <div class="item form-group">
                      <label  class="col-form-label col-md-3 col-sm-3 label-align"></label>
                      <div class="col-md-6 col-sm-6 ">
                        <button onclick="calculate();" class="calculate">Calculate</button>
                      </div>
                    </div>



                      </form>
                </div>


                <h2>Calculated Results</h2>
                <div class="container">
                  <div class="d-flex justify-content-center">
                <div class="results">
                    <div class="card-1">
                        <p id="payment">Naira</p>
                        <p class="indicators">Monthly Payments</p>
                    </div>

                    <div class="card-2">
                        <p id="totalinterest">%</p>
                        <p class="indicators">Total Interest</p>

                    </div>

                    <div class="card-3">
                        <p id="total">Naira</p>
                        <p class="indicators">Total Payment</p>
                    </div>
                </div>
            </div>
            </div>
          </div>
              <div class="ln_solid"></div>
              <div class="container">
                <div class="d-flex justify-content-center">
                  <button class="btn btn-danger btn-lg" type="button">Cancel</button>
                  <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      </div>

  </div>
  <script>
    "use strict";
    function calculate() {
    var amount = document.getElementById("amount");
    var apr = document.getElementById("apr");
    var years = document.getElementById("years");
    var payment = document.getElementById("payment");
    var total = document.getElementById("total");
    var totalinterest = document.getElementById("totalinterest");
    var principal = parseFloat(amount.value);
    var interest = parseFloat(apr.value) / 100 / 12;
    var payments = parseFloat(years.value) * 12;
    var x = Math.pow(1 + interest, payments);
    var monthly = (principal*x*interest)/(x-1);
    if (isFinite(monthly))
    {
    payment.innerHTML = monthly.toFixed(2);
    total.innerHTML = (monthly * payments).toFixed(2);
    totalinterest.innerHTML = ((monthly*payments)-principal).toFixed(2);
    }
    else {
    payment.innerHTML = "";
    total.innerHTML = ""
    totalinterest.innerHTML = "";
    }
    }

    </script>
  @endsection
