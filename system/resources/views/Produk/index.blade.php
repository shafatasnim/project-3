@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-3">
			<div class="card">
				<div class="card-header">
					Data Produk
					<a href="{{url('produk/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah Data</a>
				</div>
				<div class="card-body"><hr>
					<table class="table">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Stock</th>
						</thead>
						<tbody>
							@foreach($list_produk as $produk)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
										<a href="{{url('produk', $produk->id)}}" class="btn btn-primary"><i class="fa fa-info"></i></a>
										<a href="{{url('produk', $produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete', ['url' => url('produk', $produk->id)]) 
									</div>
								</td>
								<td>{{$produk->nama}}</td>
								<td>{{$produk->harga}}</td>
								<td>{{$produk->stock}}</td>
							</tr>
							@endforeach
						</tbody>						
					</table>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection