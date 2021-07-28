@extends('common::layouts.master')
@section('course-aria-expanded')
    aria-expanded="true"
@endsection
@section('course-show')
    show
@endsection
@section('course')
    active
@endsection
@section('course-elective')
    active
@endsection
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
@endsection
@section('content')
<div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <div class="admin-section">
                <div class="row clearfix m-t-30">
                    <div class="col-12">
                        <div class="col-12">
                           
                            @if(session('success'))
                                <div id="success_m" class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif
                            
                        </div>
                        <div class="navigation-list bg-white p-20">
                            <div class="add-new-header clearfix m-b-20">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="block-header">
                                            <h1>Electives</h1>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="{{url('programs/edit/'.$pro->id)}}"
                                           class="btn btn-primary btn-sm btn-add-new"><i class="mdi mdi-plus"></i>
                                            Edit Course
                                        </a>
                                        <a href="{{url('programs/modules/'.$pro->id)}}"
                                           class="btn btn-primary btn-sm btn-add-new"><i class="mdi mdi-plus"></i>
                                            Edit Modules
                                        </a>
                                    </div>
                                </div>
                            
                                <div class="row">
                                    <div class="col-2">
                            		<img width="150" height="150" alt="User" src="{{static_asset($pro->image)}}" style="float:left">
                            		</div>
                            		<div class="col-10">
                            			<h2>{{$pro->name}}</h2>
                            			<h4 style="line-height: 9px;">Progression : {{$pro->progression}}</h4>
                            			<h4 style="line-height: 9px;">Duration : {{$pro->duration}}</h4>
                            			<h4 style="line-height: 9px;">Delivery  : {{$pro->delivery}}</h4>
                            		</div>
                            	</div>
                            </div>
                            <div class="all-pages">
                                <!-- Table Filter -->
                                <div class="row table-filter-container m-b-20">
                                    <div class="col-sm-12">
                                    	<h4 style="line-height: 9px;">Add Elective</h4>
                                        {!!  Form::open(['url' => 'programs/electives/submit','method' => 'POST']) !!}
                                        <input type="hidden" name="course_id" value="{{$pro->id}}">
                                        <div class="item-table-filter">
                                            <input type="text" class="form-control" name="name" placeholder="Elective Name">
                                        </div>
                                        <div class="item-table-filter">
                                            <input type="text" class="form-control" name="credits" placeholder="Elective Credits">
                                        </div>

                                        <div class="item-table-filter md-top-10 item-table-style">
                                            <button type="submit" class="btn bg-primary">Add Elective</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>

                                <table class="table table-bordered table-striped" role="grid">
                                	<thead>
                                    <tr role="row">
                                        <th width="20">#</th>
                                        <th>Elective Name</th>
                                        <th>Elective Credits</th>
                                        <th>{{ __('options') }}</th>
                                    </tr>
                                	</thead>
                                	<tbody>
                                	<form action="{{url('programs/electives/edit')}}" method="post">
                                		@csrf
                                		@php $i1 = 0; @endphp
                                		@foreach($electives as $elective)
                                        @php $i1++;  @endphp
                                        <tr id="row_{{$elective->id}}">
                                        	<td>{{ $i1 }}</td>
                                        	<input type="hidden" name="id[]" value="{{$elective->id}}">
                                            <td><input type="text" name="name[]" value="{{$elective->name}}" class="form-control"></td>
                                            <td><input type="text" name="credits[]" value="{{$elective->credits}}" class="form-control"></td>
                                            <td>
                                            	<button class="btn bg-primary" type="submit" name="edit"> Edit</button>
                                            	<a href="javascript:" rel="{{$elective->id}}" rel1="electives/delete" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                     </form>
                                	</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
       
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'Are you sure?',
                text:"You won't be able to revert this!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Yes, delete it!',
                cancelButtonText:'No, cancel!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/programs/"+deleteFunction+"/"+id;
            });
        });
    </script>
@endsection