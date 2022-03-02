@extends('template_backend.home')
@section ('sub-judul','Ruangan')
@section('content')


<!-- Start kode untuk form pencarian -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="row">
	<div class="col-md-12">
		<a href="{{ route('ruangan.create')}}" class="btn btn-success">Tambah Ruangan</a>
	</div>
	<div class="col-md-12">
		<table class ="table table-striped table-hover table-sm">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($ruangan as $result => $hasil)
				<tr>
					<td>{{ $result + $ruangan->firstitem() }}</td>
					<td>{{ $hasil->nama}}</td>
					<td> 
						<form action="{{ route('ruangan.destroy', $hasil->id) }}" method="POST"> 
							@csrf
							@method('delete')
							<a href="{{ route('ruangan.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
						<button type="submit" class="btn btn-danger btn-sm">Delete</button>
						</form>
				</tr>
				@endforeach
			</tbody>
		</table>

		{{ $ruangan->links() }}
	</div>
</div>

@endsection