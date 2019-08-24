<nav class="navbar navbar-expand-lg main-nav {{ $isHome ? 'isHome' : ''  }}">
	<a class="navbar-brand" href="{{ route('home') }}"><img src="{{ $isHome ? '/images/logo-white.svg' : '/images/logo-full-color.svg' }}" alt="logo" class="logo"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon {{ $isHome ? 'isHome' : ''  }}"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto {{ $isHome ? 'isHome' : ''  }}">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Market</a>
			</li>

				<li class="nav-item">
					<a class="nav-link" href="#">Coin</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Wallet</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Setting</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Coin</a>
				</li>

				<li class="nav-item singIn-button">
					<a class="nav-link singIn" href="#">Sing In</a>
				</li>
				<li class="nav-item singUp-button">
					<a class="nav-link singUp" href="#">Sing Up</a>
				</li>

		</ul>
	</div>
</nav>
