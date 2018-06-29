<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="xampp/xampp.css" rel="stylesheet" type="text/css">
<title>XAMPP</title>
<base target="_blank"/>
<style>
.projectList {
	padding: 4px 0;
	list-style: none;
	min-height: 100vh
}
.projectList a::before {
	font-family: 'FontAwesome';
    content: "\f07b";
	display: inline-block;
	background: #2F333D;
	color: #ffdd57;
	width: 50px;
	padding: 15px;
	margin-right: 10px;
	border: 1px solid #2F333D;
	text-align: center;
	line-height: 0;
}
.projectList a:hover::before{
	content: "\f07c";	
}
.isBox {
	padding: 4px 8px;
	display: block;
	margin-bottom: 5px;
}
#quote {
	color: #1c1f26;
	text-shadow: 1px 2px 3px #3f4451;
	font-size: 3.5vmax
}
.hero-body,
.quoteContent {
	position: relative;
}
#quote_image {
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	margin-left: auto;
	margin-right: auto;
	opacity: 0.2;
	height: 650px;
}
.navbar {
	background-color: #3C414D
}
.projectList a,
.navbar-item,
.navbar-link,
.navbar-dropdown a.navbar-item:hover,
#quote_by {
	color: #7384ad;
}
body,
.navbar-dropdown a.navbar-item:hover {
	background-color: #2f333d;
}
.navbar-link.is-active,
.navbar-link:hover,
a.navbar-item.is-active,
a.navbar-item:hover,
.navbar-item.has-dropdown.is-active .navbar-link,
.navbar-item.has-dropdown:hover .navbar-link {
	color: #6984a1;
	text-shadow: 0 0 0 transparent;
}
.navbar-item.has-dropdown-up .navbar-dropdown {
	border-bottom: 2px solid #282c34;
}
.navbar-dropdown a.navbar-item {
	color: #fff
}
.navbar-dropdown,
.projectList,
.navbar-link.is-active,
.navbar-link:hover,
a.navbar-item.is-active,
a.navbar-item:hover,
.navbar-item.has-dropdown.is-active .navbar-link,
.navbar-item.has-dropdown:hover .navbar-link {
	background-color: #282c34;
}
</style>
</head>
<body>
<?php
	$htdocs = opendir(".");
	$list= '';

	while ($project = readdir($htdocs)) 
	{
	if (is_dir($project) && ($project != "..") && ($project != ".")) 
	$list .= '<a class="isBox" href="'.$project.'">'.$project.'</a>';
	}

	closedir($htdocs);

	if (!isset($list))
	$list= "No list";
?>
	
<div class="custom-xampp">
	<div class="columns">
		<div class="column is-two-thirds">
			<section class="hero is-medium is-large is-bold">
				<div class="hero-body has-text-centered image">
					<img src='' id='quote_image' class="img-reponsive">
					<div class="quoteContent">
						<h1 id='quote' class='title'></h1>
						<h4 id='quote_by' class='subtitle'></h4>
					</div>
				</div>
			</section>
		</div>
		<div class="column">
			<div class="projectList">
				<?php echo $list ?>
			</div>
		</div>
	</div>
</div>

<nav id="navbarBottom" class="navbar is-fixed-bottom has-shadow">
  <div class="navbar-brand">
    <a class="navbar-item" href="/dashboard">
      <img src="assets/xampp_logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="25">
    </a>
    <div class="navbar-burger burger" data-target="localhostNavbar">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="localhostNavbar" class="navbar-menu">
    <div class="navbar-start">
			<a class="navbar-item" href="/phpmyadmin/">
			phpMyAdmin
			</a>
			
			<div class="navbar-item has-dropdown has-dropdown-up is-hoverable">
				<a class="navbar-link" href="#!">
				Frameworks
				</a>
				<div class="navbar-dropdown">
					<div class="columns"> 
						<div class="column">
							<div class="navbar-item">
							Top Backend Frameworks
							</div>
							<hr class="navbar-divider">
							<a class="navbar-item" href="https://github.com/django/django/">
							Django
							</a>
							<a class="navbar-item" href="https://github.com/laravel/laravel/">
							Laravel
							</a>
							<a class="navbar-item" href="https://github.com/rails/rails/">
							Ruby on Rails
							</a>
							<a class="navbar-item" href="https://github.com/expressjs/express/">
							Express
							</a>
							<a class="navbar-item" href="https://github.com/symfony/symfony/">
							Symfony 
							</a>
						</div>
						<div class="column">
							<div class="navbar-item">
							Top CSS Frameworks
							</div>
							<hr class="navbar-divider">
							<a class="navbar-item" href="https://github.com/twbs/bootstrap/">
							Bootstrap
							</a>
							<a class="navbar-item" href="https://github.com/zurb/foundation-sites/">
							Foundation
							</a>
							<a class="navbar-item" href="https://github.com/Dogfalo/materialize/">
							Materialize
							</a>
							<a class="navbar-item" href="https://github.com/jgthms/bulma/">
							Bulma
							</a>
							<a class="navbar-item" href="https://github.com/uikit/uikit/">
							Ulkit
							</a>
						</div>
						<div class="column">
							<div class="navbar-item">
							Top JS Frameworks
							</div>
							<hr class="navbar-divider">
							<a class="navbar-item" href="https://github.com/angular/angular/">
							Angular
							</a>
							<a class="navbar-item" href="https://github.com/vuejs/vue/">
							Vuejs
							</a>
							<a class="navbar-item" href="https://github.com/facebook/react/">
							React
							</a>
							<a class="navbar-item" href="https://github.com/meteor/meteor/">
							Meteor
							</a>
							</a>
							<a class="navbar-item" href="https://github.com/emberjs/ember.js/">
							EmberJS
							</a>
						</div>
						<div class="column">
							<div class="navbar-item">
							Environments & Package Manager
							</div>
							<hr class="navbar-divider">
							<a class="navbar-item" href="/dashboard/phpinfo.php">
							Composer
							</a>
							<a class="navbar-item" href="https://nodejs.org/en/">
							Node js
							</a>
							<a class="navbar-item" href="https://rubygems.org/">
							Ruby
							</a>
							<a class="navbar-item" href="https://brew.sh/">
							Homebrew
							</a>
							<p class="navbar-item" href="https://bulma.io/documentation/form/general/">
							<a href="https://pip.pypa.io/en/stable/">PIP</a> / 
							<a href="https://conda.io/docs/">Conda</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			

			<div class="navbar-item has-dropdown has-dropdown-up is-hoverable">
				<a class="navbar-link" href="#!">
				Docs
				</a>
				<div class="navbar-dropdown">
					<a class="navbar-item" href="/dashboard/phpinfo.php">
					PHPInfo
					</a>
					<a class="navbar-item" href="https://bulma.io/documentation/form/general/">
					HOW-TO Guides
					</a>
					<a class="navbar-item" href="/dashboard/faq.html">
					FAQs
					</a>
					<a class="navbar-item is-active" href="/applications.html">
						Applications
					</a>
				</div>
			</div>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
		  	<a href="https://github.com/" class="button is-warning">
				<span class="icon">
				<i class="fa fa-github"></i>
				</span>
				<span>GitHub</span>
			</a>
          </p>
          <p class="control">
		  	<a href="https://bitbucket.org/" class="button is-info">
				<span class="icon">
				<i class="fa fa-bitbucket"></i>
				</span>
				<span>Bitbucket</span>
			</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>

<script>
var quotes = [
	{quote : 'Help me, Obi-Wan Kenobi. You’re my only hope.', image_src: 'assets/leia.svg', quote_by: 'Leia Organa'},
	{quote : 'I find your lack of faith disturbing.', image_src: 'assets/darth-vader.svg', quote_by: 'Darth Vader'},
	{quote : 'The Force will be with you. Always.', image_src: 'assets/Obi-Wan_Kenobi.svg', quote_by: 'Obi-Wan Kenobi'},
	{quote : 'Why, you stuck-up, half-witted, scruffy-looking nerf herder!', image_src: 'assets/leia.svg', quote_by: 'Leia Organa'},
	{quote : 'Never tell me the odds!', image_src: 'assets/solo.svg', quote_by: 'Han Solo'},
	{quote : 'Do. Or do not. There is no try.', image_src: 'assets/yoda.svg', quote_by: 'Yoda'},
	{quote : 'There’s always a bigger fish.', image_src: '6262', quote_by: 'Qui-Gon Jinn'},
	{quote : 'I’m just a simple man trying to make my way in the universe.', image_src: '6262', quote_by: 'ango Fett'},
	// {quote : 'Power! Unlimited power!', image_src: '6262', quote_by: ''},
	{quote : 'Chewie, we’re home.', image_src: 'assets/solo.svg', quote_by: 'Han Solo'},
	{quote : "This Party's Over", image_src: 'assets/Samuel-L-Jackson.svg', quote_by: 'Samual L. Jackson'},
	{quote : "I Eat Every Motherf*ckin' Thing.", image_src: 'assets/Samuel-L-Jackson.svg', quote_by: 'Samual L. Jackson'},
	{quote : "Everyone Knows When You Make An Assumption, You Make An Ass Out Of 'U' And 'Umption.", image_src: 'assets/Samuel-L-Jackson.svg', quote_by: 'Samual L. Jackson'},
	{quote : "And You Will Know My Name Is The Lord When I Lay My Vengeance Upon Thee!", image_src: 'assets/Samuel-L-Jackson.svg', quote_by: 'Samual L. Jackson'},
	{quote : "English, Motherf*cker, Do You Speak It?", image_src: 'assets/Samuel-L-Jackson.svg', quote_by: 'Samual L. Jackson'},
	{quote : "I Have Had It With These Motherf*cking Snakes On This Motherf*cking Plane!", image_src: 'assets/Samuel-L-Jackson.svg', quote_by: 'Samual L. Jackson'},
	{quote : "If you have an opportunity to use your voice you should use it.", image_src: 'assets/Samuel-L-Jackson.svg', quote_by: 'Samual L. Jackson'},	
];
var item = quotes[Math.floor(Math.random()*quotes.length)];
document.getElementById('quote').innerHTML = item.quote;
document.getElementById('quote_by').innerHTML = "-- " + item.quote_by;
document.getElementById('quote_image').setAttribute('src', item.image_src);
</script>
</body>
</html>
