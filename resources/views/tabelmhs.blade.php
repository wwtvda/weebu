@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tabel Mahasiswa</h1>
        </div>
        <!-- /.content -->
		
		<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
		<table>
  <tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Email</th>
	<th>No. HP</th>
	<th>Alamat</th>
	<th>Aksi</th>
  </tr>
</table>
    </section>
    <!-- /.main-section -->
@endsection