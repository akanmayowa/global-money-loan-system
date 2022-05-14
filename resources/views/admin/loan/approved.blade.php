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
                    <div class="card-box table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>Loan ID</th>
                  <th>full name</th>
                  <th>amount</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @forelse ($loans as $loan)
                  <tr>
                  <td>{{ $loan->loan_id }}</td>
                  <td>{{ $loan->firstname }}, {{ $loan->last_name }}</td>
                  <td>{{ $loan->amount }}</td>
                  <td>{{ $loan->status }}</td>
<td><a class="btn btn-success btn-sm" href="{{route('admin.loan.view', [$loan->id])}}">View</a></td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No Loan Data</td>
                  </tr>
            @endforelse
            </tbody>
            </table>
          </div>
                    </div>
              </div>
            </div>
    </div>
    <div class="clearfix"></div>
  </div>

  @endsection
