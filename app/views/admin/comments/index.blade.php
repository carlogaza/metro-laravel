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
            <a href="/admin"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
           {{{ $title }}}
        </h3>
		
	</div>

	<table class="table striped hovered dataTable" id="comments">
		<thead>
			<tr>
				<th class="text-left">{{{ Lang::get('admin/comments/table.title') }}}</th>
				<th class="text-left">{{{ Lang::get('admin/blogs/table.post_id') }}}</th>
				<th class="text-left">{{{ Lang::get('admin/users/table.username') }}}</th>
				<th class="text-left">{{{ Lang::get('admin/comments/table.created_at') }}}</th>
				<th class="text-left">{{{ Lang::get('table.actions') }}}</th>
			</tr>
		</thead>
		<tbody>
                </tbody>

                <tfoot>
                <tr>
				<th class="text-left">{{{ Lang::get('admin/comments/table.title') }}}</th>
				<th class="text-left">{{{ Lang::get('admin/blogs/table.post_id') }}}</th>
				<th class="text-left">{{{ Lang::get('admin/users/table.username') }}}</th>
				<th class="text-left">{{{ Lang::get('admin/comments/table.created_at') }}}</th>
				<th class="text-left">{{{ Lang::get('table.actions') }}}</th>
			</tr>
                </tfoot>
	</table>
	</div>
@stop

{{-- Scripts --}}
@section('scripts')

	<script>
                $(function(){
                    $('#comments').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "{{ URL::to('admin/comments/data') }}",
                        "fnDrawCallback": function ( oSettings ) {
	           		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	     		}
                        
                    } );
                });
            </script>
@stop