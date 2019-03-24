<!DOCTYPE html>
<html>
<head>
	<title>abcd</title>
</head>
<body>


	<h3>Data Pegawai</h3>

	<a href="/kategori"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/kategori/abcd" method="post">
		{{ csrf_field() }}
		Id <input type="text" name="id_kategori" required="required"> <br/>
		Nama <input type="text" name="nama_kategori" required="required"> <br/>
		created_at <input type="text" name="created_at" required="required"> <br/>
		updated_at <textarea name="updated_at" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>