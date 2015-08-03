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
			{{{ $title }}}

			<div class="place-right">
				<a href="{{{ URL::to('admin/users/create') }}}" class="btn btn-small btn-info iframe"><span class="icon-pencil"></span> Create</a>
			</div>
		</h3>
	</div>

	<table class="table striped hovered dataTable" id="users">
		<thead>
			<tr>
				<th class="text-left">{{{ Lang::get('admin/users/table.username') }}}</th>
				<th class="text-left">{{{ Lang::get('admin/users/table.email') }}}</th>
				<th class="text-left">{{{ Lang::get('admin/users/table.roles') }}}</th>
				<th class="text-left">{{{ Lang::get('admin/users/table.activated') }}}</th>
				<th class="text-left">{{{ Lang::get('admin/users/table.created_at') }}}</th>
				<th class="text-left">{{{ Lang::get('table.actions') }}}</th>
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
                    $('#users').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "{{ URL::to('admin/users/data') }}",
                        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
                        
                    } );
                });
            </script>
@stop