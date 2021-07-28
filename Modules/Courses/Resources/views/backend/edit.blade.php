@extends('common::layouts.master')
@section('course-aria-expanded')
    aria-expanded="true"
@endsection
@section('course-show')
    show
@endsection
@section('course-edit')
    active
@endsection

@section('content')

 <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <form action="{{url('programs/edit/submit/'.$pro->id)}}" method="post" enctype="multipart/form-data">
            	@csrf

            
            <div class="row clearfix">
                <div class="col-12">
                    
                    <div class="row">
                        <div class="col-12">
                            @if(session('error'))
                                <div id="error_m" class="alert alert-danger">
                                    {{session('error')}}
                                </div>
                            @endif
                            @if(session('success'))
                                <div id="success_m" class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Main Content section start -->
                        <div class="col-12 col-lg-8">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2>Course Details</h2>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="post_title" class="col-form-label">Name *</label>
                                        <input id="post_title" name="name" value="{{$pro->name}}" type="text" class="form-control" required onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="text" class="col-form-label"><b>{{ __('slug') }}</b> {{url('/course')}}/</label>
                                        <input type="text" class="form-control" id="slug-text" name="slug" value="{{$pro->slug}}" disabled>
                                        
                                    </div>
                                </div>
                                <div class="row p-l-15">
                                    <div class="col-12">
                                        <label for="short_des" class="col-form-label"><b>Short Description *</b></label>
                                        </div>
                                        <div class="col-12">
                                        <textarea name="short_des" id="short_des" cols="75" rows="6"> {{$pro->short_des}}</textarea>
                                    </div>
                                    
                                </div>

                                

                                <!-- tinemcey start -->
                                <div class="row p-l-15">
                                    <div class="col-12">
                                        <label for="post_content" class="col-form-label">{{ __('content') }}*</label>
                                        <textarea name="description" id="post_content"cols="15" rows="5"> {!!$pro->description!!}</textarea>
                                    </div>
                                </div>
                                <!-- tinemcey end -->

                                <br><br>


                                <div class="row p-l-15">
                                    <div class="col-12">
                                        <label for="post_content" class="col-form-label">Entry Requirements *</label>
                                        <textarea name="entry_requirements" value="" id="post_content"cols="15" rows="5"> {!!$pro->entry_requirements!!}</textarea>
                                    </div>
                                </div>
                                <br><br>


                                <div class="row p-l-15">
                                    <div class="col-12">
                                        <label for="learning_support" class="col-form-label">Learning Support *</label>
                                        <textarea name="learning_support" value="" id="post_content"cols="15" rows="5"> {!!$pro->learning_support!!}</textarea>
                                    </div>
                                </div>
                                <br><br>


                                <div class="row p-l-15">
                                    <div class="col-12">
                                        <label for="fees_funding" class="col-form-label">Fees & Fundings *</label>
                                        <textarea name="fees_funding" value="" id="post_content"cols="15" rows="5"> {!!$pro->fees_funding!!}</textarea>
                                    </div>
                                </div>

                            </div>



                            <div class="add-new-page  bg-white p-20 m-b-20">

                            	<div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label"><b>Modules</b></label>
                                        <!-- <button style="float:right;" type="button" id="ad" name="add" class="btn btn-success btn-sm add"><span>Add New</span></button> -->
                                    </div>
                                </div>
                            	<div class="col-sm-12">
                                    <table class="table table-bordered" id="item_table">
                                        <tr>
                                            <th>Module</th>
                                            <th>Credits</th>
                                        </tr>
                                        @foreach($modules as $module)
                                        <tr>
                                        	<td><input type="text" name="namemodule[]" class="form-control"  value="{{$module->name}}" /></td>
                                        	<td><input type="text" name="creditsmodule[]" class="form-control"  value="{{$module->credits}}"></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                            <div class="add-new-page  bg-white p-20 m-b-20">

                            	<div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="col-form-label"><b>Electives</b></label>
                                        <!-- <button style="float:right;" type="button" id="ad" name="add" class="btn btn-success btn-sm add"><span>Add New</span></button> -->
                                    </div>
                                </div>
                            	<div class="col-sm-12">
                                    <table class="table table-bordered" id="item_table">
                                        <tr>
                                            <th>Module</th>
                                            <th>Credits</th>
                                        </tr>
                                        @foreach($electives as $elective)
                                        <tr>
                                        	<td><input type="text" name="nameelective[]" class="form-control"  value="{{$elective->name}}" /></td>
                                        	<td><input type="text" name="creditelective[]" class="form-control"  value="{{$elective->credits}}"></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>


                        </div>

                        <!-- Main Content section end -->

                        <!-- right sidebar start -->
                        <div class="col-12 col-lg-4">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="col-sm-12">
                                	<div class="form-group">
                                        <label for="image" class="col-form-label"><b>Image</b> </label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-group text-center">
                                        	
                                            @if(!empty($pro->image))
                                                <img src=" {{static_asset($pro->image)}} "
                                                     id="image_preview" width="200" height="200"
                                                     class="img-responsive img-thumbnail">
                                            @else
                                                <img src="{{static_asset('default-image/default-100x100.png') }} " id="image_preview"
                                                     width="200" height="200" class="img-responsive img-thumbnail">
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="duration" class="col-form-label"><b>Duration</b></label>
                                        <input type="text" class="form-control" id="duration" name="duration" value="{{$pro->duration}}" placeholder="05 Years">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="semesters" class="col-form-label"><b>Semesters</b></label>
                                        <input type="text" class="form-control" id="semesters" name="semesters" value="{{$pro->semesters}}" placeholder="8">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="rqfcredits" class="col-form-label"><b>RQF Credits</b></label>
                                        <input type="text" class="form-control" id="rqfcredits" name="rqfcredits" value="{{$pro->rqfcredits}}" placeholder="100">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="delivery" class="col-form-label"><b>Schedule</b></label>
                                        <input type="text" class="form-control" id="delivery" name="delivery" value="{{$pro->delivery}}" placeholder="Full Time">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="intakes" class="col-form-label"><b>Intakes</b></label>
                                        <input type="text" class="form-control" id="intakes" name="intakes" value="{{$pro->intakes}}" placeholder="February">
                                    </div>
                                </div>
                            </div>

                            <div class="add-new-page  bg-white p-20 m-b-20">

                            	<div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="progression" class="col-form-label"><b>Progression</b></label>
                                        <input type="text" class="form-control" id="progression" name="progression" value="{{$pro->progression}}" placeholder="BA (Hons) Psychology">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="progression" class="col-form-label"><b>Study Level</b></label>
                                        <select name="studylevel" class="form-control">
                                        	<option disabled>Select</option>
                                        	<option value="Undergraduate" @if($pro->studylevel == 'Undergraduate') selected @endif >Undergraduate</option>
                                        	<option value="Postgraduate" @if($pro->studylevel == 'Postgraduate') selected @endif>Postgraduate</option>
                                        	<option value="Professional" @if($pro->studylevel == 'Professional') selected @endif>Professional</option>
                                        	<option value="Foundation" @if($pro->studylevel == 'Foundation') selected @endif>Foundation</option>
                                        </select>
                                       
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="transferoptions" class="col-form-label"><b>Transferoptions</b></label>
                                        <input type="text" class="form-control" id="transferoptions" name="transferoptions" value="{{$pro->transferoptions}}" placeholder="Uk, Aus">
                                    </div>
                                </div>
                                

                                
                            </div>

                            <div class="add-new-page  bg-white p-20 m-b-20">

                            	<div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="progression" class="col-form-label"><b>Recognized by TVEC</b></label>
                                        <br>

                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="c_image" id="yes" value="yes" class="custom-control-input" @if($pro->c_image == 'yes') checked @endif>
                                            <span class="custom-control-label" >Yes</span>
                                        </label>

                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" name="c_image" id="no" value="no" @if($pro->c_image == 'no') checked @endif class="custom-control-input">
                                            <span class="custom-control-label">No</span>
                                        </label>


                                    </div>
                                </div>
                            </div>
                             <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="block-header">
                                    <h2>Update Course</h2>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="custom-control" for="btnSubmit"></label>
                                        <button type="submit" name="btnSubmit" class="btn btn-primary" style="width:100%;"><i
                                                class="m-r-10 mdi mdi-content-save-all"></i>Update
                                        </button>
                                        <label class="" for="btnSubmit"></label>
                                    </div>
                                </div>

                                
                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </form>

@endsection
@section('script')

<script>
                    $(document).ready(function() {

                        $(document).on('click', '.add', function() {
                            var html = '';
                            html += '<tr>';
                            html += '<td><input type="text" name="year[]" class="form-control number_only item_quantity" required /></td>';
                            html += '<td><input type="text" name="examination_body[]" class="form-control number_only item_quantity" required /></td>';

                            html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span>Remove</span></button></td></tr>';
                            $('#item_table').append(html);
                        });

                        $(document).on('click', '.remove', function() {
                            $(this).closest('tr').remove();
                        });

                    });
                </script> 
<script type="text/javascript">
/* Encode string to slug */
function convertToSlug( str ) {
	
  //replace all special characters | symbols with a space
  //str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ').toLowerCase();
  str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ');
	
  // trim spaces at start and end of string
  str = str.replace(/^\s+|\s+$/gm,'');
	
  // replace space with dash/hyphen
  str = str.replace(/\s+/g, '-');	
  document.getElementById("slug-text").value= str;
  //return str;
}
</script>


@endsection