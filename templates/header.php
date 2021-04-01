<?php include_once "app/app.php"; session_start();?>

<!doctype html>
<html lang="en">

<head>
	<link rel="icon" href="images/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mario Party Planner</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
	<link rel="stylesheet/less" type="text/css" href="styles/styles.less" />
	<script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>
</head>
<body>


<nav class="navbar navbar-expand-xl navbar-light bg-light">
  <a class="navbar-brand" href="./index.php"><img src="images/mario3d.gif" class="hrdspinr"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <?php if ($_SESSION){ 
			echo "	
					<li class='nav-item active'>
					<a class='nav-link' href='newevent.php'>Add New Event<span class='sr-only'></span></a>
					</li>
					<li class='nav-item active'>
					<a class='nav-link' href='myevents.php'>My Events<span class='sr-only'></span></a>
					</li>
					<li class='nav-item active'>
					<a class='nav-link' href='myparticipants.php'>My Participants<span class='sr-only'></span></a>
					</li>";
			}
	  ?>      
	  <?php if (($_SESSION) && (($_SESSION["org_id"]) == 4)){ 
			
			echo "	
					<li class='nav-item active'>
					<a class='nav-link' href='vieworganizers.php'>All Organizers<span class='sr-only'></span></a>
					</li>
					<li class='nav-item active'>
					<a class='nav-link' href='viewevents.php'>All Events<span class='sr-only'></span></a>
					</li>
					<li class='nav-item active'>
					<a class='nav-link' href='viewparticipants.php'>All Participants<span class='sr-only'></span></a>
					</li>";
			}
	  ?>
	  <?php if (!($_SESSION)){ 
			echo "	
					<li class='nav-item active'>
					<a class='nav-link' href='neworganizer.php'>Become An Organizer!<span class='sr-only'></span></a>
					</li>";
			}
	  ?>
    </ul>
	  <?php if (!($_SESSION)){ 
			echo "	
					<a href='login.php' style='margin-right:20px'><button class='btn btn-outline-dark my-2 my-sm-0'>Login </button> </a>";
			}
	  ?>
	  <?php if ($_SESSION){ 
		if($_SESSION['org_id'] != 22){
			echo "<form action='updateorganizer.php' method='post' onsubmit='return confirm(\"Are you sure you want to update your details?\");'>
					<input type='hidden' name='org_id' value='".$_SESSION['org_id']."'>
					<button style='border:none; background:none;'><img class='profthumb' src='".$_SESSION['img_url']."'></button>
				</form>";
		} else {
			echo "<img class='profthumb' src='".$_SESSION['img_url']."'>";
		}
		echo "<a href='./routes/logout.php' style='margin-right:20px'><button class='btn btn-outline-dark my-2 my-sm-0'>Logout</button> </a>";
	  }
	  ?>
	
    <form class="form-inline my-2 my-lg-0">
	    <div class="input-group">
			<input class="form-control" type="search"  name="searchedevent" placeholder="Track my event .." aria-label="Search">
			<div class="input-group-append">
				<button class="btn btn-outline-dark" type="submit" onclick='alert("Sorry, this feature is currently disabled!")'><i class="fab fa-searchengin"></i></button>
			</div>
		</div>		
	</form>
  </div>
</nav>