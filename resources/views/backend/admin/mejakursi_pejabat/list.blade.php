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
							<li class="active">List Pengadaan Meja dan Kursi Kerja/Rapat Pejabat</li>
						</ol>
					</div>
					@include('layouts._flash')
					<!-- BEGIN TABLE HOVER -->
					<section class="style-default-bright">
						<div class="section-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Uraian</th>
										<th>Anggaran Bulanan Jumlah (Rp)</th>
										<th>Anggaran Prediksi Pengeluaran Jumlah (Rp)</th>
										<th class="text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
								@if(count($list) != 0)
									@foreach ($list as $key => $l)
									<tr>
										<td>{{++$key}}</td>
										<td>{{$l->uraian}}</td>
										<td>{{$l->anggaran_bulanan_jml_rp}}</td>
										<td>{{$l->anggaran_prediksi_pengeluaran_jml_rp}}</td>
										<td class="text-right">
											<a href="{{action('backend\AdminController@edit_alatkantor', $l->id)}}">
												<button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
											</a>

											<a href="{{action('backend\AdminController@delete_alatkantor', $l->id)}}">
												<button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
											</a>

											<a href="{{action('backend\AdminController@detail_alatkantor', $l->id)}}">
												<button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="See Detail"><i class="md-remove-red-eye"></i></button>
											</a>
										</td>
									</tr>
									@endforeach
								@else
	                                <tr>
	                                    <td colspan="5" class="text-center">KOSONG</td>
	                                </tr>
	                            @endif 
								</tbody>
							</table>
						</div><!--end .section-body -->
					</section>
					<!-- END TABLE HOVER -->
				</section>

			</div><!--end #content-->
			<!-- END CONTENT -->

@endsection