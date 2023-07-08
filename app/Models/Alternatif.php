<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Alternatif extends Model
{
    use HasFactory;

    protected $table = 'alternatif';
    public $timestamps = FALSE;
    // protected $fillable = [
    //     'id',
    //     'kode_alternatif',
    //     'alternatif',
    //     'kriteria_1',
    //     'kriteria_2',
    //     'kriteria_3',
    //     'kriteria_4',
    //     'kriteria_5',
    // ];

}
