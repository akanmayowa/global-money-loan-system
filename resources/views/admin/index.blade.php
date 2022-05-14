@extends('layouts.appadmin')
@section('content')
<link href="{{ asset('dashboardcard.css') }}" rel="stylesheet">

<div class="right_col" role="main">


    <div class="page-title">
        <div class="title_left">
        <div class="p-2">
            <h4>Dashboard</h4>
        </div>
      </div>

        <div class="title_right">
            <div class="col-md-6 col-sm-6 form-group pull-right top_search">
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


    <br />
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card-counter primary">
                        <i class="fa fa-code-fork"></i>
                        <span class="count-numbers">12</span>
                        <span class="count-name">Flowz</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter danger">
                        <i class="fa fa-ticket"></i>
                        <span class="count-numbers">599</span>
                        <span class="count-name">Instances</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter success">
                        <i class="fa fa-database"></i>
                        <span class="count-numbers">6875</span>
                        <span class="count-name">Data</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card-counter info">
                        <i class="fa fa-users"></i>
                        <span class="count-numbers">35</span>
                        <span class="count-name">Users</span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row mt-5">
        <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Line graph<small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Bar graph <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                </div>
            </div>
        </div>
    </div>





    <div class="row mt-5">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="alert alert-success">
                    <tr class="headings">
                        <th>
                            <input type="checkbox" id="check-all" class="flat">
                        </th>
                        <th class="column-title">Invoice </th>
                        <th class="column-title">Invoice Date </th>
                        <th class="column-title">Order </th>
                        <th class="column-title">Bill to Name </th>
                        <th class="column-title">Status </th>
                        <th class="column-title">Amount </th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">121000037</td>
                        <td class=" ">May 26, 2014 10:52:44 PM</td>
                        <td class=" ">121000204</td>
                        <td class=" ">Mike Smith</td>
                        <td class=" ">Paid</td>
                        <td class="a-right a-right ">$333.21</td>
                        <td class=" last"><a href="#">View</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>






</div>
@endsection
