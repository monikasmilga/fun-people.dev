<?php namespace App\Http\Controllers;

use App\models\FunPeopleHobbiesConnections;
use Illuminate\Routing\Controller;

class FunPeopleHobbiesConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /funpeoplehobbiesconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		return FunPeopleHobbiesConnections::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /funpeoplehobbiesconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /funpeoplehobbiesconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /funpeoplehobbiesconnections/{id}
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
	 * GET /funpeoplehobbiesconnections/{id}/edit
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
	 * PUT /funpeoplehobbiesconnections/{id}
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
	 * DELETE /funpeoplehobbiesconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}