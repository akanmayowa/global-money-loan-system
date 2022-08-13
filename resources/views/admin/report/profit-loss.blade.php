@extends('layouts.appadmin')
<style>
    table { width: 100%; text-align: left; border-spacing: 0; border-collapse: collapse; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
    th, td { font-family: inherit; font-size: .500em; line-height: 1.05; color: #444; vertical-align: middle; padding: 1em; }
    th { font-weight: 300; }
    colgroup:nth-child(1) { width: 7.6%;  border: 0 none; }
    colgroup:nth-child(2) { width: 7.6%;  border: 1px solid #ccc; }
    colgroup:nth-child(3) { width: 7.6%;  border: 1px solid #ccc; }
    colgroup:nth-child(4) { width: 7.6%;  border: 1px solid #ccc; }
    colgroup:nth-child(5) { width: 7.6%;  border: 1px solid #ccc; }
    colgroup:nth-child(6) { width: 7.6%;  border: 1px solid #ccc; }
    colgroup:nth-child(7) { width: 7.6%;  border: 1px solid #ccc; }
    colgroup:nth-child(8) { width: 7.6%;  border: 1px solid #ccc; }
    colgroup:nth-child(9) { width: 7.6%;  border: 1px solid #ccc; }
    colgroup:nth-child(10) { width: 7.6%;  border: 1px solid #ccc; }
    colgroup:nth-child(11) { width: 7.6%;  border: 1px solid #ccc; }
    colgroup:nth-child(12) { width: 7.6%; border: 1px solid #ccc; }
    colgroup:nth-child(13) { width: 7.6%;  border: 1px solid #ccc; }
    thead th:nth-child(1) { background: transparent;  }
    thead th:nth-child(3) {  padding: 2em 0 5em; }
    thead th h2 { font-weight: 200; font-size: 2.0em; line-height: 1.5; color: #59c7fb; }
    tbody th { background: #fff; border-left: 1px solid #ccc; }
    tbody td { background: #fff; text-align: center; }
    tbody tr:nth-child(even) th,
    tbody tr:nth-child(even) td { background: #f5f5f5; border: 1px solid #ccc; border-width: 1px 0 1px 1px; }
    tbody tr:last-child td { border-bottom: 0 none; }
    tfoot td  { text-align: center; padding: 2em 1em; border-top: 1px solid #ccc; }
    tbody th { background: #fff; border-left: 1px solid #ccc; }
    tbody td { background: #fff; text-align: center; }
    thead th { background: #def4fe; background: -moz-linear-gradient(top,  #ffffff 0%, #f5f5f5 100%); background: -webkit-linear-gradient(top,  #ffffff 0%,#f5f5f5 100%); background: -o-linear-gradient(top,  #ffffff 0%,#f5f5f5 100%); background: -ms-linear-gradient(top,  #ffffff 0%,#f5f5f5 100%); background: linear-gradient(to bottom,  #ffffff 0%,#f5f5f5 100%); text-align: center; position: relative; border-bottom: 1px solid #ccc; padding: 3em 0 2em; font-weight: 400; color: #999; }
</style>
@section('content')
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Report</h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn"><button class="btn btn-secondary" type="button">Go!</button></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="x_panel">
                @include('admin.report.topmenu')
                <div class="x_content">
                    <div class="card-box table-responsive">
                        <div class="card mt-5">
                            <h6 class="card-header bg-secondary text-white-50"><strong>Profit/Loss</strong></h6>
                            <div class="card-body">
                                <div class="card-box table-responsive">
                                    <div class="table-fixed-column-outter">
                                        <div class="table-fixed-column-inner">
                                            <body>
                                               <table>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                    <colgroup></colgroup>
                                                <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th><label>January</label></th>
                                                    <th><label>February</label></th>
                                                    <th><label>March</label></th>
                                                    <th><label>April</label></th>
                                                    <th><label>May</label></th>
                                                    <th><label>June</label></th>
                                                    <th><label>July</label></th>
                                                    <th><label>August</label></th>
                                                    <th><label>September</label></th>
                                                    <th><label>October</label></th>
                                                    <th><label>November</label></th>
                                                    <th><label>December</label></th>
                                                </tr>
                                                </thead>
                                                <tfoot>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <td><span href="#"> trial</span></td>
                                                    <td><span href="#">e trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                </tr>
                                                </tfoot>            
                                                <tbody>
                                                <tr>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                <tr>
                                                    <td><span href="#"> free trial</span></td>     ayment, otal Loan Given Out
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                    <td><span href="#">Start a free trial</span></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            </body>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
