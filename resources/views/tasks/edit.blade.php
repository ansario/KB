@extends('layouts.app')

@section('content')

  <h1>New Article</h1>
<div class="container">
<div class="row">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">

          <form action="/admin/edit/{{$task->id}}" method="POST" class="form-horizontal">
						{{ csrf_field() }}


                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" name="title" value="{{$task->title}}">
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <textarea class="form-control" rows="5" name="body" value="{{$task->body}}">{{$task->body}}</textarea>
                </div>
                <div class="form-group">
                  <label for="created">Created On</label>
                  <input type="date" class="form-control" name="created" value="{{$task->created_on}}">
                </div>
                <div class="form-group">
                  <label for="last-modified-on">Last Modified On</label>
                  <input type="date" class="form-control" name="last-modified" value="{{$task->modified_on}}">
                </div>
                <div class="form-group">
                  <label for="expires-on">Expires On</label>
                  <input type="date" class="form-control" name="expired" value="{{$task->expires_on}}">
                </div>

                <div class="form-group">
                  <label for="status">Status:</label>
                  <select class="form-control" name="status">
                    @if ($task->status === 0 )
                      <option selected value="0">New</option>
                    @else
                      <option value="0">New</option>
                    @endif
                    @if ($task->status === 1 )
                      <option selected value="1">Review</option>
                    @else
                      <option value="1">Review</option>
                    @endif
                    @if ($task->status === 2 )
                      <option selected value="2">Published</option>
                    @else
                      <option value="2">Published</option>
                    @endif
                    @if ($task->status === 3 )
                      <option selected value="3">Expired</option>
                    @else
                      <option value="3">Expired</option>
                    @endif
                    @if ($task->status === 4 )
                      <option selected value="4">Retired</option>
                    @else
                      <option value="4">Retired</option>
                    @endif
                    <!-- <option value="1">Review</option>
                    <option value="2">Published</option>
                    <option value="3">Expired</option>
                    <option value="4">Retired</option> -->
                  </select>
                </div>

                <button type="submit" class="btn btn-default">Submit</button>
              </form>




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
