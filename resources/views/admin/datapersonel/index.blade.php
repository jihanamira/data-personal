@extends('template_backend.home')
@section('sub-judul','Data Personel')
@section('content')

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
			{{ Session('success') }} 
		</div>
	@endif

<form class="form" method="get" action="{{ route('search') }}">
	<label for="search" class="d-block mr-2">umum</label>
    <div class="form-group w-100 mb-3">
    	<div class="row">
	        <div class="col-md-5">
		        <input type="text" name="search" class="form-control w-75 d-inline" value="" id="search" placeholder="Ketikkan">
        	</div>
        	<div class="col-md-5">
        		<select class="form-control" name="pangkat">
        			<option value="">All</option>
        			@foreach($pangkat as $result)
				    	<option value="{{ $result->id }}">{{ $result->pangkat }}</option>
			    	@endforeach
        		</select>
        	</div>
        	<div class="col-md-2">
        		<button type="submit" class="btn btn-primary btn-lg">Cari</button>
        	</div>
    	</div>
	</div>
</form>
<!-- 
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2">
				<label for="">Pilih datapersonel </label>
			</div>
			<div class="col-md-4">
				<select class="form-control" name="datapersonel">
					<option value="0">-- Pilih --</option>
					@foreach ($datapersonel as $pangkat)
						<option value="{{ $pangkat->id }}" @if(Request::get('datapersonel'))== $pangkat->id) selected @endif>
					@endforeach
				</select>
			</div> -->

	<a href="{{ route('datapersonel.create') }}" class="btn btn-info btn-sm">Tambah Data Personel</a>
<br><br>
@if(isset($search) && isset($search_pangkat))
<a href="{{ route('cetakdatapersonel') }}?search={{$search}}&pangkat={{$search_pangkat}}" taget="_blank" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>
@elseif(!isset($search) && isset($search_pangkat))
<a href="{{ route('cetakdatapersonel') }}?pangkat={{$search_pangkat}}" taget="_blank" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>
@elseif(isset($search) && !isset($search_pangkat))
<a href="{{ route('cetakdatapersonel') }}?search={{$search}}" taget="_blank" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>
@else
<a href="{{ route('cetakdatapersonel') }}" taget="_blank" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>
@endif
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr align="center">
			<th rowspan="2" style="vertical-align: middle;">No</th>
			<th rowspan="2" style="vertical-align: middle;">NAMA</th>
			<th rowspan="2" style="vertical-align: middle;">PANGKAT</th>
			<th rowspan="2" style="vertical-align: middle;">NRP</th>
			<th rowspan="2" style="vertical-align: middle;">JABATAN</th>
			<th colspan="2" style="vertical-align: middle;">PENDIDIKAN</th>
			<th rowspan="2" style="vertical-align: middle;">ALAMAT</th>
			<th rowspan="2" style="vertical-align: middle;">AGAMA</th>
			<th rowspan="2" style="vertical-align: middle;">SK PENGANGKATAN</th>
			<th rowspan="2" style="vertical-align: middle;">ACTION</th>
			</tr>
			<tr align="center"> 
			<th rowspan="2" style="vertical-align: middle;">UMUM</th>
			<th rowspan="2" style="vertical-align: middle;">POLRI</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($datapersonel as $result => $hasil)
			<tr>
				<td>{{ $result + $datapersonel->firstitem() }} </td>
				<td>{{ $hasil->nama}}</td>
				<td>{{ optional($hasil->pangkat)->pangkat }}</td>
				<td>{{ $hasil->nrp}}</td>
				<td>{{ $hasil->jabatan }}</td>
				<td>{{ $hasil->umum }}</td>
				<td>{{ $hasil->polri }}</td>
				<td>{{ $hasil->alamat }}</td>
				<td>{{ $hasil->agama }}</td>
				<td>{{ $hasil->skpengangkatan }}</td>
				<td>
					<form action="{{ route('datapersonel.destroy', $hasil->id) }}" method="POST"> 
						@csrf
						@method('delete')
						<a href="{{ route('datapersonel.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
						<a href="{{ route('cetak', $hasil->id ) }}" class="btn btn-info btn-sm" target="__blank">Cetak</a>
						<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>


@endsection   