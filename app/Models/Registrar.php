<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrar extends Model
{
    use HasFactory;

    // Gender
    const LAKILAKI = "Laki-laki";
    const PEREMPUAN = "Perempuan";

    // Jurusan
    const RPL = 'Rekayasa Perangkat Lunak';
    const TKJ = 'Teknik Komputer Jaringan';
    const MMD = 'Multimedia';
    const TBG = 'Tataboga';
    const HTL = 'Perhotelan';
    const BDP = 'Bisnis Daring Pemasaran';

    // Religion
    const ISLAM = 'Islam';
    const KRISTEN = 'Kristen';
    const BUDDHA = 'Buddha';
    const HINDU = 'Hindu';
    const KONGHUCU = 'Konghucu';
    const KATOLIK = 'Katolik';
}
