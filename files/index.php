<?php
$dir = "linuxmini/";

// Sort in ascending order - this is default
$a = scandir($dir);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TheMobileProf Courses</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">TheMobileProf</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Free Mini Classes
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Linux SysAdmin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">DevOps</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MS Office</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">TheMobileProf.com Intro to Linux on Mobile</h1>
        <p class="lead">Our Free Intro videos cover Linux installation and setup on mobile, common Linux commands, and the Neovim Code Editor. This will form a Solid background for further learning on Linux. Explore our Videos below.</p>
        
		<?php
		foreach ($a as $filename){
			if ($filename == "." || $filename == ".." || substr($filename,0,2) != "wk"){
				continue;
			}			
			$segments = explode("-",$filename);
			$period = substr($segments[0],2);
			
			$div = explode("d",$period);
			$wk = $div[0];
			$d = $div[1];

			$week[$wk][$d] = $segments[2];

		}

		foreach ($week as $k=>$v){
			echo "<h3>Week $k</h3>";
			echo "<ul class=\"list-unstyled\">";
			foreach ($v as $day=>$title){
				echo "<li> <a href=\"linuxmini/wk".$k."d".$day."-minilinux-".$title."\" target=\"_blank\">Day $day ($title)</a></li>";
			}
			echo "</ul>";
		}
		?>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
