<?php

namespace App\Http\Controllers\api\v1\river;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\River;
use App\Models\Record;
use Illuminate\Support\Facades\DB;

class RiverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rivers = River::all();
        $records = Record::whereIn('id', function($query){
                    $query->select(DB::raw('max(id) from records group by r_id'));
                })
                ->get();

        return compact('rivers', 'records');
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
        $river = new River();

        $river->station = $request->input('station');
        $river->r_name = $request->input('r_name');
        $river->r_loc = $request->input('r_loc');
        $river->categories = $request->input('categories');
        $river->save();

        return response()->json($river);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $river = River::find($id);

        return response()->json($river);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $river = River::find($id);

        $river->station = $request->input('station');
        $river->r_name = $request->input('r_name');
        $river->r_loc = $request->input('r_loc');
        $river->categories = $request->input('categories');
        $river->save();

        return response()->json('$river');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $river = River::find($id);

        $river->delete();

        return response()->json('$river');
    }
}
