@extends('layouts.app')

@push('css')
<link href="{{asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
@endpush

@section('content')
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Subscribers
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Email</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($subscribers as $key=>$subscriber)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{$subscriber->email}}</td>
                                            <td>{{$subscriber->created_at}}</td>
                                        </tr>
                                        @endforeach
                                     </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->

@endsection