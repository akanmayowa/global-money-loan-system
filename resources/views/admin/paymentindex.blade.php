@extends('layouts.appadmin')
@section('content')
<div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2><strong><small>Payments</small></strong> </h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="text-lg-right mb-4">
                          <button type="button" class="btn btn-success">Add Payment</button>
                      </div>
                    <div class="card-box table-responsive">
            <table id="datatable"  class="table table-striped table-bordered table-hover" style="width:100%">
              <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Loan ID</th>
                  <th>Balance</th>
                  <th>Amount  Paid</th>
                  <th>Date of Payment</th>
                  <th>Agent</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
</div>
@endsection
