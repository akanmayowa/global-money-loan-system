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
        {{-- <script>window.Laravel = {{ {'csrfToken': csrf_token()}|json_encode()|raw }}</script> --}}

        <div class="">
            <div class="x_panel">
                <div class="x_content">
                    <div id="customer">
                    <Customer></Customer>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

@endsection
