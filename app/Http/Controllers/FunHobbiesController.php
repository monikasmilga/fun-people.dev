<?php namespace App\Http\Controllers;

use App\models\FunHobbies;
use Illuminate\Routing\Controller;

class FunHobbiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /funhobbies
	 *
	 * @return Response
	 */
	public function index()
	{
		return FunHobbies::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /funhobbies/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /funhobbies
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /funhobbies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /funhobbies/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /funhobbies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /funhobbies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}