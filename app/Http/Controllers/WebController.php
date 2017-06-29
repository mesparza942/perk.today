<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Spot;





class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $query = \DB::table('pr_page')->where('slug_page', 'home')->first();
        $id = $query->id_page;
        $page = Page::find($id);
        $user = User::find('1');
        $template = 'layout.template-' . $page->template_page;
        return \View::make('website.page')
            ->with('page',$page)
            ->with('template', $template)
            ->with('user', $user);
    }

    public function reserva()
    {
        $spot = Spot::find('1');
        $query = \DB::table('pr_page')->where('slug_page', 'reservation')->first();
        $id = $query->id_page;
        $page = Page::find($id);
        $user = User::find('1');
        $template = 'layout.template-' . $page->template_page;
        if($spot->available_spot=='1') //Verificamos si el espacio esta disponible
        {
            $reserva = Reservation::create(['id_owner' => '1', 'id_spot' => '1', 'id_rentee' => '2']);
            $spot->available_spot = '0';
            $spot->save();
            $available = '1';
            return \View::make('website.reserva')
                ->with('page',$page)
                ->with('template', $template)
                ->with('user', $user)
                ->with('reserva', $reserva)
                ->with('available', $available);
        }
        return \View::make('website.reserva')
            ->with('page',$page)
            ->with('template', $template)
            ->with('user', $user)
            ->with('spot', $spot);
    }

    public function contacto()
    {
        $query = \DB::table('pr_page')->where('slug_page', 'contacto')->first();
        $id = $query->id_page;
        $page = Page::find($id);
        $template = 'layout.template-' . $page->template_page;
        return \View::make('website.reserva')
            ->with('page',$page)
            ->with('template', $template);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($object)
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
