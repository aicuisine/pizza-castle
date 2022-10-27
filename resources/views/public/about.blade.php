@extends('layouts.public')

@section('content')
<!-- Home -->

<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">The Venue is</div>
							<div class="home_title"><h1>About us</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('public/partials/introduction')
	@include('public/partials/chefs')
	@include('public/partials/testimonials')
	@include('public/partials/reservation')
	
@endsection
