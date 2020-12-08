<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Season;
use App\Dish;
use App\User;

class DishController extends Controller
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
        // return view('admin.seasons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        $seasons = Season::all();
        $user_id = Auth::id();
        $user = Auth::user();

        if (Auth::check()) {
            return view('admin.dishes.show', compact('dish', 'seasons', 'user'));
        } else {
            return view('guest.dishes.show', compact('dish', 'seasons', 'user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        // dd($dish);
        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $request->validate($this->getValidation());

        $data = $request->all();

        $dish->update($data);

        $dish_updated = $dish->update($data);
        if ($dish_updated) {
            return redirect()->route('admin.dishes.show', $dish);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();

        return redirect()->route('admin.seasons.index');
    }

    public function getValidation()
    {
      return [
        'name'=> 'required|max:255',
        'method'=> 'required',
        'season_id'=> 'required|min:1|max:4',
        'type'=> 'required|max:255',
        'price'=> 'required|max:999,99',
        'image'=> 'required|image',
      ];
    }
}
