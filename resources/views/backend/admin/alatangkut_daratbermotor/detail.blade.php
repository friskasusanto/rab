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
						<a href="{{action('backend\AdminController@list_alatkantor')}}">
							<button type="button" class="btn ink-reaction btn-primary active pull-right">Back</button>
						</a>
					</div>
					<!-- BEGIN STRIPED TABLE -->
					<div class="row">
						<div class="col-lg-offset-1 col-md-10">
							<div class="card">
								<div class="card-body">
									<table class="table table-striped no-margin">
										<tbody>
											<tr>
												<td></td>
												<td>Uraian</td>
												<td>: {{$edit->uraian}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Bulan</td>
												<td>: {{$edit->bulan}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Tahun</td>
												<td>: {{$edit->tahun}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Bulan Volume</td>
												<td>: {{$edit->anggaran_bulanan_vol}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Bulanan Satuan</td>
												<td>: {{$edit->anggaran_bulanan_satuan}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Bulanan Harga Satuan</td>
												<td>: {{$edit->anggaran_bulanan_harga_satuan}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Bulanan Jumlah (Rp)</td>
												<td>: {{$edit->anggaran_bulanan_jml_rp}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Bulanan Bertambah/berkurang (Rp)</td>
												<td>: {{$edit->anggaran_bulanan_bertambahberkurang_rp}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Bulanan Bertambah/berkurang (%)</td>
												<td>: {{$edit->anggaran_bulanan_bertambahberkurang_persen}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Prediksi Pengeluaran Volume</td>
												<td>: {{$edit->anggaran_prediksi_pengeluaran_vol}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Prediksi Pengeluaran Satuan</td>
												<td>: {{$edit->anggaran_prediksi_pengeluaran_satuan}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Prediksi Pengeluaran Harga Satuan</td>
												<td>: {{$edit->anggaran_prediksi_pengeluaran_harga_satuan}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Prediksi Pengeluaran Jumlah Rupiah</td>
												<td>: {{$edit->anggaran_prediksi_pengeluaran_jml_rp}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Prediksi Pengeluaran Bertambah/berkurang (Rp)</td>
												<td>: {{$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_rp}}</td>
												<td></td>
											</tr>
											<tr>
												<td></td>
												<td>Anggaran Prediksi Pengeluaran Bertambah/berkurang (%)</td>
												<td>: {{$edit->anggaran_prediksi_pengeluaran_bertambahberkurang_persen}}</td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</div><!--end .card-body -->
							</div><!--end .card -->
						</div><!--end .col -->
					</div><!--end .row -->
					<!-- END STRIPED TABLE -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

@endsection