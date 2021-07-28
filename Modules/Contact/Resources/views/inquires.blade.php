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
@section('form-inquiries')
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
                                                <h2> Inquire Messages</h2>
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
                                                <th>{{ __('email') }}</th>
                                                <th>{{ __('message') }}</th>
                                                <th>{{ __('send_date') }}</th>
                                                <th>{{ __('options') }}</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@php $in=0 ; @endphp
                                        	@foreach($inquires as $inquire)
                                        	@php $in++; @endphp
                                        	<tr role="row" id="row_{{ $inquire->id }}" class="odd">
                                        		<td class="sorting_1">{{$in}}</td>
                                        		<td>{{ $inquire->title.'. '.$inquire->name }}</td>
                                                <td>{{ $inquire->email }}</td>
                                                <td> {{ $inquire->message }}</td>
                                                <td>{{ $inquire->created_at }}</td>
                                                <td>
                                                	<a href="javascript:void(0)" class="modal-menu btn btn-light active btn-xs" data-title="View Mesage" data-url="{{route('edit-info',['page_name'=>'view-message','param1'=>$inquire->id])}}"
                                                                data-toggle="modal"
                                                                data-target="#common-modal{{ $inquire->id }}"><i
                                                                class="fa fa-eye"></i>
                                                                {{ __('view') }}
                                                            </a>
                                                </td>
                                        	</tr>
                                        	
                                        	@endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- page info end-->
        </div>
    </div>
@endsection
@section('modal')
@foreach($inquires as $inquire)
    <div id="common-modal{{ $inquire->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content p-0 b-0">
                <div class="panel panel-color panel-primary">
                    <div class="modal-header">
                        
                        <h5 class="modal-title" id="common-modal-title">{{ $inquire->created_at }} </h5>
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="modal-loader"> <img src="{{static_asset('/preloader.gif')}}" /> </div>


                        <div class="row">

                            <label for="name" class="col-form-label col-md-12"><b>{{ $inquire->title }}.{{ $inquire->name }}</b> {{$inquire->phone }} - {{$inquire->email }}</label>
                            <div class="col-md-12">
                                <textarea disabled rows="10" class="form-control">{{$inquire->message }}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection