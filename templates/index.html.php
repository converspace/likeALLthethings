<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Like ALL the things?!</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<style>

		.alone { margin-top: 20px; }
		.tab-pane { padding: 0 20px; }
		.activity-url { margin-top: -10px; }
		.activity-info { margin-top: -8px; }

	</style>

</head>
<body>

<div class="navbar navbar-static-top">
	<div class="navbar-inner">
		<a class="brand" href="#">Like ALL the things?!</a>
		<ul class="nav pull-right">
			<li><a href="#">Login</a></li>
		</ul>
	</div>
</div>

<div class="container alone">
	<div class="row">
		<div class="span3">
			<div class="about">
				<img src="assets/img/222x222.gif" class="img-polaroid">
				<div class="caption">
					<h3>Sandeep Shetty</h3>
				</div>
				<hr />
			</div>
		</div>
		<div class="span9">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#mylikes" data-toggle="tab">My Likes</a>
				</li>
				<li>
					<a href="#likesbypeopleifollow" data-toggle="tab">Likes By People I Follow</a>
				</li>
			</ul>

            <div class="tab-content">
                <div id="mylikes" class="tab-pane active">
					<div class="activity-object">
						<p>
							<h4><a href="http://upon2020.com/blog/2012/08/why-decentralized-software-is-10x-harder/">Why Decentralized Software Is 10x Harder | Upon 2020</a></h4>
						</p>
						<p class="activity-url"><small><a class="muted" href="http://upon2020.com/blog/2012/08/why-decentralized-software-is-10x-harder/">http://upon2020.com/blog/2012/08/why-decentralized-software-is-10x-harder/</a></small></p>
						<p><i class="icon-tags"></i> <a href="#">fsw</a>, <a href="#">FederatedSocialWeb</a></p>
						<p class="activity-info"><i class="icon-time"></i>  <small>2 hours ago</small> &nbsp;&nbsp; <small><a href="#">Edit</a></small> &nbsp; <small><a href="#">Delete</a></small></p>
					</div>

					<hr>

					<div class="activity-object">
						<p>
							<h4><a href="http://www.theatlantic.com/technology/archive/2012/10/dark-social-we-have-the-whole-history-of-the-web-wrong/263523/">Dark Social: We Have the Whole History of the Web Wrong - Alexis C. Madrigal - The Atlantic</a></h4>
						</p>
						<p class="activity-url"><small><a class="muted" href="http://www.theatlantic.com/technology/archive/2012/10/dark-social-we-have-the-whole-history-of-the-web-wrong/263523/">http://www.theatlantic.com/technology/archive/2012/10/dark-social-we-have-the-whole-history-of-the-web-wrong/263523/</a></small></p>
						<p><i class="icon-tags"></i>  <a href="#">Facebook</a>, <a href="#">fb</a>, <a href="#">fsw</a>, <a href="#">FederatedSocialWeb</a></p>
						<p class="activity-info"><i class="icon-time"></i>  <small>4 hours ago</small> &nbsp;&nbsp; <small><a href="#">Edit</a></small> &nbsp; <small><a href="#">Delete</a></small></p>
					</div>

					<hr>

				</div>


                <div id="likesbypeopleifollow" class="tab-pane fade">
					Coming Soon...
				</div>
            </div>
		</div>
	</div>
</div>

<script src="assets/js/jquery-1.8.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>