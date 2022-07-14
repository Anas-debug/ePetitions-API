<?php

namespace App\Http\Controllers;

use App\Models\Petition;
<<<<<<< HEAD
use Illuminate\Http\Request;
=======
<<<<<<< HEAD
use Illuminate\Http\Request;
=======
use App\Http\Requests\StorePetitionRequest;
use App\Http\Requests\UpdatePetitionRequest;
>>>>>>> fbbd38a9f6ad4458d713baca262f062228935582
>>>>>>> 24111eaceccb3b32095a558e69ad10b8bbdc4042

class PetitionController extends Controller
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 24111eaceccb3b32095a558e69ad10b8bbdc4042
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
<<<<<<< HEAD
=======
=======
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
     * @param  \App\Http\Requests\StorePetitionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetitionRequest $request)
>>>>>>> fbbd38a9f6ad4458d713baca262f062228935582
>>>>>>> 24111eaceccb3b32095a558e69ad10b8bbdc4042
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function show(Petition $petition)
    {
        //
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 24111eaceccb3b32095a558e69ad10b8bbdc4042
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petition $petition)
<<<<<<< HEAD
=======
=======
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function edit(Petition $petition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetitionRequest  $request
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetitionRequest $request, Petition $petition)
>>>>>>> fbbd38a9f6ad4458d713baca262f062228935582
>>>>>>> 24111eaceccb3b32095a558e69ad10b8bbdc4042
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petition $petition)
    {
        //
    }
}
