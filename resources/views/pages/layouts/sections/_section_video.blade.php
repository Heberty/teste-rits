<div class="green-block">
	
</div>
@foreach($video as $item)
	<section class="section-video" id="proin">
		<div class="container position-relative">
			<div class="row no-gutters d-flex justify-content-center d-lg-block">
				<div class="col-12 col-lg-8 body-video row">
					<div class="col-12 offset-lg-1 col-lg-6">
						<h1 class="title-video mb30">{{ $item->title}}</h1>
						<div class="text-area">
							{!! $item->text !!}
						</div>
					</div>
				</div>
			</div>
			<a data-fancybox href="https://www.youtube.com/watch?v={{ $item->embed }}" class="video-itself" style="background-image: url('https://img.youtube.com/vi/{{ $item->embed }}/maxresdefault.jpg')">
				<img src="{{ asset('images/icon-play.svg') }}" alt="" class="icon-play">
			</a>
		</div>
	</section>
@endforeach