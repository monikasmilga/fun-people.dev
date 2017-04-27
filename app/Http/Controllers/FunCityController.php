<?php namespace App\Http\Controllers;

use App\models\FunCity;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class FunCityController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /funcity
	 *
	 * @return Response
	 */
	public function index()
	{
		return FunCity::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /funcity/create
	 *
	 * @return Response
	 */



	public function create()
	{
	    $data = request()->all();
        $data['id'] = Uuid::uuid4();

	    FunCity::create($data);

		dd($data) ;
	}






	/**
	 * Store a newly created resource in storage.
	 * POST /funcity
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /funcity/{id}
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
	 * GET /funcity/{id}/edit
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
	 * PUT /funcity/{id}
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
	 * DELETE /funcity/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}