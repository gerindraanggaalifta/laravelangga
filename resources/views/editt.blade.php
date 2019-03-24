<!DOCTYPE html>
<html>
<head>
	<title>aaa</title>
</head>
<body>

	
	<h3>Edit Pegawai</h3>

	<a href="/kategori"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($kategori as $row)
	<form action="/kategori/updatee" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $row->id_kategori }}"> <br/>
		id_kategori <input type="text" required="required" name="id_kategori" value="{{ $row->id_kategori }}"> <br/>
		nama_kategori <input type="text" required="required" name="nama_kategori" value="{{ $row->nama_kategori }}"> <br/>
		created_at <input type="text" required="required" name="created_at" value="{{ $row->created_at }}"> <br/>
		updated_at <textarea required="required" name="updated_at">{{ $row->updated_at }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>