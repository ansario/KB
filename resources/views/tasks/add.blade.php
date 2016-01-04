@extends('layouts.app')

@section('content')
	<!-- <div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					New Task
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors
					@include('common.errors')

					<!-- New Task Form
					<form action="/task" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Task Name
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Task</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
							</div>
						</div>

						<!-- Add Task Button
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-plus"></i>Add Task
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<!-- Current Tasks
			@if (count($tasks) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						Current Tasks
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table">
							<thead>
								<th>Task</th>
								<th>&nbsp;</th>
							</thead>
							<tbody>
								@foreach ($tasks as $task)
									<tr>
										<td class="table-text"><div>{{ $task->name }}</div></td>

										<!-- Task Delete Button
										<td>
											<form action="/task/{{ $task->id }}" method="POST">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}

												<button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
													<i class="fa fa-btn fa-trash"></i>Delete
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endif
		</div>
	</div> -->

  <h1>New Article</h1>
<div class="container">
<div class="row">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">

          <form action="/admin/add" method="POST" class="form-horizontal">
						{{ csrf_field() }}


                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <textarea class="form-control" rows="5" name="body"></textarea>
                </div>
                <div class="form-group">
                  <label for="created">Created On</label>
                  <input type="date" class="form-control" name="created">
                </div>
                <div class="form-group">
                  <label for="last-modified-on">Last Modified On</label>
                  <input type="date" class="form-control" name="last-modified">
                </div>
                <div class="form-group">
                  <label for="expires-on">Expires On</label>
                  <input type="date" class="form-control" name="expired">
                </div>

                <div class="form-group">
                  <label for="status">Status:</label>
                  <select class="form-control" name="status">
                    <option value="0">New</option>
                    <option value="1">Review</option>
                    <option value="2">Published</option>
                    <option value="3">Expired</option>
                    <option value="4">Retired</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
              </form>


								<!-- <input type="text" name="title" id="task-title" class="form-control" value="{{ old('task') }}"> -->


      </div>
          <div class="col-md-2"></div>
    </div>
</div>
</div>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Markdown Help</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<script type="text/javascript">
$('.datepicker').datepicker();
</script>

@endsection
