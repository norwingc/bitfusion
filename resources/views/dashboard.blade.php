@extends('template.main')

@section('page_title') Dashboard @endsection

@section('content')
	<div class="dashboard">
		<section class="welcome card section">
			<h2 class="titul c-secundary">Welcome to your Dashboard</h2>
			<p class="text-right">
				Pereira, Colombia <br>
				Your current IP Adress: <span class="c-primary">{{ $_SERVER['REMOTE_ADDR'] }}</span>
			</p>
		</section>

		<section class="container">
			<div class="row mt-5">
				<div class="col-xs-12 col-md-6 mb-4 mb-md-0">
					<div class="accordion" id="accordionBalanse">
						<div class="card">
							<div class="card-header bc-primary p-1" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link text-white btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseBalanse" aria-expanded="true" aria-controls="collapseBalanse">
										Balanse Details
										<span class="font-weight-bold float-right"><i class="fas fa-angle-up"></i></span>
									</button>
								</h2>
							</div>

							<div id="collapseBalanse" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionBalanse">
								<div class="card-body bc-logo">
									<div class="z-index-999">
										<a href="#" class="btn text-black bc-tertiary float-right">Wallet</a>
										<h1 class="c-primary">900.00 BTC</h1>
										<h5>90.000.000 COP</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="accordion" id="accordionNotification">
						<div class="card">
							<div class="card-header bc-secundary p-1" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link text-white btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseNotification" aria-expanded="true" aria-controls="collapseNotification">
										Notification
										<span class="font-weight-bold float-right"><i class="fas fa-angle-up"></i></span>
									</button>
								</h2>
							</div>

							<div id="collapseNotification" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionNotification">
							<div class="card-body" style="overflow: auto;max-height: 13vh;">
								<div style="height: 40vh">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque consectetur quis rerum molestias excepturi iusto, dignissimos ipsum aperiam, numquam deserunt porro impedit eligendi accusantium. Ipsum earum voluptatum rem mollitia laborum.
									Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum nisi, id deleniti ea soluta vitae, numquam dolorem quod sed animi nihil facere rem nesciunt blanditiis voluptates, maiores aliquid mollitia qui!
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="container">
			<div class="row mt-5">
				<div class="col-xs-12 col-md-4 mb-4 mb-md-0">
					<div class="accordion" id="accordionActivity">
						<div class="card">
							<div class="card-header p-1" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link c-primary btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseActivity" aria-expanded="true" aria-controls="collapseActivity">
										Activity
										<span class="font-weight-bold float-right"><i class="fas fa-angle-up"></i></span>
									</button>
								</h2>
							</div>

							<div id="collapseActivity" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionActivity">
							<div class="card-body">
								<div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 mb-4 mb-md-0">
					<div class="accordion" id="accordionAccountSecurity">
						<div class="card">
							<div class="card-header p-1" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link c-primary btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseAccountSecurity" aria-expanded="true" aria-controls="collapseAccountSecurity">
										Increase your account security
										<span class="font-weight-bold float-right"><i class="fas fa-angle-up"></i></span>
									</button>
								</h2>
							</div>

							<div id="collapseAccountSecurity" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionAccountSecurity">
							<div class="card-body">
								<div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4">
					<div class="accordion" id="accordionVerifiAccount">
						<div class="card">
							<div class="card-header p-1" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link c-primary btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseVerifiAccount" aria-expanded="true" aria-controls="collapseVerifiAccount">
										Verify your account
										<span class="font-weight-bold float-right"><i class="fas fa-angle-up"></i></span>
									</button>
								</h2>
							</div>

							<div id="collapseVerifiAccount" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionVerifiAccount">
							<div class="card-body">
								<div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="container">
			<div class="row mt-5">
				<div class="col-xs-12 col-md-6 mb-4 mb-md-0">
					<div class="accordion" id="accordionOpenOrders">
						<div class="card">
							<div class="card-header p-1" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link c-secundary btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOpenOrders" aria-expanded="true" aria-controls="collapseOpenOrders">
										Open Orders
										<span class="font-weight-bold float-right"><i class="fas fa-angle-up"></i></span>
									</button>
								</h2>
							</div>

							<div id="collapseOpenOrders" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOpenOrders">
								<div class="card-body">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 mb-4 mb-md-0">
					<div class="accordion" id="accordionBitfusionCoin">
						<div class="card">
							<div class="card-header p-1" id="headingOne">
								<h2 class="mb-0">
									<button class="btn btn-link c-secundary btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseBitfusionCoin" aria-expanded="true" aria-controls="collapseBitfusionCoin">
										Bitfusion Coin
										<span class="font-weight-bold float-right"><i class="fas fa-angle-up"></i></span>
									</button>
								</h2>
							</div>

							<div id="collapseBitfusionCoin" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionBitfusionCoin">
								<div class="card-body promotion-coin">
									<h5>Receive a</h5>
									<h2 class="c-secundary font-weight-bold">Special Discount</h2>
									<h5>for Each Transaction</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="bc-primary buy-cell mt-4">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h2 class="text-white font-weight-bold">
						<span class="c-tertiary">Buy</span> and <span class="c-tertiary">Sell</span> <br>
						Cryptocurrency
					</h2>
					<p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, tempora excepturi! Odio odit voluptates praesentium</p>
				</div>
				<div class="col-sm-12 col-md-6 buy-sell-coin c-primary text-center">
					<div class="buy">
						<i class="fas fa-angle-double-down"></i> <br>
						<b>Buy</b> Coin
					</div>
					<div class="sell">
						<i class="fas fa-angle-double-up"></i> <br>
						<b>Sell</b> Coin
					</div>
				</div>
			</div>
		</section>

		<section class="bg-light ticket">
			<div class="information">
				<img src="/images/ticket-sos.svg" alt="">
				<div>
					<h2 class="c-secundary">Having Trouble?</h2>
					<p>Don't worry, we can give yoy some extra help</p>
				</div>
				<a href="#" class="btn bc-secundary text-white">Open support ticket</a>
			</div>
		</section>
	</div>
@endsection
