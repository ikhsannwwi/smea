<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	{{-- Bootstrap --}}
	{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
	<!-- My CSS -->
	<link rel="stylesheet" href="{{asset('adminhub/style.css')}}">
	{{-- <link rel="stylesheet" href="{{asset('adminhub/adminlte.min.css')}}"> --}}

	<link rel="icon" href="{{asset('images/icon/smea.ico')}}">



	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
				
			
			<li class="{{request()->is('administrator') ? 'active' : ''}}">
				<a href="/administrator">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="{{request()->is('admin-users','admin-tambahusers') ? 'active' : ''}}">
				<a href="/admin-users">
					<i class='bx bxs-navigation' ></i>
					<span class="text">User</span>
				</a>
			</li>
			<li class="{{request()->is('admin-ekstrakulikuler','admin-tambahekskuls') ? 'active' : ''}}">
				<a href="/admin-ekstrakulikuler">
					<i class='bx bx-heading'></i>
					<span class="text">EkstraKulikuler</span>
				</a>
			</li>
			<li class="{{request()->is('admin-agenda','admin-tambahagenda') ? 'active' : ''}}">
				<a href="/admin-agenda">
					{{-- <i class='bx bxs-doughnut-chart' ></i> --}}
					<i class='bx bxs-user-voice'></i>
					<span class="text">Agenda</span>
				</a>
			</li>
			<li class="{{request()->is('admin-guru','admin-tambahguru') ? 'active' : ''}}">
				<a href="/admin-guru">
					<i class='bx bxs-chat' ></i>
					<span class="text">Guru</span>
				</a>
			</li>
			<li class="{{request()->is('admin-jurusan','admin-tambahjurusan') ? 'active' : ''}}">
				<a href="admin-jurusan">
					<i class='bx bxs-graduation' ></i>
					<span class="text">Jurusan</span>
				</a>
			</li>
			<li>
				<a href="article">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Article</span>
				</a>
			</li>
			<li>
				<a href="footer">
					<i class='bx bxs-graduation' ></i>
					<span class="text">Footer</span>
				</a>
			</li>
		</ul>


		<ul class="side-menu top">
			<li>
				<a href="setting">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>

	</section>
	
	
	<!-- SIDEBAR -->

  @yield('content')

	
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
	  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
	  integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
	  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
	<script src="{{asset('adminhub/script.js')}}"></script>

	@stack('script')
</body>
</html>