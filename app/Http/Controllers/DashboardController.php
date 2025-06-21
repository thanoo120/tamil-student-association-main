<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\Year;
use App\Models\Faculty;
use App\Models\Student;
use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = [];
        $datas = [];
        $data = [];
        $years_datas = [];
        $datas = Dashboard::select("name", "boys", "girls", "total", "color")->where('name', '<>', 'Total')->get();
        $data = Dashboard::select("name", "boys", "girls", "total", "color")->get();
        $years_datas = Year::select("year", "boys", "girls", "total", "color")->get();
        $students[] = ['Faculty','Boys','Girls'];
        $years[] = ['Year','Boys','Girls'];

        foreach ($datas as $key => $value) {
            $students[++$key] = [$value->name, (int)$value->boys, (int)$value->girls];
        }

        foreach ($years_datas as $key => $value) {
            $years[++$key] = [$value->year, (int)$value->boys, (int)$value->girls];
        }

        return view('dashboard.index', compact('students', 'years', 'datas', 'data', 'years_datas'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
