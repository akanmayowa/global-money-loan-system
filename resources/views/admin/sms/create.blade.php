@extends('layouts.appadmin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.jss"></script> --}}

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

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
                            <button class="btn btn-primary text-white" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <br />

	<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Design </h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>

										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
                                    @include('includes.messages')
									<form action="{{route('admin.sms.sendsms')}}" method="post" data-parsley-validate class="form-horizontal form-label-left">
                                        {{ csrf_field() }}
                                        <div hidden class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Agent<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input readonly type="number" name="agent_id" value="{{ $agent_id[0]['id'] }}" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Sender<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text"  required="required" name="sender" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" >Receiver <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <select id="choices-multiple-remove-button" multiple name="reciever[]" type="text"  required="required" class="form-control">
                                                    @foreach ($customers as $customer)
                                                    <option value="{{$customer->phone_number}}">{{ $customer->name}} {{ $customer->last_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
										</div>


                                        <div class="p-2">
											<label  class="col-form-label col-md-6 col-sm-6 label-align">Message</label>
											<div class="col-md-12 col-sm-12">
                                                <textarea class="form-control" required type="text" name="message" id="summernote"></textarea>
											</div>
										</div>

                                        <br />

										<div class="wrapper ">
											<div class="col-md-6 col-sm-6 offset-md-4 p-5">
												<button class="btn btn-warning" type="reset">Reset</button>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

  </div>
  <script>
    $(document).ready(function(){
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
    removeItemButton: true,
    maxItemCount:5,
    searchResultLimit:5,
    renderChoiceLimit:5
   });});
    </script>
  <script>
$('#summernote').summernote({
  minHeight: 100,
  placeholder: 'sms message here',
  focus: false,
  airMode: false,
  fontNames: ['Roboto', 'Calibri', 'Times New Roman', 'Arial'],
  fontNamesIgnoreCheck: ['Roboto', 'Calibri'],
  dialogsInBody: true,
  dialogsFade: true,
  disableDragAndDrop: false,








  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['para', ['style', 'ul', 'ol', 'paragraph']],
    ['fontsize', ['fontsize']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['height', ['height']],
    ['misc', ['undo', 'redo', 'print', 'help', 'fullscreen']],
    ['view', ['fullscreen', 'codeview', 'help']],
    ['color', ['color']],
    ['table', ['table']],

  ],
  popover: {
    air: [
      ['color', ['color']],
      ['font', ['bold', 'underline', 'clear']]
    ]
  },
  print: {
    'stylesheetUrl': 'url_of_stylesheet_for_printing'
  }
});

  </script>
@endsection

