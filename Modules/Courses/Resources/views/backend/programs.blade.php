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
@section('course-all')
    active
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
                                            <h2>All Courses</h2>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="{{url('programs/add')}}"
                                           class="btn btn-primary btn-sm btn-add-new"><i class="mdi mdi-plus"></i>
                                            Create new Course
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" all-pages">
                                <!-- Table Filter -->
                                <div class="row table-filter-container m-b-20">
                                    <div class="col-sm-12">
                                        {!!  Form::open(['url' => 'programs/filter','method' => 'GET']) !!}
                                        <input type="hidden" name="filter" value="yes">
                                        <div class="item-table-filter">
                                            <p class="text-muted"><small>Study Level</small></p>
                                            <select class="form-control" name="studylevel">
                                            	<option value="All">All</option>
                                                <option value="Undergraduate" @if($request->studylevel == 'Undergraduate') selected @endif>Undergraduate</option>
                                                <option value="Postgraduate" @if($request->studylevel == 'Postgraduate') selected @endif>Postgraduate</option>
                                                <option value="Professional" @if($request->studylevel == 'Professional') selected @endif> Professional</option>
                                                <option value="Foundation" @if($request->studylevel == 'Foundation') selected @endif>Foundation</option>
                                            </select>
                                        </div>

                                        <div class="item-table-filter">
                                            <p class="text-muted"><small>Field Of study</small></p>
                                            <select name="field" class="form-control">
                                                <option value="All">All</option>
                                                <option value="Psychology" @if($request->field == 'Psychology') selected @endif>Psychology</option>
                                            </select>
                                        </div>

                                        <div class="item-table-filter md-top-10 item-table-style">
                                            <p>&nbsp;</p>
                                            <button type="submit" class="btn bg-primary">{{ __('filter') }}</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>

                                <!-- Table Filter -->
                                <table class="table table-bordered table-striped" role="grid">
                                    <thead>
                                    <tr role="row">
                                        <th width="20">#</th>
                                        <th>Course Name</th>
                                        <th>Study Level</th>
                                        <th>{{ __('options') }}</th>
                                    </tr>
                                	</thead>
                                	<tbody>
                                        @php $i = 0; @endphp
                                		@foreach($pr as $pg)
                                        @php $i++;  @endphp
                                		<tr id="row_{{ $pg->id }}">
                                            <td>{{ $i }}</td>
                                            <td>{{ $pg->name }}</td>
                                            <td>{{ $pg->studylevel }}</td>
                                            
                                            <td>
                                            	<div class="dropdown">
                                                        <button class="btn bg-primary dropdown-toggle btn-select-option"
                                                                type="button" data-toggle="dropdown">.....<span
                                                                class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu options-dropdown">
                                                        	<li>
                                                                <a href="{{url('programs/edit/'.$pg->id)}}"><i
                                                                            class="fa fa-edit option-icon"></i>Edit Course
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('programs/modules/'.$pg->id)}}"><i
                                                                            class="fa fa-edit option-icon"></i>Edit Modules
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('programs/electives/'.$pg->id)}}"><i
                                                                            class="fa fa-edit option-icon"></i>Edit Electives
                                                                </a>
                                                            </li>
                                                            <li> 
                                                                <a href="{{url('course/'.$pg->slug)}}" target="_bn" 
                                                                           
                                                                           name="option" class="btn-list-button">
                                                                            <i class="fa fa-eye option-icon"></i> View
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            </td>
                                        </tr>
                                		@endforeach
                                	</tbody>
                            	</table>
@endsection