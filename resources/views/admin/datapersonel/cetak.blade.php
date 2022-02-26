<!DOCTYE html>
<html lang="en">

<head>
	<title>CETAK DATA PERSONEL</title>
</head>
<body>
<table align="center" style="width: 95%">
	<td> <center><img src="{{asset('public/assets/img/marlisa.jpg')}}" width="70" height="70"></td>
	<td><font size="4"><center>KEPOLISIAN NEGARA REPUBLIK INDONESIA</FONT><BR>
		<font size="5"><b>DAERAH SUMATERA BARAT</b></font><BR>
		<font size="5"><b>RESOR  PAYAKUMBUH </b></font><BR>
		<font size="2"><i> Jalan Pahlawan 33, Payakumbuh 26232<i></font></center>
	</td>
	</tr>
	<td colspan="2"><hr></td>
	</tr>
</table>
<br>

	<p align="center"><b><td><font size="5">Laporan Data Personel</b></p>
	
		<table class="table table-sm" border="1" style="width: 95%" align="center">
		<thead>

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
		</thead>
		</tr>
		<tbody>
			<tr>
				<td>1</td>
				<td>{{ $data->nama }}</td>
				<td>{{ optional($data->pangkat)->pangkat }}</td>
				<td>{{ $data->nrp }}</td>
				<td>{{ $data->jabatan }}</td>
				<td>{{ $data->umum }}</td>
				<td>{{ $data->polri }}</td>
				<td>{{ $data->alamat }}</td>
				<td>{{ $data->agama }}</td>
				<td>{{ $data->skpengangkatan }}</td>


			</tr>
		</tbody>
		</table>
		<br>
			<br>
<table align="right">
	<tr>
		<td>Ketua Kabagsumda</td>

	<tr>
		<td height="70"> </td>
	</td>
	<tr>
		<td><u> ZULMAN EFENDI </u></td>
	</tr>
	<tr>
		<td> NRP: </td>
	</tr>
	<tr>
	</script>
	</div>
	<script>
		window.print();
	</script>
</body>
		</html>
  