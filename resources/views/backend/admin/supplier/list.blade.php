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
							<li class="active">List Supplier</li>
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
										<th>Id</th>
										<th>Supplier</th>
										<th>Status</th>
										<th class="text-right">Actions</th>
									</tr>
								</thead>
								<tbody>
								@if(count($list) != 0)
									@foreach ($list as $key => $l)
									<tr>
										<td>{{++$key}}</td>
										<td>{{$l->id}}</td>
										<td>{{$l->supplier}}</td>
										@if ($l->status == 1)
											<td>Active</td>
										@elseif ($l->status == 2)
											<td>Tidak Active</td>
										@else
											<td>Kosong</td>
										@endif
										<td class="text-right">
											<a href="{{action('backend\AdminController@edit_supplier', $l->id)}}">
												<button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Edit row"><i class="fa fa-pencil"></i></button>
											</a>

											<a href="{{action('backend\AdminController@delete_supplier', $l->id)}}">
												<button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Delete row"><i class="fa fa-trash-o"></i></button>
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