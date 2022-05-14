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
                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


                            <div class="card-box table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Customer Name</th>
                                            <th>Acc No</th>
                                            <th>Saving Plan</th>
                                            <th>Saving Type</th>
                                            <th>Account Balance</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($savings as $key => $saving)
                                        <tr>
                                            <td>
                                                @foreach ($profiles as $profile)
                                                @if ($profile->user_id == $saving->user_id)
                                                <img id="frame" src="{{ asset($profile->passport) }}" width="50px"
                                                    height="50px" class="img-fluid" />
                                                @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($users as $user)
                                                @if ($user->id == $saving->user_id)
                                                {{ $user->name }}
                                                @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $saving->bankaccount }}</td>
                                            <td>{{ $saving->saving_package }}</td>
                                            <td>{{ $saving->saving_type }}</td>
                                            <td>{{ $saving->totalamount }}</td>
                                            <td><a class="glyphicon glyphicon-plus btn-success p-1"
                                                    href="{{ route('admin.deposit', $saving->id)}}"></a></td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5">No Saving Data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                            four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk aliquip
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.
                            Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan
                            four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="clearfix"></div>
</div>

@endsection
