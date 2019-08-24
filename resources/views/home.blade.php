@extends('template.main')

@section('page_title') Home @endsection

@section('content')
	<div class="home">
		<div class="header">
			<div class="info-header">
				<h1 class="titul-header">Buy. Sell. Trade.</h1>
				<h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum omnis, molestias quo natus consectetur sint quibusdam rem? Deserunt</h5>
				<button class="btn btn-outline-light">Sing In</button>
				<button class="btn btn-outline-light">Register</button>
			</div>
		</div>
		<div class="container">
			<div class="text-center mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum omnis, molestias quo natus consectetur <a href="#">sint quibusdam rem? Deserunt</a></div>
		</div>

		<section class="card container mt-5 markets section">
			<h2 class="titul"><b>Markets</b></h2>
		</section>

		<section class="container mt-3 why-us section">
			<h2 class="titul c-primary mb-5">Why Our Clients Choose Us</h2>
			<div class="row">
				<div class="col-sm-12 col-md-4 mb-4 values">
					<img src="/images/responsability.svg" alt="responsability" class="img-fluid">
					<h4 class="text-center mt-2"><b>Responsability</b></h4>
				</div>
				<div class="col-sm-12 col-md-4 mb-4 values">
					<img src="/images/commitment.svg" alt="commitment" class="img-fluid">
					<h4 class="text-center mt-2"><b>Commitment</b></h4>
				</div>
				<div class="col-sm-12 col-md-4 mb-4 values">
					<img src="/images/trust.svg" alt="trust" class="img-fluid">
					<h4 class="text-center mt-2"><b>Trust</b></h4>
				</div>
			</div>
		</section>

		<section class="container my-3 our-coin section">
			<h2 class="titul c-secundary">Bitfusion Coin</h2>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<p><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatem facilis beatae atque, distinctio corporis natus unde.</b></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum cupiditate officiis temporibus quisquam reiciendis</p>
					<a href="#" class="btn">See more</a>
				</div>
			</div>
		</section>
	</div>
@endsection
