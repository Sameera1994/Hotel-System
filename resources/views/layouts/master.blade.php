<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  @yield('csslink')
</head>
<body>
	
    <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    	<div class="navbar-header">
      	<a class="navbar-brand" href="#">Hotel System</a>
    	</div>
    	<ul class="nav navbar-nav">
      		<li><a href="#">Home</a></li>
      		<li><a href="#">About</a></li>
      		<li class="active"><a href="#">Receipt</a></li>
    	</ul>
    	<form class="navbar-form navbar-left">
      	<div class="form-group">
        	<input type="text" class="form-control" placeholder="Search">
      	</div>
      		<button type="submit" class="btn btn-default">Submit</button>
    	</form>
    <ul class="nav navbar-nav navbar-right">
      <li align="center"></li>
    </ul>
    <h3><div align="center" id="timer"></div></h3>
  </div>
</nav>
@yield('content')
</body>
</html>