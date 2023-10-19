
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-cabinet'></i>
			<span class="text">Project Listing</span>
		</a>
		<ul class="side-menu top">
            <x-leader.side-link :isActive="request()->routeIs('')" iconClass="bx bxs-group" text="Data Pengguna" url=""/>
            <x-leader.side-link :isActive="request()->routeIs('')" iconClass="bx bxs-group" text="Data Project" url=""/>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" class="logout" id="logout-link">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
					
			</li>
		</ul>
	</section>
	<!-- CONTENT -->