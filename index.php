<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FootBall</title>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script>
$( function() {
  $( ".rosterView, #playerGroup" ).sortable({
	  connectWith: ".list-group",
	  forcePlaceholderSize: true,
	  distance: 0.5,
      tolerance: "pointer",
	  dropOnEmpty: true
  }).disableSelection();
} );
</script>
</head>

<body>
<div class="container">
  <div class="col-md-3">
    <h2>Roster</h2>
	<!-- QB -->
	<h4>QB</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>QB</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>QB</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<!-- RB -->
	<h4>RB</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>RB</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>RB</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>RB</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>RB</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>RB</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>RB</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<!-- WR -->
	<h4>WR</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>WR</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>WR</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>WR</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>WR</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>WR</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>WR</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<!-- TE -->
	<h4>TE</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>TE</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<!-- DE -->
	<h4>DE</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>DE</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<!-- K -->
	<h4>K</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
	<h4>K</h4>
	<ul class="list-group rosterView"><li style="visibility:hidden;"></li></ul>
  </div>

  <div class="col-md-3">
  <h2>Player List</h2>
  <ul id="playerGroup" class="list-group playerView">
	  <li style="visibility:hidden;"></li>
      <li class="list-group-item row">
          <span class="badge pull-left col-md-3">01</span>
          <div class="col-md-9">Joe Nobody</div>
      </li>
      <li class="list-group-item row">
          <span class="badge pull-left col-md-3">02</span>
          <div class="col-md-9">Curtis Clam</div>
      </li>
      <li class="list-group-item row">
          <span class="badge pull-left col-md-3">03</span>
          <div class="col-md-9">Jim Smith</div>
      </li>
      <li class="list-group-item row">
          <span class="badge pull-left col-md-3">04</span>
          <div class="col-md-9">Leroy Jenkins</div>
      </li>
  </ul>
  </div>
</div>
</body>
