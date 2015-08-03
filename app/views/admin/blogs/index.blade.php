@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ $title }}} :: @parent
@stop

@section('keywords')Blogs administration @stop
@section('author')Laravel 4 Bootstrap Starter SIte @stop
@section('description')Blogs administration index @stop

{{-- Content --}}
@section('content')
<div class="container">
	<div class="page-header">
		<h3>
			{{{ $title }}}

			<div class="place-right">
				<a href="{{{ URL::to('admin/blogs/create') }}}" class="btn btn-small btn-info iframe"><span class="icon-pencil"></span> Create</a>
			</div>
		</h3>
	</div>

<table class="table striped hovered dataTable" id="blogs">
		<thead>
			<tr>
				<th class="col-md-4">{{{ Lang::get('admin/blogs/table.title') }}}</th>
				<th class="col-md-2">{{{ Lang::get('admin/blogs/table.comments') }}}</th>
				<th class="col-md-2">{{{ Lang::get('admin/blogs/table.created_at') }}}</th>
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
                    $('#blogs').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "{{ URL::to('admin/blogs/data') }}",
                        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
                        
                    } );
                });
            </script>
@stop