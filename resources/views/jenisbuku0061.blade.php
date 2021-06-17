<html>
<header>
<title> Kegiatan 4 </title>

<a href="{{url('/menu0061')}}">Menu</a>
<a href="{{url('/daftarbuku0061')}}">Daftar Buku</a>
<a href="{{url('/letakbuku0061')}}">Letak Buku</a>
<a href="{{url('/jenisbuku0061')}}">Jenis Buku</a>

</header>
<body>
<br></br>
<br></br>
<a href="/jenisbuku/export" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
<br></br>
<table border="3">
		<tr>
			<th>Judul Buku</th>
			<th>Tahun</th>
			<th>Jenis</th>
		</tr>
		@foreach ($jenisbuku as $jenis  )
		<tr>
			
			<td>{{$jenis->judul }}</td>
			<td>{{$jenis->tahun_terbit }}</td>
			<td>{{$jenis->jenis }}</td>
		</tr>
		@endforeach
 
</body>
</html>
                 
              
        