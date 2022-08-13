@extends('layouts.appadmin')
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
                        <span class="input-group-btn">
               <button class="btn btn-secondary" type="button">Go!</button>
             </span>
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
                            <h6 class="card-header">Saving</h6>
                            <div class="card-body">
                                <br />
                                <form method="get" action=" ">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="date" name="start_date"  class="form-control"  />
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" name="end_date"  class="form-control"  />
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" name="submit" class="btn btn-primary">Filter</button>
                                            <a type="button" href="{{ route('admin.report.savings') }}" class="btn btn-outline-secondary">Refresh</a>
                                        </div>
                                    </div>
                                </form>
                                <br />

                                <div class="card-box table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Transaction #</th>
                                            <th>Duration</th>
                                            <th>Interest Rate</th>
                                            <th>Amount</th>
                                            <th>Transaction Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($savings  as $saving)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $saving->transaction_id }}</td>
                                                <td>{{ number_format($saving->duration,1) }} days</td>
                                                <td>{{ number_format($saving->interestrate,2) }}</td>
                                                <td>{{ number_format($saving->amount,2) }}</td>
                                                <td>{{ $saving->created_at->toDateTimeString() }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td class="text-primary" colspan="3">Total</td>
                                            <td class="text-primary">{{ number_format($total_interestrate,3) }}</td>
                                            <td class="text-primary">{{ number_format($total_amount,3) }}</td>
                                            <td></td>
                                        </tr>
                                        </tfoot>
                                    </table>
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
