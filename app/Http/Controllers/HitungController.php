<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class HitungController extends Controller
{

    public function hitung(Request $request){

        $kriteria = Kriteria::sum('bobot');

        $bobot1 = 20/$kriteria;
        $bobot2 = 20/$kriteria;
        $bobot3 = 20/$kriteria;
        $bobot4 = 20/$kriteria;
        $bobot5 = 20/$kriteria;
        $widget1 = [
            'kriteria' => $bobot1,
        ];
        $widget2 = [
            'kriteria' => $bobot2,
        ];
        $widget3 = [
            'kriteria' => $bobot3,
        ];
        $widget4 = [
            'kriteria' => $bobot4,
        ];
        $widget5 = [
            'kriteria' => $bobot5,
        ];


        $Alternatif = Alternatif::get();
        $data = Alternatif::orderby('kode_alternatif', 'asc')->get();

        $minC1 = Alternatif::min('kriteria_1');
        $maxC1 = Alternatif::max('kriteria_1');
        $minC2 = Alternatif::min('kriteria_2');
        $maxC2 = Alternatif::max('kriteria_2');
        $minC3 = Alternatif::min('kriteria_3');
        $maxC3 = Alternatif::max('kriteria_3');
        $minC4 = Alternatif::min('kriteria_4');
        $maxC4 = Alternatif::max('kriteria_4');
        $minC5 = Alternatif::min('kriteria_5');
        $maxC5 = Alternatif::max('kriteria_5');

        $C1min =[
            'nama_alternatif' => $minC1,
        ];
        $C1max =[
            'nama_alternatif' => $maxC1,
        ];
        $C2min =[
            'nama_alternatif' => $minC2,
        ];
        $C2max =[
            'nama_alternatif' => $maxC2,
        ];
        $C3min =[
            'nama_alternatif' => $minC3,
        ];
        $C3max =[
            'nama_alternatif' => $maxC3,
        ];
        $C4min =[
            'nama_alternatif' => $minC4,
        ];
        $C4max =[
            'nama_alternatif' => $maxC4,
        ];
        $C5min =[
            'nama_alternatif' => $minC5,
        ];
        $C5max =[
            'nama_alternatif' => $maxC5,
        ];

        $hasil = $minC1/$maxC1;
        $hasil1 =[
            'nama_alternatif' => $hasil,
        ];

        // $hasildua = $minC2/$maxC2;
        // $hasil2 =[
        //     'alternatif' => $hasil,
        // ];

        // $hasiltiga = $minC3/$maxC3;
        // $hasil3 =[
        //     'alternatif' => $hasil,
        // ];

        // $hasilempat = $minC4/$maxC4;
        // $hasil4 =[
        //     'alternatif' => $hasil,
        // ];

        // $hasillima = $minC5/$maxC5;
        // $hasil =[
        //     'alternatif' => $hasil,
        // ];



        return view('dashboard/perhitungan/hitung', compact('hasil1','data', 'widget1', 'widget2', 'widget3', 'widget4','widget5', 'C1min', 'C1max', 'C2min', 'C2max', 'C3min', 'C3max', 'C4min', 'C4max','C5min', 'C5max'));
    }


    public function rekomendasi() {

        $alternatifs = Alternatif::all();
        $weights = [0.2,0.2,0.2,0.2,0.2]; // Bobot kriteria

        // $minValues = $alternatives->min(); // Mendapatkan nilai minimum dari setiap kolom
        // $maxValues = $alternatives->max(); // Mendapatkan nilai maksimum dari setiap kolom

        $results = [];
        $nomor = 0;

        foreach ($alternatifs as $alternatife) {
            $kriteria_1 = $alternatife->kriteria_1;
            $kriteria_2 = $alternatife->kriteria_2;
            $kriteria_3 = $alternatife->kriteria_3;
            $kriteria_4 = $alternatife->kriteria_4;
            $kriteria_5 = $alternatife->kriteria_5;
            // $keawetan = $alternative->keawetan;

            // Normalisasi setiap nilai kriteria
            $norm_kriteria_1 = 100 / $kriteria_1;
            $norm_kriteria_2 = $kriteria_2 / 90 ;
            $norm_kriteria_3 = $kriteria_3 / 9;
            $norm_kriteria_4 = $kriteria_4 / 90;
            $norm_kriteria_5 = $kriteria_5 / 90;
            // $norm_keawetan = ($keawetan - $minValues->keawetan) / ($maxValues->keawetan - $minValues->keawetan);


            // Hitung hasil SAW
            $hasil =
            ($weights[0] * $norm_kriteria_1)+
            ($weights[1] * $norm_kriteria_2)  +
            ($weights[2] * $norm_kriteria_3)+
            ($weights[3] * $norm_kriteria_4) +
            ($weights[4] * $norm_kriteria_5);

            $nomor++;

            $nama_alternatif = $alternatife->nama_alternatif;
            $results[] = [
            'nomor' => $nomor,
            'nama_alternatif' => $nama_alternatif,
            'kriteria_1' => $norm_kriteria_1,
            'kriteria_2' => $norm_kriteria_2,
            'kriteria_3' => $norm_kriteria_3,
            'kriteria_4' => $norm_kriteria_4,
            'kriteria_5' => $norm_kriteria_5,
            'hasil'=>$hasil
            ];
            arsort($results);
        }



        return view('dashboard.perhitungan.hitung', ['results' => collect($results)->sortByDesc('hasil')->values()->all()]);
    }
    }

