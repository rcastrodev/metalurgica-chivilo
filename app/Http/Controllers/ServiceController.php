<?php

namespace App\Http\Controllers;

use App\Page;
use App\Content;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    protected $page;

    public function __construct(){
        
        $this->page = Page::where('name', 'servicios')->first();
    }

    /**
     * @author Raul castro
     */

    public function index()
    {
        return view('home');
    }
    /**
     * Fin Slider
     */

    public function content()
    {
        return view('administrator.service.content');
    }

    /**
     * @param array $request
     * @author Raul castro
     */

    public function store(Request $request)
    {
        $request->validate([
            'image'     => 'required',
            'content_3' => 'required'
        ], [
            'image.required' => 'Imagen es requerida',
            'content_3.required'    => 'Logo es requerido'
        ]);

        $data = $request->all();
        $data['image'] = $request->file('image')->store('images/service', 'custom');
        $data['content_3'] = $request->file('content_3')->store('images/service', 'custom');
        $content = Content::create($data);
        return back();
    }

    public function update(Request $request)
    {
        $element = Content::find($request->input('id'));
        $data = $request->all();
        
        if($request->hasFile('image')){
            if(Storage::disk('custom')->exists($element->image))
                Storage::disk('custom')->delete($element->image);
            
            $data['image'] = $request->file('image')->store('images/service','custom');
        }        

        if($request->hasFile('content_3')){
            if(Storage::disk('custom')->exists($element->content_3))
                Storage::disk('custom')->delete($element->content_3);
            
            $data['content_3'] = $request->file('content_3')->store('images/service','custom');
        }   
        $element->update($data);
        return back();
    }

    public function destroy($id)
    {
        $element = Content::find($id);

        if(Storage::disk('custom')->exists($element->image))
            Storage::disk('custom')->delete($element->image); 

        if(Storage::disk('custom')->exists($element->content_3))
            Storage::disk('custom')->delete($element->content_3); 

        $element->delete();

        return response()->json([], 200);
    }

    /**
     * @author Raul castro
     * @return datatable
     */

    public function sliderGetList()
    {
        $elements = Content::where('section_id', 8)->orderBy('order', 'ASC');

        return DataTables::of($elements)
        ->editColumn('image', function($element){
            return '<img src="'.asset($element->image).'" class="img-fluid" style="max-width:100px">';
        })
        ->editColumn('logo', function($element){
            return '<img src="'.asset($element->content_3).'" class="img-fluid" style="max-width:100px">';
        })
        ->addColumn('content', function($element) {
            return "<div>{$element->content_1} <br> {$element->content_2}</div>";
        })
        ->addColumn('actions', function($element) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$element->id.')"></button><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$element->id.')" title="Eliminar element"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions', 'image', 'content', 'logo'])
        ->make(true);
    }
}
