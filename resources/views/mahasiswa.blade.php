<!DOCTYPE html>
<html>
	<head>
		<title>Latihan Laravel</title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/sticky-footer-navbar.css')}}">
		
	</head>
	<body>
		<!-- <h1>WIDYAN</h1>
		<p>belajar laravel</p>
		<table>

		</table> -->
		<header class="navbar navbar-default navbar-fixed-top">
			<img src="{{asset('img/node.png')}}" width="200" height="100" style="margin-left: 100;" />
			<div id="judul" align="middle">
				<h1>Selamat Datang di Pemrograman Node js Sederhana</h1>
			</div>
		</header>
		<div class="container">
		<a href="/student/create" class="btn btn-success"> Tambah </a>
		<br>
		<div align="middle"> 
		@if(!empty($data))
			<table class="table table-striped">
					<tr style="background-color: red; color: white">
						<td>nim</td>
						<td>Nama</td>
						<td>email</td>
						<td>kelas id</td>
						<td>Action</td>
					</tr>
							<tr>
							<?php foreach($data as $data_mhs) : ?>		
								<td>{{ $data_mhs->nim }}</td>
								<td>{{ $data_mhs->nama }}</td>
								<td>{{ $data_mhs->email }}</td>
								<td>{{ $data_mhs->kelas->kelas }}</td>
								<td>
									<a href="/student/{{$data_mhs->id}}" class="btn btn-warning"> Show </a>
									<a href="#" class="btn btn-warning"> Ubah </a>
									<form action="/student/{{$data_mhs->id}}" method="post">
										{{ csrf_field()  }}
										<input type="hidden" name="_method" value="delete">
										<input type="submit" class="btn btn-danger" value="Delete">
									</form>
								</td>
							</tr>
						<?php endforeach ?>
			</table>
			@else
				<!-- <p>{{ $bear_list }}</p> -->
				<p>Tidak ada data</p>
			@endif
			</div>
		</div>
		

		<!-- <footer class="footer">
			<div style="margin-left: 100;">
				<h4>Hatur Nuhun ke </h4>
			</div>
			<div style="margin-left: 100;">
				<img src="{{asset('img/bekraf.png')}}" width="110" height="70"/>
				<img src="{{asset('img/logomikti.png')}}" width="190" height="80"/>
				<img src="{{asset('img/telkom.png')}}" width="190" height="80"/>
				<img src="{{asset('img/dilo.png')}}" width="140" height="50"/>
			</div>
			<div style="float: right; margin-right: 100;">
				<h5>Copyright @ M Widyan 2016</h5>
			</div>
		</footer> -->
		<script>
			function myFunction(data) {
				var id = document.getElementById("idData").value;
				var nama = document.getElementById("nama").value;
				var alamat = document.getElementById("alamat").value;
				
			    alert("ini Id = " + id + ", nama = " + nama + ", alamat = " + alamat);
			    //alert("ini datanya = " + data);
			}
		</script>
	</body>
</html>