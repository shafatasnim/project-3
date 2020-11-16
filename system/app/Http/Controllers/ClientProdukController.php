<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;


class ClientProdukController extends Controller{


	function homeindex(){
		return view('clientproduk.template');
	}

	function index(){
		$datakategori['list_kategori'] = Kategori::all();
		$dataproduk['list_produk'] = Produk::all();
		return view('clientproduk.index', $datakategori, $dataproduk);
	}

	function show(Produk $detail){
		$dataa['produk'] = $detail;
		return view('clientproduk.detail', $dataa);
	}

	function Kategori(){
		$datakategori['list_kategori'] = Kategori::all();
		return view('clientproduk.Kategori', $datakategori);
	}
	function about(){
		return view('about');
	}

}