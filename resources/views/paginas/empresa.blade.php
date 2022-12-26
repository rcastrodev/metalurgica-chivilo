@extends('paginas.partials.app')
@section('content')
@if ($section1s)
	@if (count($section1s))
		<div id="sliderHeroEmpresa" class="carousel slide" data-bs-interval	="3000" data-bs-ride="carousel">
			<div class="carousel-indicators">
				@foreach ($section1s as $k => $v)
					<button type="button" data-bs-target="#sliderHeroEmpresa" data-bs-slide-to="{{$k}}" class="@if(!$k) active @endif"  aria-current="true" aria-label="Slide {{$k}}"></button>			
				@endforeach
			</div>
			<div class="carousel-inner" >
				@foreach ($section1s as $k => $v)
					<div class="carousel-item @if(!$k) active @endif" style="background-image: url({{ asset($v->image) }}); background-repeat: no-repeat; background-size: 100% 100%; background-position: center;">
					</div>			
				@endforeach
			</div>	
		</div>	
	@endif
@endif
@isset($section2)
	<section id="section_2" class="py-sm-3 py-md-5 mb-4">
		<div class="container py-sm-0 py-md-3">
			<div class="row">
				<div class="col-sm-12 col-md-6 mb-4">
					<h3 class="text-primary mb-5 font-size-20">{{ $section2->content_1}}</h3>
					<div class="mb-5 font-size-16 text-secundary">{!! $section2->content_2 !!}</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<img src="{{ asset($section2->image) }}" class="w-100 img-fluid" style="object-fit: cover;">
				</div>		
			</div>
		</div>
	</section>
@endisset
@isset($section3s)
	@if (count($section3s))
		<section id="section_3" class="py-sm-3 py-md-5 mb-4">
			<div class="container py-sm-0 py-md-3 d-flex flex-wrap justify-content-around">
				@foreach ($section3s as $s3)
					<div class="contenedor-caracteristicas">
						@if (Storage::disk('custom')->exists($s3->image))
							<img src="{{ asset($s3->image) }}" class="img-fluid d-block mx-auto mb-3" width="52" height="52">
						@else
							<div class="" style="height: 52px;"></div>
						@endif
						<h5 class="text-center text-secundary font-size-16 mb-3">{{ $s3->content_1 }}</h5>
						<div class="text-center text-secundary font-size-14">{!! $s3->content_2 !!}</div>
					</div>
				@endforeach
			</div>
		</section>
	@endif
@endisset
@endsection
