@extends('layouts.app')

@section('content')

<div id="jumbo" class="extendfull">
  <div class="row">
  <div class="col-md-8">

    <div id="search">
        <form method="get">
          <div class="input-group">
            <input id="search-box" type="textbox" name="search" placeholder="Search the knowledge base..." class="form-control">
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit" id="addressSearch">Search</button>
          </span>
        </div>
      </div>
    </div>
  <div class="col-md-4">
    <div class="social">
    <ul>
    <li><a href="http://facebook.com/"><i class="fa fa-facebook"></i></a></li>
    <li><a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
    <li><a href="http://twitter.com/"><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://bomgar.uts.sc.edu/api/start_session?issue_menu=1&amp;c2cjs=1&amp;codeName=issue_2" onclick="window.open('https://bomgar.uts.sc.edu/api/start_session?issue_menu=1&amp;c2cjs=1&amp;codeName=issue_2', 'newwindow', 'width=300, height=250'); return false;"><i class="fa fa-comments-o"></i> </a></li>
    </ul>
    </div>
  </div>
</div>
</div>



  <div class="row">
    <div class="col-sm-4">
      <h2>Need help now?</h2>
      <p>Call the UTS Service Desk for immediate assistance with technical problems, 8:00AM-6:00PM, Monday - Friday.</p>
    </div>
    <div class="col-sm-4">
      <h2>USC WiFi</h2>
      <p>Get all the information you need to setup your computer, phone, tablet, or gaming device on the USC WiFi Network.</p>
    </div>
    <div class="col-sm-4">
      <h2>IT tips and hints</h2>
      <p>See some of the best of USC's IT offerings with our top 10 technology tips for students.</p>
    </div>
  </div>
<hr>
<h4>FEATURED ARTICLES</h4>
<div class="row">
{% for article in featured%}
  <div class="col-sm-4">
    <h4 class="truncate"><a href="">TEST</a></h4>
    <a href=""><img src="test" class="featured"></a>

  </div>
{% endfor %}


</div>


<script type="text/javascript">
$(function () {
    var getData = function (request, response) {
        $.getJSON(
            "http://159.203.96.53/autocomplete/?q=" + request.term,
            function (data) {
                response(data);
            });
    };
    var selectItem = function (event, ui) {
    }
    $("#search-box").autocomplete({
        source: getData,
        select: selectItem,
        minLength: 2,
        change: function() {
            $("#seach-box").val("").css("display", 2);
        }
    });
});
</script>


@endsection
