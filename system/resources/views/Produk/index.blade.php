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
				<div class="card-body">
					<table>
						
					</table>
				</div>
			</div>	
		</div>
	</div>
</div>


@endsection