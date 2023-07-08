<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Kriteria;
use App\Models\Alternatif;
use Illuminate\Http\Request;


class DashboardController extends Controller {

    public function index() {

        $course= Course::count();
        $kriteria= Kriteria::count();
        $alternatif= Alternatif::count();


        return view('dashboard.index',[
            'title' => 'Dashboard'
        ], compact('course','kriteria','alternatif'))
        ;




    }

}
