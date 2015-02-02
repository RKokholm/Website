<?php

class RegistrationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('Auth.Registration');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(),[

			'name' => 'required|min:3|max:20',
			'summ_name' => 'required|unique:users|min:3|max:20',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6|confirmed',
			'password_confirmation' => 'required|min:6'

		]);

		if($validator->fails()){
			return Redirect::back()->withErrors($validator)->withInput();

		}

		$user = User::create([
			'name' => Input::get('name'),
			'summ_name' => Input::get('summ_name'),
			'email' => Input::get('email'),
			'password' => Hash::make(Input::get('password')),
			'rank' => 0
		]);


		Auth::login($user);

		return Redirect::route('index');
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
