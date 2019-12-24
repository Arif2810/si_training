<!DOCTYPE html>
<html>
<head>
  @include('templates.head')
  <title>Sistem Informasi Training</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    @include('templates.header')
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    @include('templates.sidebar')
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

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


  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    @include('templates.control_sidebar')
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

@include('templates.scripts')
</body>
</html>


