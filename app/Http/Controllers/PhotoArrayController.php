<?php

namespace App\Http\Controllers;

use App\PhotoArray;
use App\Repositories\PhotoArray\PhotoArrayRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class PhotoArrayController extends Controller
{
    private $_photoRepository;

    public function __construct(PhotoArrayRepositoryInterface $photoArrayRepository)
    {
        $this->_photoRepository = $photoArrayRepository;
    }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PhotoArray  $photoArray
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoArray $photoArray)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PhotoArray  $photoArray
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoArray $photoArray)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PhotoArray  $photoArray
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhotoArray $photoArray)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PhotoArray  $photoArray
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoArray $photoArray)
    {
        //
    }
}
