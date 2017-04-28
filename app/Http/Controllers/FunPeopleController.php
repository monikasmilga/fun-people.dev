<?php namespace App\Http\Controllers;

use App\models\FunCity;
use App\models\FunHobbies;
use App\models\FunPeople;
use Illuminate\Routing\Controller;
use Ramsey\Uuid\Uuid;

class FunPeopleController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /funpeople
	 *
	 * @return Response
	 */
	public function index()
	{
		return FunPeople::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /funpeople/create
	 *
	 * @return Response
	 */
	public function create()
	{

        $data = request()->all();
        $data['id'] = Uuid::uuid4();

        $record = FunPeople::create($data);

        return view ('formpeople', $record->toArray());
	}

    public function showCreate()
    {
        $config = [];
        $config['hobbies'] = FunHobbies::pluck('name', 'id');
        $config['city'] = FunCity::pluck('name', 'id');

        return view ('formpeople', $config);
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /funpeople
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /funpeople/{id}
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
	 * GET /funpeople/{id}/edit
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
	 * PUT /funpeople/{id}
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
	 * DELETE /funpeople/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}