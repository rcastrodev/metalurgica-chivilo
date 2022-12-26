<footer class="py-sm-3 py-md-5 font-size-15 bg-blue text-sm-center text-md-start position-relative" style="overflow: hidden;">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-12 col-md-3 d-sm-none d-md-block">
                <img src="{{ asset('images/data/logo_footer_fondo.svg') }}" alt="" class="d-block img-fluid mb-4 position-absolute" style="left: 30px; top: -30px; opacity: .7;">
                <a href="{{ route('index') }}" class="d-block mt-5 mb-3">
                    <img src="{{ asset($data->logo_footer) }}" alt="" class="img-fluid logo-header">
                </a>
                <div class="text-center d-flex" style="position: relative; bottom: 15px;">
                    @if ($data->linkedin)
                        <a href="{{$data->linkedin}}" class="text-white text-decoration-none p-2 py-3">
                            <i class="fab fa-linkedin-in" style="padding: 5px 10px; border: 1px solid white; border-radius: 100%;"></i>
                        </a>  
                    @endif
                    @if ($data->instagram)
                        <a href="{{$data->instagram}}" class="text-white text-decoration-none p-2 py-3">
                            <i class="fab fa-instagram" style="padding: 5px 10px; border: 1px solid white; border-radius: 100%;"></i>
                        </a>
                    @endif
                    @if ($data->facebook)
                        <a href="{{$data->facebook}}" class="text-white text-decoration-none p-2 py-3">
                            <i class="fab fa-facebook-f" style="padding: 5px 10px; border: 1px solid white; border-radius: 100%;"></i>
                        </a>  
                    @endif
                    @if ($data->youtube)
                        <a href="{{$data->youtube}}" class="text-white text-decoration-none p-2 py-3">
                            <i class="fab fa-youtube" style="padding: 5px 10px; border: 1px solid white; border-radius: 100%;"></i>
                        </a> 
                    @endif
                </div>
            </div>
            <div class="col-sm-12 col-md-4 d-sm-none d-md-block" style="z-index: 100">
                <h6 class="text-uppercase text-white fw-bold mb-3">Mapa del Sitio</h6>
                <div class="">
                    <a href="{{ route('index') }}" class="d-block text-uppercase text-decoration-none text-light mb-2 underline">Home</a>
                    <a href="{{ route('empresa') }}" class="d-block text-uppercase text-decoration-none text-light mb-2 underline">Empresa</a>
                    <a href="{{ route('servicios') }}" class="d-block text-uppercase text-decoration-none text-light mb-2 underline">Servicios</a>
                    <a href="{{ route('clientes') }}" class="d-block text-uppercase text-decoration-none text-light mb-2 underline">Clientes</a>
                    <a href="{{ route('cotizacion') }}" class="d-block text-uppercase text-decoration-none text-light mb-2 underline">Solicitar presupuesto</a>  
                    <a href="{{ route('contacto') }}" class="d-block text-uppercase text-decoration-none text-light mb-2 underline">Contacto</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 font-size-13 mb-sm-4 mb-md-0">
                <div class="row">
                    <div class="col-sm-12 col-md-8 mb-3">
                        <div class="text-start">
                            <h6 class="d-flex text-light"><i class="fas fa-map-marker-alt d-block me-3 mb-1 text-white font-size-20"></i> DIRECCIÓN</h6>
                            <span class="d-block text-light"> {{ $data->address }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-3">
                        <div class="text-start">
                            <h6 class="d-flex text-light"><i class="fas fa-phone-alt d-block me-3 mb-1 font-size-20 text-white"></i>TELÉFONOS</h6>
                            <div class="d-flex flex-sm-row flex-md-column">
                                @php $phone = Str::of($data->phone1)->explode('|') @endphp
                                @if (count($phone) == 2)
                                    <a href="tel:{{ $phone[0]}}" class="text-light underline mb-1">{{ $phone[1] }}</a>  
                                @else 
                                    <a href="tel:{{ $data->phone1}}" class="text-light underline mb-1">{{ $data->phone1 }}</a>  
                                @endif
                                <span class="d-sm-block d-md-none px-1 text-white">/</span>
                                @php $phone2 = Str::of($data->phone2)->explode('|') @endphp
                                @if (count($phone2) == 2)
                                    <a href="tel:{{ $phone2[0]}}" class="text-light underline mb-1">{{ $phone2[1] }}</a>  
                                @else 
                                    <a href="tel:{{ $data->phone2}}" class="text-light underline mb-1">{{ $data->phone2 }}</a>  
                                @endif  
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-8 mb-3">
                        <div class="text-start">
                            <h6 class="d-flex text-light"><i class="fas fa-envelope d-block me-3 mb-1 text-white font-size-20"></i> EMAIL</h6>
                            <a href="mailto:{{ $data->email }}" class="text-light underline">{{ $data->email }}</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 mb-3">
                        <div class="text-start">
                            <h6 class="d-flex text-light"><i class="fab fa-whatsapp d-block me-3 mb-1 text-white font-size-20"></i>WHATSAPP</h6>
                            <div class="d-flex flex-column">
                                @php $phone3 = Str::of($data->phone3)->explode('|') @endphp
                                @if (count($phone3) == 2)
                                    <a href="https://wa.me/{{ $phone3[0]}}" class="text-light underline mb-1">{{ $phone3[1] }}</a>  
                                @else 
                                    <a href="https://wa.me/{{ $data->phone3}}" class="text-light underline mb-1">{{ $data->phone3 }}</a>  
                                @endif
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-end py-2">
        <div class="container">
            <a href="https://osole.com.ar/" class="text-decoration-none text-white underline">BY OSOLE</a>
        </div>
    </div>
</footer>
@isset($data->phone3)
    @if (count($phone3) == 2)
        <a href="https://wa.me/{{$phone3[0]}}" class="position-fixed" style="background-color: #0DC143; color: white; font-size: 40px; padding: 0px 13px; border-radius: 100%; bottom: 30px; right: 40px;">
            <i class="fab fa-whatsapp"></i>
        </a>      
    @else 
        <a href="https://wa.me/{{$data->phone3}}" class="position-fixed" style="background-color: #0DC143; color: white; font-size: 40px; padding: 0px 13px; border-radius: 100%; bottom: 30px; right: 40px;">
            <i class="fab fa-whatsapp"></i>
        </a>     
    @endif   
@endisset