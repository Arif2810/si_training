<!DOCTYPE html>
<html>
<head>
	@include('templates.head')
  <title>Galeri Foto</title>

	<style type="text/css">
		.show_image img{
			width: 100%;
		}
	</style>
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
    <div class="container text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2" style="padding-top:20px;">
					@include('admin/notification')
					@include('admin/validation')
          <h2>Galeri Foto</h2>
          <hr>
					@if(Auth::user()->akses == 'admin')
          	<a href="#myModal" data-toggle="modal" class="btn btn-primary"><i class="fa fa-upload"></i> Upload Image</a>
					@endif
        </div>
      </div>
    </div>

		<div class="container" style="margin-top:20px;">
			<div class="row">
				@foreach($galeries as $galery)
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="show_image">
								<a href="#">
									<img src="{{asset('image/'.$galery->image)}}" alt="gambar">
								</a>
							</div>
							<div class="">
								<h4>{{$galery->deskripsi}}</h4>
								@if(Auth::user()->akses == 'admin')
									<button class="btn btn-danger btn-xs" data-delid={{$galery->id_galeri}} data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
								@endif
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
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

<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<!-- modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: rgb(200, 200, 200)">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form action="{{route('galery.destroy', 'test')}}" method="post">
        {{method_field('delete')}}
        {{csrf_field()}}
        <div class="modal-body" style="background-color: rgb(230, 230, 230)">
          <p class="text-center">Apakah anda yakin akan menghapus ini?</p>
          <input type="hidden" name="id_galeri" id="del_id" value="">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger">Ya, hapus ini</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak, kembali</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal lagi -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="" action="{{ url('/galery') }}" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
          <div class="form-group">
            <input type="file" name="image" value="" class="form-control">
          </div>
          <div class="form-group">
            <textarea name="deskripsi" class="form-control" placeholder="input text..."></textarea>
          </div>
          <button type="submit" class="btn btn-info">Save</button>
        </form>

      </div>
    </div>
  </div>
</div>
@include('templates.modal')
</body>
</html>
