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
                    @include('admin.report.topmenu')
                    <div class="x_content">
                        <div class="card mt-5">
                            <h6 class="card-header">Investment</h6>
                            <div class="card-body">
                                <br />
                                <form method="get" action=" ">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="date" name="investment_start_date"  class="form-control"  />
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" name="investment_end_date"  class="form-control"  />
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" name="submit" class="btn btn-primary">Filter</button>
                                            <a type="button" href="{{ route('admin.report.investment') }}" class="btn btn-outline-secondary">Refresh</a>
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
                                            <th>Investment Plan</th>
                                            <th>Interest Rate</th>
                                            <th>Investment Amount</th>
                                            <th>Transaction Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($investments  as $investment)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $investment->transaction_id }}</td>
                                                <td>{{ $investment->investment_duration }}</td>
                                                <td>{{ $investment->investment_plan }} days</td>
                                                <td>{{ number_format($investment->interestrate,2) }}</td>
                                                <td>{{ number_format($investment->amount,2) }}</td>
                                                <td>{{ $investment->created_at->toDateTimeString() }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td class="text-primary" colspan="4">Total</td>
                                            <td class="text-primary">{{ number_format($investments_total_interestrate,3) }}</td>
                                            <td class="text-primary">{{ number_format($investments_total_amount,3) }}</td>
                                            <td class="text-primary"></td>
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
        <div class="clearfix"></div>
    </div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

@endsection
