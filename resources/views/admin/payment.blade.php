@extends('layouts.appadmin')
@section('content')
<div class="right_col" role="main">
 <br />
    <div class="container-fluid">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Elements</h4>
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
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Full Name</label>
                      <div class="col-md-6 col-sm-6">
                        <select class="livesearch form-control" name="fullname"></select>
                                    </div>
                                </div>



                                <div class="item form-group" id="saving_type">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Loan</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select  id="loan-dd" class="form-control">
                                            <option value="">Select Loan</option>
                                            @foreach ($loans as $data)
                                            <option value="{{$data->id}}">
                                                {{$data->loan_id}}
                                            </option>
                                            @endforeach
                                        </select>
                                </div>
                                    </div>




                        <div class="item form-group" id="saving_type">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Bank Name </label>
                            <div class="col-md-6 col-sm-6">
                                <select id="bankname-dd" class="form-control">
                                </select>
                        </div>
                            </div>


                            <div class="item form-group" id="saving_type">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Bank Account </label>
                                <div class="col-md-6 col-sm-6">
                                    <select id="bankaccount-dd" class="form-control">
                                    </select>
                            </div>
                                </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Amount To Pay</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input id="amount" class="form-control" type="text" name="amount">
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Payment Date</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="date" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onmouseout="timeFunctionLong(this)">
                                <script>
                                    function timeFunctionLong(input) {
                                        setTimeout(function() {
                                            input.type = 'date';
                                        }, 60000);
                                    }
                                </script>
                                </div>
                        </div>
                        

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Payment By</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control" type="text" name="agent" value="{{ Auth::user()->username }}">
                            </div>
                        </div>
>
                                    
                    
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script>
                            $(document).ready(function () {
                                $('#loan-dd').on('change', function () {
                                    var id = this.value;
                                    $("#bankname-dd").html('');
                                    $.ajax({
                                        url: "{{url('api/fetchBankName')}}",
                                        type: "POST",
                                        data: {
                                            id: id,
                                            _token: '{{csrf_token()}}'
                                        },
                                        dataType: 'json',
                                        success: function (result) {
                                            $('#bankname-dd').html('<option value="">Select Bank Name</option>');
                                            $.each(result.banks, function (key, value) {
                                                $("#bankname-dd").append('<option value="' + value
                                                    .id + '">' + value.bankname + '</option>');
                                            });
                                            $('#bankaccount-dd').html('<option value="">Select Account</option>');
                                        }
                                    });
                                });
                                $('#bankname-dd').on('change', function () {
                                    var id = this.value;
                                    $("#bankaccount-dd").html('');
                                    $.ajax({
                                        url: "{{url('api/fetchBankAccount')}}",
                                        type: "POST",
                                        data: {
                                            id: id,
                                            _token: '{{csrf_token()}}'
                                        },
                                        dataType: 'json',
                                        success: function (res) {
                                            $('#bankaccount-dd').html('<option value="">Select Bank Account</option>');
                                            $.each(res.loanaccount, function (key, value) {
                                                $("#bankaccount-dd").append('<option value="' + value
                                                    .id + '">' + value.bank_account + '</option>');
                                            });
                                        }
                                    });
                                });
                            });
                    
                        </script>





















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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script type="text/javascript">
    $('.livesearch').select2({
        placeholder: '--Select--',
        ajax: {
            url: '/loan-firstname',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.firstname + "  " + item.last_name,
                            id: item.id
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>
  @endsection








