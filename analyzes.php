<!DOCTYPE html>
<html lang="en">
	<head>
	<?php include 'components/head.php'; ?>
	</head>
	<body>
		<div class="image"><img class="full" src="content/banner.png" alt=""></div>
		<header>
			<?php include 'components/elements/topbar.php'; ?>
			<?php include 'components/elements/navbar.php'; ?>
		</header>
		<main>
			
			<section class="pt2 pb2">
				<div class="container">
					<div class="row">

						<div class="col-md-8">
							<h5>Analyses</h5>
							<div class="text-subline mb1"></div>
							
							<div class="articles mb2">
								<?php for($i=0;$i<5;$i++): ?>
								<article class="article-md">
									<div class="row">
										<div class="col-md-4">
											<div class="image"><img class="full" src="http://placehold.it/260x180" alt=""></div>
											<div class="mb1 show-md-under"></div>
										</div>
										<div class="col-md-8">
											<div class="h4">Brexit: les Européens ont la main</div>
											<div class="mark mb1">
												<span><i class="fa fa-clock-o"></i> <time>14 may 2017 07:00 PM</time></span>
												<span class="ml1"><i class="fa fa-user-o"></i> Michel Girardin</span>
											</div>
											<p>Depuis que David Cameron a décidé de renégocier les termes du contrat d’adhésion à l’Union européenne, les britanniques se sont systém atiquement cassés les dents.</p>
										</div>
									</div>
								</article>
								<?php endfor; ?>
							</div>

							<ul class="pagination mb2">
								<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
								<li><a href="#">1</a></li>
								<li class="active"><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">15</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>

						</div>

						<div class="col-md-4 aside">
							
							<div class="image">
								<img src="content/adv-aside.png" alt="" class="full">
							</div>

							<div class="mt2"></div>

							<article class="article-big last">
								<div class="image">
									<img src="http://placehold.it/400x240" alt="">
									<div class="tag up">Nonre selection</div>
								</div>
								<div class="h4 mt1 primary">Marty Flanagan, CEO D`INVESCO</div>
								<div class="h3 mt1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
								<div class="mark">
									<span><i class="fa fa-clock-o"></i> <time>14 may 2017 07:00 PM</time></span>
								</div>
							</article>

							<div class="mt2"></div>

							<h5>Interviews</h5>
							<div class="text-subline mb1"></div>

							<article class="article-small last">
								<div class="row thin">
									<div class="col-xs-9">
										<div class="h5 bold primary-light mt1">Michel Girardin</div>
										<div class="h4 mt">Brexit: les Européens ont la main</div>
									</div>
									<div class="col-xs-3">
										<div class="image"><img src="http://placehold.it/80x80" alt=""></div>
									</div>
								</div>
							</article>

							<div class="mt2"></div>

							<div class="box bright-bg popular">
								<h5 class="">More Popular</h5>
								<div class="text-subline mb1"></div>

								<h6 class="orange">Money</h6>
								<p>Swiss politician Gössi do eiusmod magna aliqua</p>

								<div class="divider mt1 mb1"></div>

								<h6 class="orange">Economics</h6>
								<p>Swiss politician do eiusmod magna aliqua amet consectetur</p>

								<div class="divider mt1 mb1"></div>

								<h6 class="orange">People</h6>
								<p>Swiss politician Gössi do eiusmod magna aliqua</p>
							</div>
							<div class="divider-primary"></div>


						</div>

					</div>
				</div>
			</section>

		</main>
	
		<footer>
			<?php include 'components/footer.php'; ?>
		</footer>
		<?php include 'components/scripts.php'; ?>
	</body>
</html>