@extends('template_backend.home')
@section('sub-judul','Tambah datapersonel ')
@section('content')

	@if(count($errors)>0)
	 @foreach($errors->all() as $error)
		<div class="alert alert-danger" role="alert">
			{{ $error }} 
		</div>
	 @endforeach
	@endif

	@if(Session::has('success'))
		<div class="alert alert-success" role="alert">
			{{ Session('success') }} 
		</div>
	@endif


<form action="{{ route('datapersonel.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label>NAMA </label>
    <input type="text" class="form-control" name="nama">
</div>
<div class="form-group">
    <label>pangkat</label>
    <select class="form-control" name="id_pangkat">
    	<option value="" holder>Pilih Pangkat</option>
    	@foreach($pangkat as $result)
    	<option value="{{ $result->id }}">{{ $result->pangkat }}</option>
    	@endforeach
    </select>
</div>

<div class="form-group">
    <label>NRP </label>
    <input type="text" class="form-control" name="nrp">
</div>
<div class="form-group">
    <label>JABATAN </label>
    <input type="text" class="form-control" name="jabatan">
</div>
<div class="form-group">
    <label>UMUM </label>
        <select class="form-control select2" name="umum">
            <option>Pilih Umum</option>
            <option>SMA</option>
            <option>SMK</option>
            <option>SMU</option>
            <option>STM</option>
            <option>SPP</option>
            <option>DIII</option>
            <option>DIV</option>
            <option>S1</option>
            <option>S2</option>
            <option>PT</option>
        </select>
</div>
<div class="form-group">
    <label>POLRI </label>
    <input type="text" class="form-control" name="polri">
</div>
<div class="form-group">
    <label>ALAMAT</label>
    <input type="text" class="form-control" name="alamat">
</div>
<div class="form-group">
    <label>AGAMA</label>
    <input type="text" class="form-control" name="agama">
</div>
<div class="form-group">
    <label>SK PENGANGKATAN</label>
    <input type="text" class="form-control" name="skpengankatan">
</div>

 <div class="form-group">
    <button class="btn btn-primary btn-block">Simpan Post</button>
</div>

</form>

@endsection  