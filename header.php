<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Пятёрочка</title>

	<link rel="apple-touch-icon" sizes="57x57" href="/dist/images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/dist/images/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/dist/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/dist/images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/dist/images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/dist/images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/dist/images/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/dist/images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/dist/images/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/dist/images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/dist/images/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/dist/images/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/dist/images/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/dist/images/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/dist/images/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-TileImage" content="/dist/images/mstile-144x144.png">
	<meta name="msapplication-config" content="/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	
	<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap-theme.css">
	<link rel="stylesheet" href="/dist/css/common.css">

	<script src="/bower_components/jQuery/dist/jquery.min.js"></script>
	<script src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
	<script src="/bower_components/wowjs/dist/wow.min.js"></script>
	<script src="/dist/js/main.js"></script>
</head>
<body>
	<header>
		<div class="topHead">
			<div class="wrapper clearfix">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar-brand spriteSmith visible-xs" href="/">
							<span class="icon-headLogo-2"></span>
						</a>
						<div class="actionWrapper clearfix">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<form class="navbar-form navbar-left spriteSmith visible-xs" role="search">
								<div class="form-group no-margin">
									<input type="text" id="search-1" class="form-control" placeholder="Поиск">
									<label for="search-1">
										<span class="glyphicon icon-magnifer-lg"></span>
									</label>
									<button type="submit">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</div>
							</form>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-default" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="dropdown location">
								<a href="#" class="dropdown-toggle spriteSmith" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="glyphicon icon-baloon hidden-xs" aria-hidden="true"></span>
									Омск
									<span class="glyphicon arrow hidden-xs"></span>
									<span class="caret visible-xs-inline-block"></span>
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown-header">
										Вы находитесь:
									</li>
									<li>
										<a href="#">
											Москва
										</a>
									</li>
									<li>
										<a href="#">
											Санкт-Петербург
										</a>
									</li>
									<li role="separator" class="divider"></li>
									<li class="active">
										<a href="#">
											Омск
										</a>
									</li>
									<li>
										<a href="#">
											Набережные Челны
										</a>
									</li>
									<li>
										<a href="#">
											Тагил
										</a>
									</li>
									<li>
										<a href="#">
											Владивосток
										</a>
									</li>
									<li>
										<a href="#">
											Красноярск
										</a>
									</li>
									<li>
										<a href="#">
											Новосибирск
										</a>
									</li>
									<li>
										<a href="#">
											Иркутск
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									О компании
								</a>
							</li>
							<li>
								<a href="#">
									Акции
								</a>
							</li>
							<li>
								<a href="#">
									Магазины
								</a>
							</li>
							<li>
								<a href="#">
									Новости
								</a>
							</li>
							<li>
								<a href="#">
									Товары
								</a>
							</li>
							<li>
								<a href="#">
									Напишите нам
								</a>
							</li>
							<li class="phone">
								<a href="tel:+78005555505">
									8-800-555-55-05
								</a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
		<div class="mainHead">
			<div class="wrapper clearfix">
				<a href="/" class="logo spriteSmith">
					<span class="inline-block icon-headLogo"></span>
				</a>
				<button class="authorization btn-custom btn-custom-default">
					Войти
				</button>
				<nav>
					<ul class="clearfix">
						<li>
							<a href="#">
								Покупателям
							</a>
						</li>
						<li>
							<a href="#">
								Партнерам
							</a>
						</li>
						<li>
							<a href="#">
								Карьера
							</a>
						</li>
					</ul>
				</nav>
				<form class="search hidden-xs" role="search">
					<div class="form-group no-margin spriteSmith">
						<input type="text" id="search-2" class="form-control" placeholder="Поиск">
						<label for="search-2">
							<span class="glyphicon icon-magnifer"></span>
						</label>
						<button type="submit">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</div>
				</form>
			</div>
		</div>
	</header>