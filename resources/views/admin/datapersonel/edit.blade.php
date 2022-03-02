@extends('template_backend.home')
@section('sub-judul','Tambah Data personel ')
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


<form action="{{ route('datapersonel.update', $datapersonel->id ) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('patch')

<div class="form-group">
    <label>NAMA </label>
    <input type="text" class="form-control" name="nama" value={{ $datapersonel->nama }}>
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
    <label>Ruangan</label>
    <select class="form-control" name="id_ruangan">
    	<option value="" holder>Pilih Ruangan</option>
    	@foreach($ruangan as $data)
    	<option value="{{ $data->id }}">{{ $data->nama }}</option>
    	@endforeach
    </select>
</div>

<div class="form-group">
    <label>NRP </label>
    <input type="text" class="form-control" name="nrp" value={{ $datapersonel->nrp }}>
</div>
<div class="form-group">
    <label>JABATAN </label>
    <input type="text" class="form-control" name="jabatan" value={{ $datapersonel->jabatan }}>
</div>
<div class="form-group">
    <label>UMUM </label>
        <select class="form-control select2" name="umum" value="{{ $datapersonel->umum }}">
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
    <input type="text" class="form-control" name="polri" value={{ $datapersonel->polri }}>
</div>
<div class="form-group">
    <label>ALAMAT</label>
    <input type="text" class="form-control" name="alamat" value={{ $datapersonel->alamat }}>
</div>
<div class="form-group">
    <label>AGAMA</label>
    <input type="text" class="form-control" name="agama" value={{ $datapersonel->agama }}>
</div>
<div class="form-group">
    <label>SK PENGANGKATAN</label>
    <input type="text" class="form-control" name="skpengangktan" value={{ $datapersonel->skpengangktan }}>
</div>
 <div class="form-group">
    <button class="btn btn-primary btn-block">Simpan Data personel</button>
</div>

</form>

@endsection  