<body>
<ul>
  <li> <a href="/home">Home</a>
  <li><a href="/home/export" class="btn btn-success my-3" target="">Export Excel</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
<div style="overflow-x:auto;">
</body>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Jenis Buku</th>
      <th scope="col">Tahun terbit</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  @foreach ($data as $dataBuku)
    <tr>    
    <td>{{$dataBuku -> no}}</td>
    <td>{{$dataBuku -> judulBuku}}</td>
    <td>{{$dataBuku -> jenisBuku}}</td>
    <td>{{$dataBuku -> tahunTerbit}}</td>
    </td>
    </tr>
    @endforeach
  </tr>

  </tbody>
</table>