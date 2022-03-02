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
	<div class="col-md-12">
		<a href="{{ route('pangkat.create')}}" class="btn btn-success">Tambah pangkat</a>
	</div>
	<div class="col-md-12">
		<table class ="table table-striped table-hover table-sm">
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
	</div>
</div>

@endsection