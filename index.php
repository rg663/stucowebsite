<html>
<head>
	<title>confirmation</title>
	<link rel="shortcut icon" type="image/jpg" href="/images/favicon.png">
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
	 crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>

<div class="topnav" id="searchbar">
<div class="search-container">
	<form action="search.php" id="searching">
		<input type="text" placeholder="search website" name="search" id="query">
		<button type="submit" class="button" id="searchbutton">go</button>
		</form>
</div>
	<script>
		const f = document.getElementById('searching');
		const q = document.getElementById('query');
		const google = 'https://www.google.com/search?q=site%3A+';
		const site = 'https://cpphsstudentcouncil.rg663.repl.co/';
		function submitted(event) {
			event.preventDefault();
			const url = google + site + '+' + q.value;
			const win = window.open(url, '_blank');
			win.focus();
		}
		f.addEventListener('submit', submitted);
</script>
</div>
		
<body>
	<header class="container">
		<div class="row">
			<p class="col-sm-4"><a class="nav-link" href="../index.html" id="backhome">back to #hawknation</a></p>
			<nav class="col-sm-8 text-center">
				<p class="nav-item"> <a class="nav-link" href="upcomingevents.html"> upcoming events &#9734 </a></p>
				<p class="nav-item"> <a class="nav-link" href="photos.html"> photos &#9734</a></p>
				<p class="nav-item"> <a class="nav-link" href="spiritwear.html"> spiritwear &#9734</a></p>
				<p class="nav-item"> <a class="nav-link" href="ourteam.html"> our team &#9734</a></p>
				<p class="nav-item"> <a class="nav-link" href="jointheteam.html"> join the team &#9734</a></p>
				<p class="nav-item"> <a class="nav-link" href="aboutus.html"> about us &#9734</a></p>
			</nav>
		</div>
	</header>
	
<div class="container">
	<h1>thank you for your submission! we will email you shortly with next steps!</h1>
	<a class="btn btn-primary" href="../index.html" role="button">back to main page</a>
</div>

<br>
<div class="container" id="bread">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="../index.html">home</a></li>
			<li class="breadcrumb-item"><a href="index.php">confirmation</a></li>
		</ol>
	</nav>
</div>
</html>