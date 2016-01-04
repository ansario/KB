@extends('layouts.app')

@section('content')


<h1> {{$title}} </h1>

<div class="container">
<div class="row">
    <div class="row">
      <div class="col-md-2"></div>
        <div class="col-md-8">

          {!! $body !!}
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
