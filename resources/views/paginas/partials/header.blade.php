<div id="pre-header" class="d-sm-none d-md-block font-size-14 py-2">
    <div class="container">
        <div class="d-flex justify-content-end align-items-center">
            <div class="me-3 d-inline-block">
                <i class="fab fa-whatsapp text-primary me-1"></i> 
                @php $phone3 = Str::of($data->phone3)->explode('|') @endphp
                @if (count($phone3) == 2)
                    <a href="https://wa.me/{{$phone3[0]}}" class="text-primary underline underline">{{ $phone3[1] }}</a>
                @else 
                    <a href="https://wa.me/{{$data->phone3}}" class="text-primary underline underline">{{ $data->phone3 }}</a>
                @endif  
            </div>
            <div class="d-inline-block email me-3">
                <a href="mailto:{{ $data->email }}" class="mb-xs-2 mb-md-0 text-primary underline underline" style="z-index: 100;">
                    <i class="fas fa-envelope text-primary me-1"></i> {{ $data->email }}
                </a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand logo" href="{{ route('index') }}">
            <img src="{{ asset($data->logo_header) }}" alt="" class="img-fluid logo-header">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-uppercase position-relative py-md-4 py-sm-2" id="navbarNav">
            <ul class="navbar-nav justify-content-end align-items-center w-100">
                <li class="nav-item px-sm-2 px-md-3 @if(Request::is('/')) position-relative @endif">
                    <a class="nav-link text-primary @if(Request::is('/')) active @endif" href="{{ route('index') }}">Inicio</a>
                </li>
                <li class="nav-item px-sm-2 px-md-3 @if(Request::is('empresa')) position-relative @endif">
                    <a class="nav-link text-primary @if(Request::is('empresa')) active @endif" href="{{ route('empresa') }}">Empresa</a>
                </li>
                <li class="nav-item px-sm-2 px-md-3 @if(Request::is('servicios')) position-relative @endif">
                    <a class="nav-link text-primary @if(Request::is('servicios')) active @endif" href="{{ route('servicios') }}">Servicios</a>
                </li>
                <li class="nav-item px-sm-2 px-md-3 @if(Request::is('clientes')) position-relative @endif">
                    <a class="nav-link text-primary @if(Request::is('clientes')) active @endif" href="{{ route('clientes') }}">Clientes</a>
                </li>
                <li class="nav-item px-sm-2 px-md-3 @if(Request::is('solicitud-de-presupuesto')) position-relative @endif">
                    <a class="nav-link text-primary @if(Request::is('solicitud-de-presupuesto')) active @endif" href="{{ route('cotizacion') }}">Solicitar presupuesto</a>
                </li>
                <li class="nav-item px-sm-2 px-md-3 @if(Request::is('contacto')) position-relative @endif">
                    <a class="nav-link text-primary @if(Request::is('contacto')) active @endif" href="{{ route('contacto') }}" >Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>  
