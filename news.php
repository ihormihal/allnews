<!DOCTYPE html>
<html lang="en">
	<head>
	<?php include 'components/head.php'; ?>
	</head>
	<body>
		<a href="#" class="image"><img class="full" src="content/banner.png" alt=""></a>
		<header>
			<?php include 'components/elements/topbar.php'; ?>
			<?php include 'components/elements/navbar.php'; ?>
		</header>
		<main>
			
			<section class="pt2 pb2">
				<div class="container">
					<div class="row">

						<div class="col-md-8">
							<a href="#" class="h4 primary-red">News</a>
							<div class="text-subline mb1"></div>
							
							<div class="articles mb2">
								<?php for($i=0;$i<10;$i++): ?>
								<article class="article-md">
									<div class="row">
										<div class="col-md-4">
											<a href="#" class="image"><img class="full" src="http://placehold.it/260x180" alt=""></a>
											<div class="mb1 show-md-under"></div>
										</div>
										<div class="col-md-8">
											<a href="#" class="h4">Le taux technique est une bombe à retardement pour les caisses publiques</a>
											<div class="mark mb1">
												<span><i class="fa fa-clock-o"></i> <time>14 may 2017 07:00 PM</time></span>
												<span class="ml1"><i class="fa fa-user-o"></i> by Allnews</span>
											</div>
											<div class="tags">
												<a href="#">tagline1</a>
												<a href="#">tagline2</a>
												<a href="#">tagline3</a>
											</div>
											<p>L’adaptation de ce paramètre au niveau moyen actuel risque de déclencher de nouvelles opérations.</p>
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
									<a href="#"><img src="http://placehold.it/400x240" alt=""></a>
									<a href="#" class="tag up">Nonre selection</a>
								</div>
								<div class="h4 mt1 primary">Marty Flanagan, CEO D`INVESCO</div>
								<div class="h3 mt1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</div>
								<div class="mark">
									<span><i class="fa fa-clock-o"></i> <time>14 may 2017 07:00 PM</time></span>
								</div>
							</article>

							<div class="mt2"></div>

							<h5 class="">Analyses</h5>
							<div class="text-subline mb1"></div>

							<article class="article-small last">
								<div class="row thin">
									<div class="col-xs-9">
										<div class="h5 bold primary-light mt1">Michel Girardin</div>
										<a href="#" class="h4 mt">Brexit: les Européens ont la main</a>
									</div>
									<div class="col-xs-3">
										<a href="#" class="image"><img src="http://placehold.it/80x80" alt=""></a>
									</div>
								</div>
							</article>

							<div class="mt2"></div>

							<div class="box bright-bg popular">
								<h5 class="">More Popular</h5>
								<div class="text-subline mb1"></div>
								
								<a href="#">
									<h6 class="orange">Money</h6>
									<p>Swiss politician Gössi do eiusmod magna aliqua</p>
								</a>
								

								<div class="divider mt1 mb1"></div>
								
								<a href="#">
									<h6 class="orange">Economics</h6>
									<p>Swiss politician do eiusmod magna aliqua amet consectetur</p>
								</a>

								<div class="divider mt1 mb1"></div>
								
								<a href="#">
									<h6 class="orange">People</h6>
									<p>Swiss politician Gössi do eiusmod magna aliqua</p>
								</a>
							</div>
							<div class="divider-primary"></div>

							<div class="mt2"></div>

							<h5 class="">Finance</h5>
							<div class="text-subline mb1"></div>
							
							<ul class="collection links">
								<li><a href="#">News</a></li>
								<li><a href="#">Analyses</a></li>
								<li><a href="#">Interviews</a></li>
								<li><a href="#">Marchés</a></li>
								<li><a href="#">Produits</a></li>
								<li><a href="#">Règlementation</a></li>
								<li><a href="#">Trajectoires</a></li>
								<li><a href="#">Agenda</a></li>
							</ul>

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