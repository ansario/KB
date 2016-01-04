@extends('layouts.app')

@section('content')
	
	<div class="row">
  <div class="col-md-9">
  </div>
  <div class="col-md-3">
  <a href="/admin/add" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
  </div>
</div>
<table class="table table-hover">
<thead>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Created Date</th>
    <th>Expiry Date</th>
    <th>Workflow</th>
    <th>Actions</th>
  </tr>
</thead>
<tbody>
@if (count($tasks) > 0)
@foreach ($tasks as $task)

    <tr>
        <td><a href="/KB/article/key">key</a></td>
        <td>{{ $task->title }}</td>
        <td>{{ $task->created_on }}</td>
        <td>{{ $task->expires_on }}</td>
        <td>




              <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>

              <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>


            <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>






          <!-- <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> -->

        </td>
        <td>
          <a href="/a/{{$task->id}}/" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
          <a href="/admin/edit/{{$task->id}}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
          <a href="/admin/delete/{{$task->id}}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
      </td>
    </tr>
		@endforeach
@endif
</tbody>
</table>
@endsection
