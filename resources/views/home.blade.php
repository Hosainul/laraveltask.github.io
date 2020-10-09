@extends('layouts.app')

@push('css')
<link href="{{asset('assets/backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
@endpush

@section('content')
<div class="card text-center">
    <div class="card-body">
      <h1 class="card-title">Beatnik Technology Limited </h1>
    </div>
  </div>

              <!-- Exportable Table -->
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Clients
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Serial</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $key=>$client)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{$client->name}}</td>
                                            <td>{{$client->email}}</td>
                                            <td>{{$client->subject}}</td>
                                            <td>{{$client->message}}</td>
                                            <td>{{$client->created_at}}</td>
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

@push('js')
     <!-- Jquery DataTable Plugin Js -->
     <script src="{{asset('assetplugins/jquery-datatable/jquery.dataTables.js')}}"></script>
     <script src="{{asset('aset/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
     <script src="{{asset('aset/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
     <script src="{{asset('aset/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
     <script src="{{asset('aset/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
     <script src="{{asset('aset/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
     <script src="{{asset('aset/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
     <script src="{{asset('aset/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
     <script src="{{asset('aset/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
 
     <script src="{{asset('assets/backend/js/pages/tables/jquery-datatable.js')}}"></script>
    
@endpush