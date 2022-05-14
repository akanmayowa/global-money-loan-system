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
        <div class="">
            <div class="x_panel">
                <div class="x_content">



                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Invoice Design</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <section class="content invoice">


                                        <div class="table-responsive mb-5">
                                            <table class="table table-striped jambo_table bulk_action">
                                              <thead>
                                                <tr class="headings">
                                                  <th class="column-title">Invoice </th>
                                                  <th class="column-title">Invoice Date </th>
                                                  <th class="column-title">Order </th>
                                                  <th class="column-title">Bill to Name </th>
                                                  <th class="column-title">Status </th>
                                                  </th>
                                                </tr>
                                              </thead>

                                              <tbody>
                                                <tr class="even pointer">
                                                  <td class=" ">121000040</td>
                                                  <td class=" ">May 23, 2014 11:47:56 PM </td>
                                                  <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                                  <td class=" ">John Blank L</td>
                                                  <td class=" ">Paid</td>
                                                  </td>
                                                </tr>


                                                <tr class="even pointer">
                                                  <td class=" ">121000038</td>
                                                  <td class=" ">May 26, 2014 10:55:33 PM</td>
                                                  <td class=" ">121000203</td>
                                                  <td class=" ">Mike Smith</td>
                                                  <td class=" ">Paid</td>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>




                                        <!-- Table row -->
                                        <div class="row mt-5">
                                            <div class="table-responsive">
                                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                    <thead>
                                                      <tr>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Office</th>
                                                        <th>Age</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                      </tr>
                                                    </thead>


                                                    <tbody>
                                                      <tr>
                                                        <td>Sonya Frost</td>
                                                        <td>Software Engineer</td>
                                                        <td>Edinburgh</td>
                                                        <td>23</td>
                                                        <td>2008/12/13</td>
                                                        <td>$103,600</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Jena Gaines</td>
                                                        <td>Office Manager</td>
                                                        <td>London</td>
                                                        <td>30</td>
                                                        <td>2008/12/19</td>
                                                        <td>$90,560</td>
                                                      </tr>

                                                      <tr>
                                                        <td>Michael Silva</td>
                                                        <td>Marketing Designer</td>
                                                        <td>London</td>
                                                        <td>66</td>
                                                        <td>2012/11/27</td>
                                                        <td>$198,500</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Paul Byrd</td>
                                                        <td>Chief Financial Officer (CFO)</td>
                                                        <td>New York</td>
                                                        <td>64</td>
                                                        <td>2010/06/09</td>
                                                        <td>$725,000</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Gloria Little</td>
                                                        <td>Systems Administrator</td>
                                                        <td>New York</td>
                                                        <td>59</td>
                                                        <td>2009/04/10</td>
                                                        <td>$237,500</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-8">
                                            </div>

                                            <div class="col-md-4 mt-5">
                                                <p class="lead">Amount Due 2/22/2014</p>
                                                <div class="table-responsive">
                                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                        <tbody>
                                                            <tr>
                                                                <th style="width:50%">Subtotal:</th>
                                                                <td>$250.30</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tax (9.3%)</th>
                                                                <td>$10.34</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping:</th>
                                                                <td>$5.80</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total:</th>
                                                                <td>$265.24</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>







                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection
