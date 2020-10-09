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