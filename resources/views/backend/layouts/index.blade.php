<!DOCTYPE html>
<html lang="en">
	@include('backend.layouts.html')
	<body class="menubar-hoverable header-fixed ">

		
		@include('backend.layouts.header')
		@yield('content')
			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="../../html/dashboards/dashboard.html">
							<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
						</a>
					</div>
				</div>
				@include('backend.layouts.sidebar')
			</div><!--end #menubar-->
			<!-- END MENUBAR -->

			
		</div><!--end #base-->
		<!-- END BASE -->

		@include('backend.layouts.script')

	</body>
</html>
