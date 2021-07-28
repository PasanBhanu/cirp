@extends('common::layouts.master')
@section('form-aria-expanded')
    aria-expanded="true"
@endsection
@section('form-show')
    show
@endsection
@section('form')
    active
@endsection
@section('form-appplication')
    active
@endsection

@section('content')

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <form action="#" method="post">
                <div class="admin-section">
                    <div class="row clearfix m-t-30">
                        <div class="col-12">
                            <div class="navigation-list bg-white p-20">
                                <div class="add-new-header clearfix m-b-20">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="block-header">
                                                <h2> Online Applications</h2>
                                            </div>
                                        </div>
                                    </div>
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
                                <div class="table-responsive all-pages">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>{{ __('name') }}</th>
                                                <th>Nationality</th>
                                                <th>Contact Number</th>
                                                <th>{{ __('send_date') }}</th>
                                                <th>{{ __('options') }}</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@php $in=0 ; @endphp
                                        	@foreach($applications as $application)
                                        	@php $in++; @endphp
                                        	<tr role="row" id="row_{{ $application->id }}" class="odd">
                                        		<td class="sorting_1">{{$in}}</td>
                                                <td>{{ $application->sectionB_surname_with_initials }}</td>
                                                <td>{{ $application->nationality }}</td>
                                                <td>{{ $application->full_sesctionB_mobile_phone }}</td>
                                                <td>{{ $application->created_at }}</td>
                                                <td>
                                                	<a href="{{url('contact/application/view/'.$application->id)}}" target="_new_{{$application->id}}"class="btn btn-light active btn-xs" ><i class="fa fa-eye"></i>
                                                		{{ __('view') }}
                                                    </a>
                                                </td>

                                        	@endforeach
                                        	</tr>
                                        </tbody>
@endsection