<html>
	<head>
		<title>Program Simulasi Monte Carlo - Kelompok 2</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/main.css">
	  	<link rel="stylesheet" href="css/bootstrap.min.css">
	  	<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="icon" href="img/favicon.ico">
	  	<script src="js/jquery.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
	  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/navbar-fixed-right.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/navbar-fixed-left.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/docs.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/mladenplavsic/bootstrap-navbar-sidebar/3bd282bd/docs/docs.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-left">
      <div class="container">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#navbar"
            aria-expanded="false"
            aria-controls="navbar"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li class="dropdown">
              <a
                href="#"
                class="dropdown-toggle"
                data-toggle="dropdown"
                role="button"
                aria-haspopup="true"
                aria-expanded="false"
                >Dropdown <span class="caret"></span
              ></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a data-class="navbar-fixed-left">
                <i class="fa fa-arrow-left"></i>
                Fixed Left
              </a>
            </li>
            <li>
              <a data-class="navbar-fixed-top">
                <i class="fa fa-arrow-up"></i>
                Fixed Top
                <small>(original)</small>
              </a>
            </li>
            <li>
              <a data-class="navbar-fixed-right">
                <i class="fa fa-arrow-right"></i>
                Fixed Right
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="jumbotron">
        <h1>
          Bootstrap Navbar Sidebar
          <br />
          <small>Fixed to Left or Right</small>
        </h1>
        <p>
          <strong>
            Use classic Bootstrap navbar as sidebar, on left or right side.
          </strong>
        </p>
        <p>
          <a
            class="github-button"
            href="https://github.com/mladenplavsic/bootstrap-navbar-sidebar"
            data-icon="octicon-star"
            data-style="mega"
            data-count-href="/mladenplavsic/bootstrap-navbar-sidebar/stargazers"
            data-count-api="/repos/mladenplavsic/bootstrap-navbar-sidebar#stargazers_count"
            data-count-aria-label="# stargazers on GitHub"
            aria-label="Star mladenplavsic/bootstrap-navbar-sidebar on GitHub"
            >Star</a
          >
          <a
            class="github-button"
            href="https://github.com/mladenplavsic/bootstrap-navbar-sidebar/fork"
            data-icon="octicon-repo-forked"
            data-style="mega"
            data-count-href="/mladenplavsic/bootstrap-navbar-sidebar/network"
            aria-label="Fork mladenplavsic/bootstrap-navbar-sidebar on GitHub"
            >Fork</a
          >
          <a
            class="github-button"
            href="https://github.com/mladenplavsic"
            data-style="mega"
            aria-label="Follow @mladenplavsic on GitHub"
            >Follow @mladenplavsic</a
          >
        </p>
        <p>
          Same when using <code>.navbar-fixed-top</code> - add class
          <code>.navbar-fixed-left</code> or
          <code>.navbar-fixed-right</code> where needed.
        </p>
        <p>
          Click buttons below, and appropriate class will be added to example
          navbar.
        </p>
        <p>
          <span class="btn-group">
            <a data-class="navbar-fixed-left" class="btn btn-lg btn-default">
              <i class="fa fa-arrow-left"></i>
              Fixed Left
            </a>
            <a data-class="navbar-fixed-top" class="btn btn-lg btn-default">
              <i class="fa fa-arrow-up"></i>
              Fixed Top
              <small>(original)</small>
            </a>
            <a data-class="navbar-fixed-right" class="btn btn-lg btn-default">
              <i class="fa fa-arrow-right"></i>
              Fixed Right
            </a>
          </span>
        </p>
      </div>

      <footer>
        Repository maintained by
        <a href="https://github.com/mladenplavsic">mladenplavsic</a>
      </footer>
    </div>
  </body>	
  <script>
			 $("#datepicker").datepicker({
					format: " yyyy", // Notice the Extra space at the beginning
					viewMode: "years", 
					minViewMode: "years"
			});
			console.log($("#datepicker").val());
			 $("#datepicker").on("change",function(){
				var selected = $(this).val();
				console.log(selected);
				$(".year").val(selected);
			});
    </script>
</html>
