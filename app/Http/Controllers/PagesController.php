<?php

namespace App\Http\Controllers;

use SEO;
use App\Data;
use App\Page;
use App\Color;
use App\Content;
use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PagesController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data = Data::first();
    }

    public function home()
    {
        $page = Page::where('name', 'inicio')->first();
        SEO::setTitle('home');
        SEO::setDescription(strip_tags($this->data->description));
        /** Secciones de página */
        $sections   = $page->sections;
        $section1s  = $sections->where('name', 'section_1')->first()->contents()->orderBy('order', 'ASC')->get();
        $section2   = $sections->where('name', 'section_2')->first()->contents()->first();
        $section3   = $sections->where('name', 'section_3')->first()->contents()->first();
        $section4   = $sections->where('name', 'section_4')->first()->contents()->first();
        $services  = Content::where('section_id', 8)->orderBy('order', 'ASC')->get();
        return view('paginas.index', compact('section1s', 'section2', 'section3', 'section4', 'services'));
    }

    public function empresa()
    {
        $page = Page::where('name', 'empresa')->first();
        $sections = $page->sections;
        $section1s = $sections->where('name', 'section_1')->first()->contents()->orderBy('order', 'ASC')->get();
        $section2 = $sections->where('name', 'section_2')->first()->contents()->first();
        $section3s = $sections->where('name', 'section_3')->first()->contents()->orderBy('order', 'ASC')->get();
        SEO::setTitle('empresa');
        SEO::setDescription(strip_tags($section2->content_2));
        return view('paginas.empresa', compact('section1s', 'section2', 'section3s'));
    }

    public function servicios()
    {
        $page = Page::where('name', 'servicios')->first();
        SEO::setTitle('servicios');
        SEO::setDescription(strip_tags($this->data->description));
        /** Secciones de página */
        $sections   = $page->sections;
        $section1s  = $sections->where('name', 'section_1')->first()->contents()->orderBy('order', 'ASC')->get();
        return view('paginas.servicios', compact('section1s'));
    }

    public function clientes()
    {
        $page = Page::where('name', 'clientes')->first();
        SEO::setTitle('clientes');
        SEO::setDescription(strip_tags($this->data->description));
        /** Secciones de página */
        $sections   = $page->sections;
        $section1s  = $sections->where('name', 'section_1')->first()->contents()->orderBy('order', 'ASC')->get();
        return view('paginas.clientes', compact('section1s'));
    }

    public function cotizacion()
    {
        $page = Page::where('name', 'cotizacion')->first();
        SEO::setTitle("cotizaci&oacute;n");
        SEO::setDescription(strip_tags($this->data->description));
        return view('paginas.cotizacion');
    }

    public function contacto()
    {
        $page = Page::where('name', 'contacto')->first();
        SEO::setTitle("Contacto"); 
        SEO::setDescription(strip_tags($this->data->description));      
        return view('paginas.contacto');
    }

    public function certificado($id)
    {
        $element = Content::findOrFail($id);  
        return Response::download($element->content_3);  
    }
}
