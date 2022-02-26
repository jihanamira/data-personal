@extends('template_backend.home')
@section ('sub-judul','PANGKAT')
@section('content')


<!-- Start kode untuk form pencarian -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

  <div class="row">
	<form action= "/datapersonel" method="GET">
	<a href="{{ route('datapersonel.create') }}" class="btn btn-info btn-sm">Tambah data personel</a>
	<a href="{{ route('cetak-pangkat') }}" taget="_blank" class="btn btn-primary btn-sm"><i class="fas fa-print"></i></a>
<br><br>

<a href="{{ route('pangkat.create')}}" class="btn btn-success">Tambah pangkat</a>
<br></br>


	<table class =" table table-striped table-hover table-sm">
		<thead>
			<tr>
				<th>No</th>
				<th>pangkat</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($pangkat as $result => $hasil)
			<tr>
				<td>{{ $result + $pangkat->firstitem() }}</td>
				<td>{{ $hasil->pangkat}}</td>
				<td> 
					<form action="{{ route('pangkat.destroy', $hasil->id) }}" method="POST"> 
						@csrf
						@method('delete')
						<a href="{{ route('pangkat.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
					<button type="submit" class="btn btn-danger btn-sm">Delete</button>
					</form>
			</tr>
			@endforeach
		</tbody>
	</table>
{{ $pangkat->links() }}
@endsection