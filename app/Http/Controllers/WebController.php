<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Spot;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $query    = Page::where('slug_page', 'home')->first();
        $id       = $query->id_page;
        $page     = Page::find($id);
        $template = 'layouts.template-' . $page->template_page;
        return \View::make('website.page')
            ->with('page', $page)
            ->with('template', $template);
    }

    public function contacto()
    {
        $query    = Page::where('slug_page', 'contacto')->first();
        $id       = $query->id_page;
        $page     = Page::find($id);
        $template = 'layouts.template-' . $page->template_page;
        return \View::make('website.page')
            ->with('page', $page)
            ->with('template', $template);
    }
    public function gracias(Request $request)
    {
        $dir    = $request['direccion'];
        $lat    = $request['latitud'];
        $lng    = $request['longitud'];
        $spa    = $request['espacio'];
        $num    = $request['num'];
        $sche   = $request['time'];
        $hour   = $request['hours'];
        $cost   = $request['cost'];
        $detail = $request['detalle'];
        $method = $request['method'];
        $pass   = $request['pass'];

        $spot = Spot::create(['address_spot' => $dir, 'latitud_spot' => $lat, 'longitud_spot' => $lng, 'tipo_spot' => $spa, 'quantity_spot' => $num, 'schedule_spot' => $sche, 'time_spot' => $hour, 'cost_spot' => $cost, 'detail_spot' => $detail, 'accessmethod_spot' => $method, 'password_spot' => $pass, 'id_owner' => 1]);

        $query    = Page::where('slug_page', 'gracias')->first();
        $id       = $query->id_page;
        $page     = Page::find($id);
        $template = 'layouts.template-' . $page->template_page;
        return \View::make('website.page')
            ->with('page', $page)
            ->with('template', $template);
    }
}
