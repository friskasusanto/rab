			<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="../../html/dashboards/dashboard.html" class="active">
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- Supplier -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Supplier</span>
							</a>
							<ul>
								<li><a href="{{action('backend\AdminController@index_supplier')}}"><span class="title">List</span></a></li>
								<li><a href="{{action('backend\AdminController@add_supplier')}}"><span class="title">Add</span></a></li>
							</ul>
						</li>
						<!-- Pengadaan alat kantor dan rumah tangga -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Alat kantor dan Rumah Tangga</span>
							</a>
							<ul>
								<li><a href="{{action('backend\AdminController@list_alatkantor')}}"><span class="title">List</span></a></li>
								<li><a href="{{action('backend\AdminController@index')}}"><span class="title">Add</span></a></li>
							</ul>
						</li>
						<!-- Pengadaan Alat Angkut Darat Bermotor -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Alat Angkut Darat Bermotor</span>
							</a>
							<ul>
								<li><a href="{{action('backend\AdminController@list_alatbermotor')}}"><span class="title">List</span></a></li>
								<li><a href="{{action('backend\AdminController@index_alatbermotor')}}"><span class="title">Add</span></a></li>
							</ul>
						</li>
						<!-- Pengadaan Alat Angkut Darat Tak Bermotor -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Alat Angkut Darat Tak Bermotor</span>
							</a>
							<ul>
								<li><a href="{{action('backend\AdminController@list_alattakbermotor')}}"><span class="title">List</span></a></li>
								<li><a href="{{action('backend\AdminController@index_alattakbermotor')}}"><span class="title">Add</span></a></li>
							</ul>
						</li>
						<!-- Pengadaan Alat Kalibrasi -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Alat Kalibrasi</span>
							</a>
							<ul>
								<li><a href="{{action('backend\AdminController@list_alatkalibrasi')}}"><span class="title">List</span></a></li>
								<li><a href="{{action('backend\AdminController@index_alatkalibrasi')}}"><span class="title">Add</span></a></li>
							</ul>
						</li>
						<!-- Pengadaan Meja dan Kursi Kerja/Rapat Pejabat -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Meja dan Kursi Kerja/Rapat Pejabat</span>
							</a>
							<ul>
								<li><a href="{{action('backend\AdminController@list_mejakursi_pejabat')}}"><span class="title">List</span></a></li>
								<li><a href="{{action('backend\AdminController@index_mejakursi_pejabat')}}"><span class="title">Add</span></a></li>
							</ul>
						</li>
						<!-- Belanja Modal Pengadaan Gedung & Bangunan BLUD -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Modal Pengadaan Gedung Bangunan BLUD</span>
							</a>
							<ul>
								<li><a href="{{action('backend\AdminController@list_bangunan_blud')}}"><span class="title">List</span></a></li>
								<li><a href="{{action('backend\AdminController@index_bangunan_blud')}}"><span class="title">Add</span></a></li>
							</ul>
						</li>

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->