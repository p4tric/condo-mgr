<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CreateValidationRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all() ;
        // specific
        // $cars = Car::where('name', '=', 'Audi')
        // ->findOrFail();

        //->get();;
        // print_r(Car::sum('founded'));

        return view('cars.index', [
          'cars'=>$cars,
          'layout'=>'index'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        return view('cars.create', [
          'cars' => $cars,
          'layout' => 'create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateValidationRequest $request)
    {
        $request->validated();

        $car = Car::create([
          'name' => $request->input('name'),
          'founded' => $request->input('founded'),
          'description' => $request->input('description'),
        ]);
        /*
        $car = Car::make([
        $car->save();

        $car = new Car() ;
        $car->name = $request->input('name');
        $car->founded = $request->input('founded');
        $car->description = $request->input('description');
        $car->save() ;
        */
        return redirect('/cars') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = Car::all() ;
        $car = Car::find($id);

        return view('cars.show', [
          'cars' => $cars,
          'car' => $car,
          'carmodels' => $car->carmodels,
          'engines' => $car->engines
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id); //->first();
        $cars = Car::all() ;
        return view('cars.edit', [
          'cars'=>$cars,
          'car'=>$car,
          'layout'=>'edit'
        ]);
        // ->with('car', $car)
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
        $car = Car::where('id', $id)
          ->update([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description'),
          ]);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return redirect('/cars');
    }
}
