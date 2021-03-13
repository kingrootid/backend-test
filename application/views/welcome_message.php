<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		<h1 class="text-center"> Data Karyawan </h1>
		<div class="row">
			<div class="col-md-12">
				<button type="button" class="btn btn-primary mb-3" id="refresh">
					Refresh Data
				</button>
				<div class="card">
					<div class="card-header">
						Data Karyawan
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-box" id="example" style="width: 100%;">
								<thead>
									<tr>
										<th>#</th>
										<th>ID Reg</th>
										<th>Nama Karyawan</th>
										<th>Gaji</th>
										<th>Usia</th>
										<th>Foto</th>
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
	$(document).ready(function() {
		tabel = $('#example').DataTable({
			"processing": true,
			"serverSide": true,
			"language": {
				"emptyTable": "Data tidak ada",
				"paginate": {
					"first": "Pertama",
					"last": "Terakhir",
					"next": "Lanjut",
					"previous": "Kembali"
				},
				"processing": "Mohon tunggu data sedang diload"
			},
			"ajax": "<?php echo base_url('data/karyawan'); ?>",
		});
		$("#refresh").click(function() {
			$.ajax({
				type: "GET",
				dataType: "JSON",
				url: "<?php echo base_url('data/refresh'); ?>",
				success: function(data) {
					toastr.success(data.message);
					tabel.ajax.reload();
				}
			});
		})
	});
</script>

</html>