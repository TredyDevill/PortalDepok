<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MapsController extends Controller
{
	public function maps()
	{
	    $pdams = DB::table('pdams')->get();
	    $pasars = DB::table('pasars')->get();
	    $kuliners = DB::table('kuliners')->get();
	    $kelurahans = DB::table('kelurahans')->get();
	    $apoteks = DB::table('apoteks')->get();
	    $kliniks = DB::table('kliniks')->get();
	    $rss = DB::table('rss')->get();
	    $puskesmass = DB::table('puskesmass')->get();
	    $bidans = DB::table('bidans')->get();
	    $supermarkets = DB::table('supermarkets')->get();
	    $ukms = DB::table('ukms')->get();
	    $tamans = DB::table('tamans')->get();
	    $tempat_wisatas = DB::table('tempat_wisatas')->get();
	    $tempat_ibadahs = DB::table('tempat_ibadahs')->get();
	    $spbus = DB::table('spbus')->get();
	    $tpus = DB::table('tpus')->get();
	    $olahragas = DB::table('olahragas')->get();
	    $malls = DB::table('malls')->get();
	    $jasa_pengirimans = DB::table('jasa_pengirimans')->get();
	    $kecamatans = DB::table('kecamatans')->get();

	    return view('/hidepok/maps', ['pdams' => $pdams, 'pasars' => $pasars, 'kuliners' => $kuliners, 'kelurahans' => $kelurahans, 'apoteks' => $apoteks, 'kliniks' => $kliniks, 'rss' => $rss, 'puskesmass' => $puskesmass, 'bidans' => $bidans, 'supermarkets' => $supermarkets, 'ukms' => $ukms, 'tamans' => $tamans, 'tempat_wisatas' => $tempat_wisatas, 'tempat_ibadahs' => $tempat_ibadahs, 'spbus' => $spbus, 'tpus' => $tpus, 'olahragas' => $olahragas, 'malls' => $malls, 'jasa_pengirimans' => $jasa_pengirimans, 'kecamatans' => $kecamatans]);
	}
}
