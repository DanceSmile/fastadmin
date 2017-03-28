@extends('layouts.admin')

@section("page-content")
    @component("components.table")

    	@slot("field")
    		@foreach($fillable as $field)
    			<th>{{$field}}</th>
    		@endforeach
    		<th>操作</th>
    	@endslot

    		@foreach($data as $value)
    			<tr>
    				<td class="text-center">{{$loop->index}}</td>
	    			@foreach($fillable as $field)
	    				<td>{{$value->$field}}</td>
	    			@endforeach
	    			<td>
	    				<a href="" class="btn btn-success">删除</a>
	    				<a href="" class="btn btn-success">编辑</a>
	    			</td>
    			</tr>
    		@endforeach
    @endcomponent


@endsection