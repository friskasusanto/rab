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
							<li class="active">Supplier</li>
							<a href="{{action('backend\AdminController@index_supplier')}}">
							<button type="button" class="btn ink-reaction btn-primary active pull-right">List</button>
						</a>
						</ol>

					</div>
					<div class="section-body contain-lg">

						<!-- BEGIN BASIC VALIDATION -->
						<div class="row">
							<div class="row">
								<div class="col-md-12">
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
								<form class="form form-validate floating-label" novalidate="novalidate" method="POST" action= "">
									{{ csrf_field() }}
									<div class="card">
										<div class="card-body">
											<div class="form-group">
												<div class="col-sm-12">
							                      <label for="input-help-block" class="col-sm-4 control-label" style="color: #000">Status</label>
							                      <div class="col-sm-8">
							                          <select name="status" type="text" class="form-control">
							                              <option value="">--status--</option>
							                              <option value= "1">Active</option>
							                              <option value= "2">Tidak Active</option>
							                          </select>
							                      </div>
							                    </div>
						                  </div>
						                  <div class="form-group">
						                  	<div class="col-sm-12">
						                      <label for="input-help-block" class="col-sm-4 control-label" style="color: #000">Supplier</label>
						                      <div class="col-sm-8">
						                          <input name="supplier" type="text" class="form-control" placeholder="nama supplier">
						                      </div>
						                    </div>
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