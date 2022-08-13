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


                            <div class="item form-group" id="">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Investment Type</label>
                                <div class="col-md-6 col-sm-6">
                                <select name="" id="" class="form-control">
                                <option value="">--Pls Select--</option>
                                <option value="fixed deposit">Fixed Deposit</option>
                                <option value="global spread">Global Spread</option>
                                <option value="invest shares">Invest Shares</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="transportation">Transportation</option>
                                </select>
                            </div>
                        </div>



                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Amount</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="amount" class="form-control" type="text" name="amount">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tenor</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="" id="" class="form-control">
                                        <option value="">--Pls Select--</option>
                                        <option value="90">90</option>
                                        <option value="180">180</option>
                                        <option value="360">360</option>
                                        </select>
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
@endsection

