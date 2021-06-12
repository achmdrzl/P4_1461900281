
<head>
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Data Buku</title>
<style>
table {
border-collapse: collapse;
border-spacing: 0;
width: 100%;
border: 1px solid #ddd;
}
thead {
background-color: #f2f2f2;
}
th, td {
text-align: left;
padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
.tambah{
padding: 8px 16px ;
text-decoration: none;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #111;
}
</style>
</head>
<body>
<ul>
  <li> <a href="/home">Home</a>
  <li><a href="/home/export" class="btn btn-success my-3" target="">Export Excel</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
<div style="overflow-x:auto;">

<table>
<thead>
    <tr>
    <th>No</th> 
    <th>Judul Buku</th>
    <th>Jenis Buku</th>
    <th>Tahun Terbit</th>
    </tr>
</thead>
<tbody>
    @foreach ($data as $dataBuku)
    <tr>    
    <td>{{$dataBuku -> no}}</td>
    <td>{{$dataBuku -> judulBuku}}</td>
    <td>{{$dataBuku -> jenisBuku}}</td>
    <td>{{$dataBuku -> tahunTerbit}}</td>
    </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
</body>
