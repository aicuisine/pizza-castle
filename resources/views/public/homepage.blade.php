@extends('layouts.public')

@section('content')
<!-- Home -->

<div class="home">
	<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/home.jpg" data-speed="0.8"></div>
	<div class="home_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_subtitle page_subtitle">The Venue is</div>
						<div class="home_title"><h1>An Extraordinery Experience</h1></div>
						<div class="home_text ml-auto mr-auto">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll_icon"></div>
</div>

@include('public/partials/introduction')
@include('public/partials/video')
@include('public/partials/signature-dish')
@include('public/partials/menu')
@include('public/partials/reservation')

@endsection