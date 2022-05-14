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

                <div class="d-flex justify-content-end">...
                    <a href="{{route('admin.sms.create')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>
                        Add SMS
                    </a>
                </div>

                <div class="card-box table-responsive">
            <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>Reciever</th>
                  <th>message</th>
                  <th>sent by</th>
                  <th>date</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($sms as $smses)
                  <tr>
                  <td>{{$smses->reciever}}</td>
                  <td>{{$smses->message}}</td>
                    @foreach ($users as $user)
                    @if ($user->id == $smses->agent_id)
                        <td>{{$user->name}} {{$user->last_name}} </td>
                    @endif
                @endforeach
                    <td>{{$smses->created_at}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">No data available</td>
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

