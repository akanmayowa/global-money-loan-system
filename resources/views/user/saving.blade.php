@extends('layouts.appuser')
@section('content')
<div class="right_col" role="main">
 <br />
    <div class="container-fluid">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Elements</h4>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            
                            <div class="esus box p-3 mb-2 bg-primary text-white border-primary"><strong>You have selected red option</strong> so i am here</strong></div>
                            <div class="contribution box p-3 mb-2 bg-success text-white"><strong>You have selected <strong>green option so i am here</strong></div>
                            <div class="saving box p-3 mb-2 bg-danger text-white"><strong>You have selected <strong>blue option so i am here</strong></div>
                            
<div class="item form-group" id="saving_package_div">
    <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Saving Package</label>
    <div class="col-md-6 col-sm-6">
    <select name="saving_package"  class="form-control"  id="saving_package" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
        <option value="">Select Language</option>
        <option value="esus">Php</option>
        <option value="contribution">Java</option>
        <option value="saving">Javascript</option>
        <option value="Dotnet">Dotnet</option>
    </select>
    </div>
</div>

                    <div class="item form-group" id="saving_type">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Saving Type</label>
                        <div class="col-md-6 col-sm-6">
                        <select name="saving_type" id="subcategory" class="form-control">
                        <option value="">--Duration of Savings</option>
                        </select>
                    </div>
                        </div>

                        
                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Amount</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="amount" class="form-control" type="text" name="amount">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
<script src="{{ asset('js/saving.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
