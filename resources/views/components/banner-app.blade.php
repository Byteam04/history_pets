<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

		<a href="/" class="logo d-flex align-items-center me-auto me-xl-0">			
			<img src="{{ asset('img/logo.png') }}" alt="">
			<h1 class="sitename">History Pets</h1>
			<span>.</span>
		</a>

		<nav id="navmenu" class="navmenu">
			<ul>
				<li><a href="#hero" class="active">Home<br></a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#services">Services</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#team">Team</a></li>
				<li><a href="#">Blog</a></li>
				<li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
					<ul>
				    	<li><a href="#">Dropdown 1</a></li>
							<li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
								<ul>
								  <li><a href="#">Deep Dropdown 1</a></li>
								  <li><a href="#">Deep Dropdown 2</a></li>
								  <li><a href="#">Deep Dropdown 3</a></li>
								  <li><a href="#">Deep Dropdown 4</a></li>
								  <li><a href="#">Deep Dropdown 5</a></li>
								</ul>
							</li>
					    <li><a href="#">Dropdown 2</a></li>
					    <li><a href="#">Dropdown 3</a></li>
					    <li><a href="#">Dropdown 4</a></li>
					</ul>
				  </li>
				  <li><a href="#contact">Contact</a></li>
			</ul>
			<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
		</nav>
	    <div class="d-flex">
            <a href="{{ route('login') }}" class="btn-getstarted"><i class="bi bi-person-circle mr-2"></i><span>Log in</span></a>
            <a href="{{ route('register') }}" class="btn-watch-video d-flex align-items-center ml-2 mr-2 "><i class="bi bi-person-vcard mr-2 fa-lg"></i><span>Register</span></a>
        </div>

    </div>
  </header>