!@extends('layouts.appadmin')
<link href="{{ asset('css/loancalculator.css') }}" rel="stylesheet">
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
                        @include('includes.messages')
                        <form action="{{route('admin.loan.store')}}" method="POST" enctype="multipart/form-data"
                            id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            {{ csrf_field() }}

                                {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.min.css"> --}}
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/zui/1.9.0/lib/chosen/chosen.min.css">
                                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.5.1/chosen.jquery.min.js"></script>

                            <div class="item form-group" >
                                <label class="col-form-label col-md-3 col-sm-3 label-align">First Name
                                    <span style="color:red;font-weight:bold" class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                    <select class="form-control" name="name" id="name">
                                        <option class="form-control">--choose option--</option>
                                        @foreach ($customers as $customer)
                                        <option class="form-control" value="{{ $customer->name }}" >{{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <script type="text/javascript">
                                $("#name").chosen();
                          </script>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" >Last Name
                            <span style="color:red;font-weight:bold" class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                                <select class="form-control" name="last_name"  required="required" id="last_name">
                                    <option>--choose option--</option>
                                </select>
                        </div>
                    </div>


                            <div class="item form-group">
                                <label for="phone-number" class="col-form-label col-md-3 col-sm-3 label-align">Phone
                                    Number
                                    <span style="color:red;font-weight:bold" class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="phone-number" maxlength="11" minlength="11"
                                        pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$"
                                        class="form-control" type="number" name="phone_number">
                                </div>
                            </div>


                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bank Name
                                    <span style="color:red;font-weight:bold" class="required">*</span>
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
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Bank
                                    Account
                                    <span style="color:red;font-weight:bold" class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="account" class="form-control" type="number" name="bank_account" required>
                                </div>
                            </div>


                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">BVN
                                    <span style="color:red;font-weight:bold" class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <span>please note 11 digits for bvn</span>
                                    <input id="bvn" class="form-control" type="text" name="bvn" required>
                                </div>
                            </div>


                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth
                                    <span style="color:red;font-weight:bold" class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="birthday" class="date-picker form-control" name="dob"
                                        placeholder="dd-mm-yyyy" type="text" required="required"
                                        onfocus="this.type='date'" onmouseover="this.type='date'"
                                        onclick="this.type='date'" onblur="this.type='text'"
                                        onmouseout="timeFunctionLong(this)">
                                    <script>
                                        function timeFunctionLong(input) {
                                            setTimeout(function () {
                                                input.type = 'text';
                                            }, 60000);
                                        }

                                    </script>
                                </div>
                            </div>


                            <div class="x_content">
                                <div data-parsley-validate class="form-horizontal form-label-left">
                                    <h2>Loan Calculator</h2>
                                    <main id="loan-form" class="loan-form">
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Loan
                                                Amount</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="number" class="form-control" id="amount" name="amount"
                                                    onchange="calculate();">
                                            </div>
                                        </div>


                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Interest</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input name="interestrate" type="number" class="form-control" id="apr"
                                                    onchange="calculate();" value="1.3" readonly>
                                            </div>
                                        </div>



                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tenor</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select type="number" class="form-control" id="years"
                                                    onchange="calculate();">
                                                    <option>--Choose option--</option>
                                                    <option value=0.25>3 Month</option>
                                                    <option value=0.5>6 Month</option>
                                                    <option value=0.9>9 Month</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align">Agent</label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <select type="text" class="form-control">
                                                    <option>--Choose option--</option>
                                                    @foreach($loanAgent as $loanAgents)
                                                    <option>{{$loanAgents->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </main>
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




                            <div class="">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"></label>
                                <div class="col-md-6 col-sm-6 mt-5">
                                    <button class="form-control btn btn-danger btn-lg" type="button">Cancel</button>
                                    <button type="submit" class="form-control btn btn-success btn-lg">Submit</button>
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
        var monthly = (principal * x * interest) / (x - 1);
        if (isFinite(monthly)) {
            payment.innerHTML = monthly.toFixed(2);
            total.innerHTML = (monthly * payments).toFixed(2);
            totalinterest.innerHTML = ((monthly * payments) - principal).toFixed(2);
        } else {
            payment.innerHTML = "";
            total.innerHTML = ""
            totalinterest.innerHTML = "";
        }
    }

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
    $('#name').on('change', function() {
       var customer_id = $(this).val();
       if(customer_id) {
           $.ajax({
               url: `/admin/loan/getcustomer/${customer_id}`,
               type: "GET",
               data : {"_token":"{{ csrf_token() }}"},
               dataType: "json",
               success:function(data)
               {
                 if(data){
                    $('#last_name').empty();
                    $.each(data, function(key, value){
                        $('select[name="last_name"]').append('<option value="'+ value.last_name +'">' + value.last_name+ '</option>');
                    });
                }else{
                    $('#last_name').empty();
                }
             }
           });
       }else{
         $('#last_name').empty();
       }
    });
    });
</script>
@endsection
