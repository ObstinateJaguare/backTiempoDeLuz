<?php

namespace Modules\Client\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Client\Transformers\ClientResource;
use Modules\Client\Contracts\ClientEntityRepository;

class ClientController extends Controller
{
    /**
     * En: Display a listing of the resource.
     * Es: Mostrar una lista del recurso.
     *
     * @param  Request $request
     * @param  ClientEntityRepository $clientEntityRepository
     * @return AnonymousResourceCollection
     */
    public function index(Request $request, ClientEntityRepository $clientEntityRepository)
    {
        return ClientResource::collection(
            $clientEntityRepository->filter(
                $request->all()
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('client::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('client::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('client::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
