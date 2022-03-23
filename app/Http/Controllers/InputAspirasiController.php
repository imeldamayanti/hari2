<?php

namespace App\Http\Controllers;

use App\Models\InputAspirasi;
use App\Http\Requests\StoreInputAspirasiRequest;
use App\Http\Requests\UpdateInputAspirasiRequest;
use Illuminate\Http\Request;

class InputAspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInputAspirasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        InputAspirasi::create($request->only('nik', 'id_kategori', 'lokasi', 'keterangan'));
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InputAspirasi  $inputAspirasi
     * @return \Illuminate\Http\Response
     */
    public function show(InputAspirasi $inputAspirasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InputAspirasi  $inputAspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(InputAspirasi $inputAspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInputAspirasiRequest  $request
     * @param  \App\Models\InputAspirasi  $inputAspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInputAspirasiRequest $request, InputAspirasi $inputAspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InputAspirasi  $inputAspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(InputAspirasi $inputAspirasi)
    {
        //
    }
}
