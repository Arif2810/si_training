<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
	<title>Edit Route</title>
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
		    <section class="content-header">
		      <h1>Data Route</h1>
		    </section>

		    <section class="content">
		      	<div class="row">
		        	<div class="col-xs-12">
		          		<div class="box">
		            		<div class="box-header">
		            			<div class="box-header">
					              <h5 class="box-title">Edit rute training</h5>
					            </div>
					            <div class="box-body">
					            	@include('admin/validation')
					            	@include('admin/notification')
					            	<form action="{{ url('/route') }}/{{ $routes->id_rute }}" method="post">
					            		<div>
											<label>Rute</label>
											<input class="form-control" type="text" name="nama_rute" value="{{ $routes->nama_rute }}">
										</div><br><br>								
										<div>
											<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
											<input type="reset" class="btn btn-danger" value="Reset">
											{{csrf_field()}}
											<input type="hidden" name="_method" value="PUT">
										</div>
					            	</form>
					            </div>
		            		</div>
		        		</div>
		    		</div>
				</div>
			</section>
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			@include('templates.control_sidebar')
		</aside>
	</div>
@include('templates.scripts')
</body>
</html>