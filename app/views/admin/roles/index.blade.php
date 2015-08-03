@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
	{{{ $title }}} :: @parent
@stop

{{-- Content --}}
@section('content')
<div class="container">
	<div class="page-header">
		<h3>
			Role Management

			<div class="place-right">
				<a href="{{{ URL::to('admin/roles/create') }}}" class="btn btn-small btn-info iframe"><span class="icon-pencil"></span> Create</a>
			</div>
		</h3>
	</div>

	<table class="table striped hovered dataTable" id="roles">
		<thead>
			<tr>
				<th class="col-md-6">{{{ Lang::get('admin/roles/table.name') }}}</th>
				<th class="col-md-2">{{{ Lang::get('admin/roles/table.users') }}}</th>
				<th class="col-md-2">{{{ Lang::get('admin/roles/table.created_at') }}}</th>
				<th class="col-md-2">{{{ Lang::get('table.actions') }}}</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
	</div>
@stop

{{-- Scripts --}}
@section('scripts')
	

	<script>
                $(function(){
                    $('#roles').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "{{ URL::to('admin/roles/data') }}",
                        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
                        
                    } );
                });
            </script>
@stop