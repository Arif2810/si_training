<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Halaman About</title>
</head>
<body>

<section>
	<div class="container">
		<div class="row text-center">
			<h2>About Training</h2>
			<hr class="hr">
		</div>
		<div class="row">
			<p>Training ( Pelatihan )</p>
			<p>
			Suatu bentuk kegiatan jangka pendek yang bertujuan khusus untuk menyesuaikan pengetahuan, keahlian, dan atau perilaku orang (karyawan) dengan pekerjaannya.</p>
			<p>
			Jenis-jenistraining :<br>
			&nbsp; &nbsp;1.	Training Internal <br>
			&nbsp;&nbsp;&nbsp;Training yang dilakukan di dalam lokasi pabrik PT. IKPP Perawang dan Instrukturnya adalah karyawan PT. IKPP Perawang <br>
			&nbsp;&nbsp;2.	Training Eksternal <br>
			&nbsp;&nbsp;&nbsp;Training yang dilakukan di luar lokasipabrik PT. IKPP Perawang <br>
			&nbsp;&nbsp;3.	Training In-House <br>
			&nbsp;&nbsp;&nbsp;Training yang dilakukan di dalam lokasi pabrik PT. IKPP Perawang,namun Instrukturnya bukan karyawan PT. IKPP Perawang. <br>
			&nbsp;&nbsp;4.	Training Matrik <br>
			&nbsp;&nbsp;&nbsp;Daftar Training yang disesuaikan dengan kebutuhan karyawan berdasarkan posisi kerja, area kerja dan jenis pekerjaan. </p>

			<p>Tujuan Training <br>

			&nbsp;&nbsp;•	Untuk meningkatkan produktivitas. <br>
			&nbsp;&nbsp;•	Untuk meningkatkan kesetabilan dan keluwesan organisasi. <br>
			&nbsp;&nbsp;•	Untuk mengurangi pengawasan. <br>
			&nbsp;&nbsp;•	Untuk memperbaiki moral. <br>
			&nbsp;&nbsp;•	Untuk mengurangi kemungkinan terjadinya kecelakaan. <br>
			</p>
		</div>
		<div class="row">
			<a href="{{ url('/') }}"> <button class="btn btn-primary btn-sm"><i class="#"></i>HOME</button></a>
		</div>
	</div>
</section>




<!-- jQuery 3 -->
<script src="{{ url('assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ url('assets/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('assets/dist/js/demo.js') }}"></script>

</body>
</html>