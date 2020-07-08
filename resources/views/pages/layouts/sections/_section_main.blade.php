@foreach($main as $item)
	<div class="section-main" id="main">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-4 order-lg-1 order-2 mt70">
					<h1 class="title-main mb30">{{ $item->title }}</h1>
					<div class="text-area mb40">
						{!! $item->text !!}
					</div>
					<a href="javascript:;" class="btn-site"></a>
				</div>
				<div class="image-main" style="background-image: url('{{ asset('storage/main/' . $item->image) }}');">
					<img src="{{ asset('storage/main/' . $item->image) }}" alt="Image main" class="sr-only">
				</div>
			</div>
		</div>
	</div>
@endforeach