<?php

namespace App\Http\Controllers;
use App\Models\Produk;


class ClientProdukController extends Controller{
	function index(){
		$data['list_produk'] = Produk::all();
		return view('produk.index', $data);
	}

	function create(){
		return view('produk.create');
	}

	function store(){
		$produk = new produk;
		$produk->nama = request('nama');
		$produk->stock = request('stock');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with('success', 'Data Berhasil Ditambahkan');
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(Produk $produk){
		$produk->nama = request('nama');
		$produk->stock = request('stock');
		$produk->harga = request('harga');
		$produk->berat = request('berat');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with('success', 'Data Berhasil Diedit');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with('success', 'Data Berhasil Dihapus');
	}
}