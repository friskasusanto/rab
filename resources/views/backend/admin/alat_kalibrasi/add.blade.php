@extends('backend.layouts.index')
@section('content')
	<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section>
					<div class="section-header">
						<ol class="breadcrumb">
							<li class="active">Pengadaan Alat Kalibrasi</li>
							<a href="{{action('backend\AdminController@list_alatkalibrasi')}}">
							<button type="button" class="btn ink-reaction btn-primary active pull-right">List</button>
						</a>
						</ol>

					</div>
					<div class="section-body contain-lg">

						<!-- BEGIN BASIC VALIDATION -->
						<div class="row">
							<div class="row">
								<div class="col-md-12">
									<div class="card card-bordered style-primary">
										<div class="card-body">
											<p>Kosongi Kolom Jika Data Kosong !!!</p>
										</div><!--end .card-body -->
									</div><!--end .card -->
								</div><!--end .col -->
							</div>
							@include('layouts._flash')
							@if (count($errors) > 0)
			                <div class="alert alert-danger">
			                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
			                    <ul>
			                        @foreach ($errors->all() as $error)
			                            <li>{{ $error }}</li>
			                        @endforeach
			                    </ul>
			                </div>
			                @endif
							<div class="col-lg-offset-1 col-md-10">
								<form class="form form-validate floating-label" novalidate="novalidate" method="POST" action= "{{action('backend\AdminController@add_alatkalibrasi')}}">
									{{ csrf_field() }}
									<div class="card">
										<div class="card-body">
											<div class="form-group">
												<input type="text" class="form-control" id="Name1" name="uraian" required data-rule-minlength="2">
												<label for="Name1">Uraian</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Email1" name="anggaran_bulanan_vol" required>
												<label for="Email1">Anggaran Bulanan Volume</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Password1" name="anggaran_bulanan_satuan" required data-rule-minlength="5">
												<label for="Password1">Anggaran Bulanan Satuan</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Password1" name="anggaran_bulanan_harga_satuan" required data-rule-minlength="5">
												<label for="Password1">Anggaran Bulanan Harga Satuan</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Password1" name="anggaran_bulanan_jml_rp" required data-rule-minlength="5">
												<label for="Password1">Anggaran Bulanan Jumlah (Rp)</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Password1" name="anggaran_bulanan_bertambahberkurang_rp" required data-rule-minlength="5">
												<label for="Password1">Anggaran Bulanan Bertambah/Berkurang (Rp)</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Password1" name="anggaran_bulanan_bertambahberkurang_persen" required data-rule-minlength="5">
												<label for="Password1">Anggaran Bulanan Bertambah/Berkurang (%)</label>
											</div>

											<div class="form-group">
												<input type="text" class="form-control" id="Name1" name="anggaran_prediksi_pengeluaran_vol" required data-rule-minlength="2">
												<label for="Name1">Prediksi Pengeluaran Volume</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Password1" name="anggaran_prediksi_pengeluaran_satuan" required data-rule-minlength="5">
												<label for="Password1">Prediksi Pengeluaran Satuan</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Password1" name="anggaran_prediksi_pengeluaran_harga_satuan" required data-rule-minlength="5">
												<label for="Password1">Prediksi Pengeluaran Harga Satuan</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Password1" name="anggaran_prediksi_pengeluaran_jml_rp" required data-rule-minlength="5">
												<label for="Password1">Prediksi Pengeluaran Jumlah (Rp)</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Password1" name="anggaran_prediksi_pengeluaran_bertambahberkurang_rp" required data-rule-minlength="5">
												<label for="Password1">Prediksi Pengeluaran Bertambah/Berkurang (Rp)</label>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" id="Password1" name="anggaran_prediksi_pengeluaran_bertambahberkurang_persen" required data-rule-minlength="5">
												<label for="Password1">Prediksi Pengeluaran Bertambah/Berkurang (%)</label>
											</div>
										</div><!--end .card-body -->
										<div class="card-actionbar">
											<div class="card-actionbar-row">
												<button type="submit" class="btn btn-flat btn-primary ink-reaction">Kirim Data</button>
											</div>
										</div><!--end .card-actionbar -->
									</div><!--end .card -->
									<!-- <em class="text-caption">Basic validation</em> -->
								</form>
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END BASIC VALIDATION -->

					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->
@endsection