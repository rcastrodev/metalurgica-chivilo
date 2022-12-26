@extends('paginas.partials.app')
@section('content')
@isset($section1s)
	@if (count($section1s))
		<div id="sliderHero" class="carousel slide position-relative" data-bs-ride="carousel">
			<div class="carousel-indicators">
				@foreach ($section1s as $k => $v)
					<button type="button" data-bs-target="#sliderHero" data-bs-slide-to="{{$k}}" class="@if(!$k) active @endif"  aria-current="true" aria-label="Slide {{$k}}"></button>
				@endforeach
			</div>
			<div class="carousel-inner">
				@foreach ($section1s as $k => $v)
					<div class="carousel-item @if(!$k) active @endif">
						<img src="{{ asset($v->image) }}" class="d-block w-100">
						<div class="carousel-caption d-none d-md-block text-start">
							<h2 class="font-size-45 text-white">{{ $v->content_1 }}</h2>
							<p class="text-white font-size-20">{{ $v->content_2 }}</p>
						</div>
					</div>
				@endforeach
			</div>
		</div>		
	@endif
@endisset
@isset($services)
	@if (count($services))
		<section class="service py-sm-2 py-md-5" style="background-color: #c4c4c429">
			<div class="container mx-auto d-flex justify-content-between container-border-title mb-4">
				<span></span>
				<h2 class="text-secundary border-title text-center font-size-30 position-relative">NUESTROS SERVICIOS</h2>
				<span></span>
			</div>
			<div class="container mx-auto py-sm-2 py-md-4">
				<div class="d-flex justify-content-between flex-wrap">
					@foreach ($services as $s)
						@if (Storage::disk('custom')->exists($s->content_3))
							<div class="">
								<div class="">
									<img src="{{ asset($s->content_3) }}" class="img-fluid" width="52" height="52" style="border: 1px solid #707070; padding: 10px; box-sizing: content-box; border-radius: 100%;
									display: block; margin: auto; margin-bottom: 20px;">
								</div>
								<h5 class="text-secundary font-size-20">{{ $s->content_1 }}</h5>
							</div>				
						@endif
					@endforeach
				</div>
			</div>
		</section>
	@endif
@endisset
@isset($section2)
	<section id="section2" class="position-relative">
		<div class="bg-white">
			<div class="container mx-auto">
				<div class="row">
					<div class="col-md-2 d-sm-none d-md-block"></div>
					<div class="col-sm-12 col-md-5 m-0 p-4"><h2 class="text-primary font-size-30 text-sm-center text-md-end mb-0">{{ $section2->content_1 }}</h2></div>
				</div>
			</div>
		</div>
		<div class="bg-blue">
			<div class="container mx-auto">
				<div class="row">
					<div class="col-md-2 d-sm-none d-md-block"></div>
					<div class="col-sm-12 col-md-5 m-0 text-white text-sm-center text-md-end p-sm-2 p-md-5">{!! $section2->content_2 !!}</div>
					@if (Storage::disk('custom')->exists($section2->image))
						<div class="col-sm-12 col-md-5 m-0 text-white text-end p-sm-2 p-md5">
							<img src="{{asset($section2->image)}}" class="img-fluid img-section2">
						</div>
					@endif
				</div>
			</div>
		</div>
	</section>
@endisset
@isset($section3)
	<section id="section3" class="position-relative">
		<div class="container mx-auto">
			<div class="row">
				<div class="col-sm-12 col-md-5 order-md-1 order-sm-2 mb-sm-3 mb-md-0">
					@if (Storage::disk('custom')->exists($section3->image))
						<img src="{{asset($section3->image)}}" class="img-fluid img-section3">
					@endif
				</div>
				<div class="col-sm-12 col-md-7 m-0 p-4 order-md-2 order-sm-1">
					<div class="py-sm-2 py-md-5 content-section3">
						<h2 class="text-primary font-size-21">{{ $section3->content_1 }}</h2>
						<div class="text-primary">{!! $section3->content_2 !!}</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endisset
@isset($section4)
	<section id="section4" class="d-flex align-items-center py-sm-3 p-md-0" style="background-image: url({{asset($section4->image)}});">
		<div class="container mx-auto" style="overflow: visible;">
			<h3 class="text-white font-size-30" style="font-weight: 400; max-width: 450px;">{{ $section4->content_1 }}</h3>
			<a href="{{ route('contacto') }}" class="text-white text-decoration-none" style="border: 3px solid white; padding: 10px 45px; margin-top: 10px; display: inline-block;">Consultar</a>
		</div>
	</section>
@endisset
@endsection

