<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>            
  <table class="table table-striped">
  @foreach ($kategoris as $row)
    <thead>
      <tr>
        <th>Id Kategori</th>
        <th>Nama Kategori</th>
        <th>Created at</th>
        <th>Updated at</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$row->id_kategori}}</td>
        <td>{{$row->nama_kategori}}</td>
        <td>{{$row->created_at}}</td>
        <td>{{$row->updated_at}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

</body>
</html>
