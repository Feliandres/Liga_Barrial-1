<?php

namespace App\Http\Controllers;

use App\Models\Matches;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UpcomingController extends Controller
{
    //

    public function proximosPartidos(){
        $matches = Matches::whereDate('date_match', '>=', Carbon::today())->orderBy('date_match')->get();
        return view('upcoming.upcoming', ['matches' => $matches]);
    }   

    public function create()
    {
        //
        //$matches = Matches::all();
        //return view('upcoming.ceate', ['matches' => $matches]);
        return view('upcoming.create');
    }

    public function store(Request $request)
    {
        //
        $matches = new Matches();
        $matches->name_team_local = $request->input('name_team_local');
        $matches->name_team_visit = $request->input('name_team_visit');
        $matches->date_match = $request->input('date_match');
        $matches->save();
        return redirect()->route('upcoming.upcoming');
    }

    public function edit($id)
    {
       //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
