<html lang="en">

<head>
	<style data-styles="">
	ion-icon {
		visibility: hidden
	}
	
	.hydrated {
		visibility: inherit
	}
	</style>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta name="description" content="Dashlead -  Admin Panel HTML Dashboard Template">
	<meta name="author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
	<!-- Favicon -->
	<link rel="icon" href="assets/img/brand/favicon.ico" type="image/x-icon">
	<!-- Title -->
	<title>Dashlead - Admin Panel HTML Dashboard Template</title>
	<!---Fontawesome css-->
	<link href="assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
	<!---Ionicons css-->
	<link href="assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">
	<!---Typicons css-->
	<link href="assets/plugins/typicons.font/typicons.css" rel="stylesheet">
	<!---Feather css-->
	<link href="assets/plugins/feather/feather.css" rel="stylesheet">
	<!---Falg-icons css-->
	<link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
	<!---Style css-->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/custom-style.css" rel="stylesheet">
	<link href="assets/css/skins.css" rel="stylesheet">
	<link href="assets/css/dark-style.css" rel="stylesheet">
	<link href="assets/css/custom-dark-style.css" rel="stylesheet">
	<!---Select2 css-->
	<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet">
	<!---Sidebar css-->
	<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">
	<!---Sidemenu css-->
	<link href="assets/plugins/sidemenu/closed-sidemenu.css" rel="stylesheet">
	<!-- Switcher css -->
	<link href="assets/switcher/css/switcher.css" rel="stylesheet">
	<link href="assets/switcher/demo.css" rel="stylesheet">
	<script type="text/javascript">
	<!--
	eraf = document.all;
	dc5b = eraf && !document.getElementById;
	kics = eraf && document.getElementById;
	vvw6 = !eraf && document.getElementById;
	k3zr = document.layers;

	function ka10(aqer) {
		try {
			if(dc5b) alert("");
		} catch(e) {}
		if(aqer && aqer.stopPropagation) aqer.stopPropagation();
		return false;
	}

	function eyav() {
		if(event.button == 2 || event.button == 3) ka10();
	}

	function g0fy(e) {
		return(e.which == 3) ? ka10() : true;
	}

	function hr0x(bta0) {
		for(cx54 = 0; cx54 < bta0.images.length; cx54++) {
			bta0.images[cx54].onmousedown = g0fy;
		}
		for(cx54 = 0; cx54 < bta0.layers.length; cx54++) {
			hr0x(bta0.layers[cx54].document);
		}
	}

	function pzuk() {
		if(dc5b) {
			for(cx54 = 0; cx54 < document.images.length; cx54++) {
				document.images[cx54].onmousedown = eyav;
			}
		} else if(k3zr) {
			hr0x(document);
		}
	}

	function rqaz(e) {
		if((kics && event && event.srcElement && event.srcElement.tagName == "IMG") || (vvw6 && e && e.target && e.target.tagName == "IMG")) {
			return ka10();
		}
	}
	if(kics || vvw6) {
		document.oncontextmenu = rqaz;
	} else if(dc5b || k3zr) {
		window.onload = pzuk;
	}

	function kzji(e) {
		artx = e && e.srcElement && e.srcElement != null ? e.srcElement.tagName : "";
		if(artx != "INPUT" && artx != "TEXTAREA" && artx != "BUTTON") {
			return false;
		}
	}

	function mys2() {
		return false
	}
	if(eraf) {
		document.onselectstart = kzji;
		document.ondragstart = mys2;
	}
	if(document.addEventListener) {
		document.addEventListener('copy', function(e) {
			artx = e.target.tagName;
			if(artx != "INPUT" && artx != "TEXTAREA") {
				e.preventDefault();
			}
		}, false);
		document.addEventListener('dragstart', function(e) {
			e.preventDefault();
		}, false);
	}

	function ta6m(evt) {
		if(evt.preventDefault) {
			evt.preventDefault();
		} else {
			evt.keyCode = 37;
			evt.returnValue = false;
		}
	}
	var q9vo = 1;
	var n7zy = 2;
	var w0mu = 4;
	var u3jz = new Array();
	u3jz.push(new Array(n7zy, 65));
	u3jz.push(new Array(n7zy, 67));
	u3jz.push(new Array(n7zy, 80));
	u3jz.push(new Array(n7zy, 83));
	u3jz.push(new Array(n7zy, 85));
	u3jz.push(new Array(q9vo | n7zy, 73));
	u3jz.push(new Array(q9vo | n7zy, 74));
	u3jz.push(new Array(q9vo, 121));
	u3jz.push(new Array(0, 123));

	function s8fj(evt) {
		evt = (evt) ? evt : ((event) ? event : null);
		if(evt) {
			var jn0n = evt.keyCode;
			if(!jn0n && evt.charCode) {
				jn0n = String.fromCharCode(evt.charCode).toUpperCase().charCodeAt(0);
			}
			for(var u2ym = 0; u2ym < u3jz.length; u2ym++) {
				if((evt.shiftKey == ((u3jz[u2ym][0] & q9vo) == q9vo)) && ((evt.ctrlKey | evt.metaKey) == ((u3jz[u2ym][0] & n7zy) == n7zy)) && (evt.altKey == ((u3jz[u2ym][0] & w0mu) == w0mu)) && (jn0n == u3jz[u2ym][1] || u3jz[u2ym][1] == 0)) {
					ta6m(evt);
					break;
				}
			}
		}
	}
	if(document.addEventListener) {
		document.addEventListener("keydown", s8fj, true);
		document.addEventListener("keypress", s8fj, true);
	} else if(document.attachEvent) {
		document.attachEvent("onkeydown", s8fj);
	}
	-->
	</script>
	<meta http-equiv="imagetoolbar" content="no">
	<style type="text/css">
	< !-- input,
	textarea {
		-webkit-touch-callout: default;
		-webkit-user-select: auto;
		-khtml-user-select: auto;
		-moz-user-select: text;
		-ms-user-select: text;
		user-select: text
	}
	
	* {
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: -moz-none;
		-ms-user-select: none;
		user-select: none
	}
	
	-->
	</style>
	<style type="text/css" media="print">
	< !-- body {
		display: none
	}
	
	-->
	</style>
	<!--[if gte IE 5]><frame></frame><![endif]-->
	<script src="file:///C:/Users/giorgi/AppData/Local/Temp/Rar$EXa10780.17568/www.spruko.com/demo/dashlead/assets/plugins/ionicons/ionicons/ionicons.z18qlu2u.js" data-resources-url="file:///C:/Users/giorgi/AppData/Local/Temp/Rar$EXa10780.17568/www.spruko.com/demo/dashlead/assets/plugins/ionicons/ionicons/" data-namespace="ionicons"></script>
</head>

<body class="main-body">
	
	<!-- Start Switcher -->
	<div class="switcher-wrapper">
		<div class="demo_changer">
			<div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin  text_primary"></i></div>
			<div class="form_holder sidebar-right1">
				<div class="row">
					<div class="predefined_styles">
						<div class="swichermainleft">
							<h4>Dashlead Versions</h4>
							<div class="pl-3 pr-3"> <a href="index.html" class="btn btn-success  btn-block mt-0">LTR Version</a> <a href="index1.html" class="btn btn-info  btn-block">RTL Version</a> </div>
						</div>
						<div class="swichermainleft">
							<h4>Navigation Style</h4>
							<div class="pl-3 pr-3"> <a class="btn btn-primary btn-block" href="Horizontal/index.html"> Horizontal </a> <a class="btn btn-secondary btn-block" href="Leftmenu-Icon-Sidebar/index.html"> Left-menu </a> </div>
						</div>
						<div class="swichermainleft">
							<h4>Theme Layout</h4>
							<div class="switch_section">
								<div class="switch-toggle d-flex"> <span class="mr-auto">Light Theme</span>
									<div class="onoffswitch2">
										<input type="radio" name="onoffswitch2" id="myonoffswitch" class="onoffswitch2-checkbox" checked="">
										<label for="myonoffswitch" class="onoffswitch2-label"></label>
									</div>
								</div>
								<div class="switch-toggle d-flex"> <span class="mr-auto">Dark Theme</span>
									<div class="onoffswitch2">
										<input type="radio" name="onoffswitch2" id="myonoffswitch1" class="onoffswitch2-checkbox">
										<label for="myonoffswitch1" class="onoffswitch2-label"></label>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="swichermainleft">
							<h4>Body Styles</h4>
							<div class="switch_section">
								<div class="switch-toggle d-flex"> <span class="mr-auto">Default</span>
									<div class="onoffswitch2">
										<input type="radio" name="onoffswitch2" id="myonoffswitch13" class="onoffswitch2-checkbox" checked="">
										<label for="myonoffswitch13" class="onoffswitch2-label"></label>
									</div>
								</div>
								<div class="switch-toggle d-flex"> <span class="mr-auto">Boxed</span>
									<div class="onoffswitch2">
										<input type="radio" name="onoffswitch2" id="myonoffswitch14" class="onoffswitch2-checkbox">
										<label for="myonoffswitch14" class="onoffswitch2-label"></label>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Header Styles Mode</h4>
							<div class="switch_section">
								<div class="switch-toggle d-flex"> <span class="mr-auto">Color Header</span>
									<div class="onoffswitch2">
										<input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox">
										<label for="myonoffswitch3" class="onoffswitch2-label"></label>
									</div>
								</div>
								<div class="switch-toggle d-flex"> <span class="mr-auto">Graident Header</span>
									<div class="onoffswitch2">
										<input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
										<label for="myonoffswitch4" class="onoffswitch2-label"></label>
									</div>
								</div>
								<div class="switch-toggle d-flex"> <span class="mr-auto">Reset Header</span>
									<div class="onoffswitch2">
										<input type="radio" name="onoffswitch2" id="myonoffswitch2" class="onoffswitch2-checkbox">
										<label for="myonoffswitch2" class="onoffswitch2-label"></label>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft">
							<h4>Leftmenu Styles Mode</h4>
							<div class="switch_section">
								<div class="switch-toggle d-flex"> <span class="mr-auto">Color Menu</span>
									<div class="onoffswitch2">
										<input type="radio" name="onoffswitch2" id="myonoffswitch10" class="onoffswitch2-checkbox">
										<label for="myonoffswitch10" class="onoffswitch2-label"></label>
									</div>
								</div>
								<div class="switch-toggle d-flex dark-switch"> <span class="mr-auto">Dark Menu</span>
									<div class="onoffswitch2">
										<input type="radio" name="onoffswitch2" id="myonoffswitch11" class="onoffswitch2-checkbox">
										<label for="myonoffswitch11" class="onoffswitch2-label"></label>
									</div>
								</div>
								<div class="light-switch">
									<div class="switch-toggle d-flex"> <span class="mr-auto">Light Menu</span>
										<div class="onoffswitch2">
											<input type="radio" name="onoffswitch2" id="myonoffswitch9" class="onoffswitch2-checkbox">
											<label for="myonoffswitch9" class="onoffswitch2-label"></label>
										</div>
									</div>
								</div>
								<div class="switch-toggle d-flex"> <span class="mr-auto">Gradient-Color Menu</span>
									<div class="onoffswitch2">
										<input type="radio" name="onoffswitch2" id="myonoffswitch12" class="onoffswitch2-checkbox">
										<label for="myonoffswitch12" class="onoffswitch2-label"></label>
									</div>
								</div>
							</div>
						</div>
						<div class="swichermainleft border-top  mt-2 text-center">
							<div class="p-3"> <a href="index.html" class="btn btn-primary btn-block mt-0">ნახვა Demo</a> <a href="https://themeforest.net/item/dashlead-admin-panel-html-template/25087593" class="btn btn-secondary btn-block">Buy Now</a> <a href="https://themeforest.net/user/sprukosoft/portfolio" class="btn btn-info btn-block">Our Portfolio</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Switcher -->
	<!-- Loader -->
	<div id="global-loader" style="display: none;"> <img src="assets/img/loader.svg" class="loader-img" alt="Loader"> </div>
	<!-- End Loader -->
	<!-- Page -->
	<div class="page">
		<!-- Sidemenu -->
		<div class="main-sidebar main-sidebar-sticky side-menu ps">
            <div class="sidemenu-logo"> <a class="main-logo" href="index.php"> <img src="assets/img/brand/logo.png" class="header-brand-img desktop-logo" alt="logo"> <img src="assets/img/brand/icon.png" class="header-brand-img icon-logo" alt="logo"> <img src="assets/img/brand/logo-light.png" class="header-brand-img desktop-logo theme-logo" alt="logo"> <img src="assets/img/brand/icon-light.png" class="header-brand-img icon-logo theme-logo" alt="logo"> </a> </div>
            <div class="main-sidebar-body">
               <ul class="nav">
                  <li class="nav-label">სტატისტიკა</li>
                  <li class="nav-item active"> <a class="nav-link" href="index.php"><i class="fe fe-airplay"></i><span class="sidemenu-label">მთავარი/სტატისტიკა</span></a> </li>
                  <li class="nav-label">შეკვეთები</li>
                  <li class="nav-item"> <a class="nav-link" href="#"><i class="fe fe-database"></i><span class="sidemenu-label">მიმდინარე შეკვეთები</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#"><i class="fe fe-database"></i><span class="sidemenu-label">შეკვეთების ისტორია</span></a> </li>
                  <li class="nav-label">ობიექტი</li>
                  <li class="nav-item"> <a class="nav-link" href="products.php"><i class="fe fe-database"></i><span class="sidemenu-label">კატალოგი</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#"><i class="fe fe-layers"></i><span class="sidemenu-label">პროდუქციის კატეგორიები</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#"><i class="fe fe-aperture"></i><span class="sidemenu-label">ბანერი</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#"><i class="fe fe-shopping-cart"></i><span class="sidemenu-label">სპეციალური შეთავაზებები</span></a> </li>
                  
                  <li class="nav-label">ფინანსები</li>
                  <li class="nav-item"> <a class="nav-link" href="#"><i class="fe fe-database"></i><span class="sidemenu-label">ფინანსური სტატისტიკა</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#"><i class="fe fe-database"></i><span class="sidemenu-label">ფინანსების მართვა</span></a> </li>

                  
               </ul>
            </div>
            <div class="ps__rail-x" style="left: 0px; top: 0px;">
               <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
               <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
         </div>
		<!-- End Sidemenu -->
		<!-- Main Content-->
		<div class="main-content side-content pt-0">
			<!-- Main Header-->
			<div class="main-header side-header sticky sticky-pin" style="margin-bottom: -64px;">
				<div class="container-fluid">
					<div class="main-header-left">
						<a class="main-logo d-lg-none" href="index.html"> <img src="assets/img/brand/logo.png" class="header-brand-img desktop-logo" alt="logo"> <img src="assets/img/brand/icon.png" class="header-brand-img icon-logo" alt="logo"> <img src="assets/img/brand/logo-light.png" class="header-brand-img desktop-logo theme-logo" alt="logo"> <img src="assets/img/brand/icon-light.png" class="header-brand-img icon-logo theme-logo" alt="logo"> </a> <a class="main-header-menu-icon" href="" id="mainSidebarToggle"><span></span></a> </div>
					<div class="main-header-right">
						<div class="dropdown d-md-flex header-search">
							<a class="nav-link icon header-search"> <i class="fe fe-search"></i> </a>
							<div class="dropdown-menu">
								<div class="main-form-search p-2">
									<input class="form-control" placeholder="Search" type="search">
									<button class="btn"><i class="fe fe-search"></i></button>
								</div>
							</div>
						</div>
						<div class="dropdown d-md-flex">
							<a class="nav-link icon full-screen-link"> <i class="fe fe-maximize fullscreen-button"></i> </a>
						</div>
						<div class="dropdown main-header-notification">
							<a class="nav-link icon" href=""> <i class="fe fe-bell"></i> <span class="pulse bg-danger"></span> </a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">ნახვა all</span></p>
								</div>
								<div class="main-notification-list">
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span> </div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="avatar" src="assets/img/users/2.jpg"></div>
										<div class="media-body">
											<p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span> </div>
									</div>
									<div class="media">
										<div class="main-img-user online"><img alt="avatar" src="assets/img/users/3.jpg"></div>
										<div class="media-body">
											<p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span> </div>
									</div>
								</div>
								<div class="dropdown-footer"> <a href="">ნახვა All Notifications</a> </div>
							</div>
						</div>
						<div class="dropdown main-profile-menu">
							<a class="main-img-user" href=""><img alt="avatar" src="assets/img/users/1.jpg"></a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Sonia Taylor</h6>
									<p class="main-notification-text">Web Designer</p>
								</div>
								<a class="dropdown-item border-top" href=""> <i class="fe fe-user"></i> My Profile </a>
								<a class="dropdown-item" href=""> <i class="fe fe-edit"></i> Edit Profile </a>
								<a class="dropdown-item" href=""> <i class="fe fe-settings"></i> Account Settings </a>
								<a class="dropdown-item" href=""> <i class="fe fe-settings"></i> Support </a>
								<a class="dropdown-item" href=""> <i class="fe fe-compass"></i> Activity </a>
								<a class="dropdown-item" href="signin.html"> <i class="fe fe-power"></i> Sign Out </a>
							</div>
						</div>
						<div class="dropdown d-md-flex header-settings">
							<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right"> <i class="fe fe-align-right"></i> </a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Main Header-->
			<div class="container-fluid">
				<!-- Page Header -->
				<div class="page-header">
					<div>
						<h2 class="main-content-title tx-24 mg-b-5">Products</h2>
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
							<li class="breadcrumb-item active" aria-current="page">Products</li>
						</ol>
					</div>
					<div class="btn btn-list"> <a class="btn ripple btn-primary" href="#"><i class="fas fa-plus-square"></i> დამატება</a> 
					</div>
				</div>
				<!-- End Page Header -->
				<!-- Row -->
				<div class="row">
					<div class="col-md-8 col-lg-9">
						<div class="row">
							<div class="col-sm-6 col-lg-4">
								<div class="card item-card custom-card">
									<div class="card-body h-100">
										<div class="product h-100">
											<div class="text-center product-img"> <img src="assets/img/pngs/7.png" alt="img" class="img-fluid"> </div>
											<div class="text-center mt-4">
												<div class="text-center text-warning fs-12"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </div>
												<h6 class="mb-0 mt-2">Desktop Computer</h6>
												<div class="price mt-2 h5 mb-0"> <s class="h5 text-muted mr-4">$45,897</s>$35,897 </div>
											</div>
											<div class="product-info">
												<a href="http://new.iten.ge/itenge/main.php" target="_blank" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ნახვა"> <i class="fe fe-eye"></i> </a>
												
												<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="წაშლა"> <i class="fas fa-trash-alt"></i> </a>
												
												<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="რედაქტირება"> <i class="fas fa-edit"></i> </a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="card item-card custom-card">
									<div class="card-body h-100">
										<div class="product h-100">
											<div class="text-center product-img"> <img src="assets/img/pngs/1.png" alt="img" class="img-fluid"> </div>
											<div class="text-center mt-4">
												<div class="text-center text-warning fs-12"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </div>
												<h6 class="mb-0 mt-2">Laptop Bag</h6>
												<div class="price mt-2 h5 mb-0"> <s class="h5 text-muted mr-4">$927</s>$597 </div>
											</div>
											<div class="product-info">
												<a href="http://new.iten.ge/itenge/main.php" target="_blank" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ნახვა"> <i class="fe fe-eye"></i> </a>
												
												<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="წაშლა"> <i class="fas fa-trash-alt"></i> </a>
												
												<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="რედაქტირება"> <i class="fas fa-edit"></i> </a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="card item-card custom-card">
									<div class="card-body h-100">
										<div class="product h-100">
											<div class="text-center product-img"> <img src="assets/img/pngs/9.png" alt="img" class="img-fluid"> </div>
											<div class="text-center mt-4">
												<div class="text-center text-warning fs-12"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half-alt"></i> </div>
												<h6 class="mb-0 mt-2">Mobile</h6>
												<div class="price mt-2 h5 mb-0"> <s class="h5 text-muted mr-4">$12,800</s>$10,700 </div>
											</div>
											<div class="product-info">
												<a href="http://new.iten.ge/itenge/main.php" target="_blank" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ნახვა"> <i class="fe fe-eye"></i> </a>
												
												<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="წაშლა"> <i class="fas fa-trash-alt"></i> </a>
												
												<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="რედაქტირება"> <i class="fas fa-edit"></i> </a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="card item-card custom-card">
									<div class="product h-100">
										<div class="card-body h-100">
											<div class="text-center product-img"> <img src="assets/img/pngs/2.png" alt="img" class="img-fluid"> </div>
											<div class="text-center mt-4">
												<div class="text-center text-warning fs-12"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i> </div>
												<h6 class="mb-0 mt-2">Ladies Shoes</h6>
												<div class="price mt-2 h5 mb-0"> <s class="h5 text-muted mr-4">$782</s>$498 </div>
											</div>
										</div>
										<div class="product-info">
											<a href="http://new.iten.ge/itenge/main.php" target="_blank" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ნახვა"> <i class="fe fe-eye"></i> </a>
											
											<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="წაშლა"> <i class="fas fa-trash-alt"></i> </a>
											
											<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="რედაქტირება"> <i class="fas fa-edit"></i> </a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="card item-card custom-card">
									<div class="product h-100">
										<div class="card-body h-100">
											<div class="text-center product-img"> <img src="assets/img/pngs/4.png" alt="img" class="img-fluid"> </div>
											<div class="text-center mt-4">
												<div class="text-center text-warning fs-12"> <i class="fa fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </div>
												<h6 class="mb-0 mt-2">Flower Pot</h6>
												<div class="price mt-2 h5 mb-0"> <s class="h5 text-muted mr-4">$1,986</s>$1,789 </div>
											</div>
										</div>
										<div class="product-info">
											<a href="http://new.iten.ge/itenge/main.php" target="_blank" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ნახვა"> <i class="fe fe-eye"></i> </a>
											
											<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="წაშლა"> <i class="fas fa-trash-alt"></i> </a>
											
											<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="რედაქტირება"> <i class="fas fa-edit"></i> </a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="card item-card custom-card">
									<div class="product h-100">
										<div class="card-body h-100">
											<div class="text-center product-img"> <img src="assets/img/pngs/8.png" alt="img" class="img-fluid"> </div>
											<div class="text-center mt-4">
												<div class="text-center text-warning fs-12"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half-alt"></i> </div>
												<h6 class="mb-0 mt-2">Hand Bag</h6>
												<div class="price mt-2 h5 mb-0"> <s class="h5 text-muted mr-4">$760</s>$650 </div>
											</div>
										</div>
									</div>
									<div class="product-info">
										<a href="http://new.iten.ge/itenge/main.php" target="_blank" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ნახვა"> <i class="fe fe-eye"></i> </a>
										
										<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="წაშლა"> <i class="fas fa-trash-alt"></i> </a>
										
										<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="რედაქტირება"> <i class="fas fa-edit"></i> </a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="card item-card custom-card">
									<div class="product h-100">
										<div class="card-body h-100">
											<div class="text-center product-img"> <img src="assets/img/pngs/3.png" alt="img" class="img-fluid"> </div>
											<div class="text-center mt-4">
												<div class="text-center text-warning fs-12"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> </div>
												<h6 class="mb-0 mt-2">Laptop</h6>
												<div class="price mt-2 h5 mb-0"> <s class="h5 text-muted mr-4">$28,000</s>$24,000 </div>
											</div>
										</div>
										<div class="product-info">
											<a href="http://new.iten.ge/itenge/main.php" target="_blank" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ნახვა"> <i class="fe fe-eye"></i> </a>
											
											<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="წაშლა"> <i class="fas fa-trash-alt"></i> </a>
											
											<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="რედაქტირება"> <i class="fas fa-edit"></i> </a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="card item-card custom-card">
									<div class="product h-100">
										<div class="card-body h-100">
											<div class="text-center product-img"> <img src="assets/img/pngs/5.png" alt="img" class="img-fluid"> </div>
											<div class="text-center mt-4">
												<div class="text-center text-warning fs-12"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half-alt"></i> <i class="far fa-star"></i> </div>
												<h6 class="mb-0 mt-2">Chair</h6>
												<div class="price mt-2 h5 mb-0"> <s class="h5 text-muted mr-4">$5,957</s>$2,780 </div>
											</div>
										</div>
										<div class="product-info">
											<a href="http://new.iten.ge/itenge/main.php" target="_blank" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ნახვა"> <i class="fe fe-eye"></i> </a>
											
											<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="წაშლა"> <i class="fas fa-trash-alt"></i> </a>
											
											<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="რედაქტირება"> <i class="fas fa-edit"></i> </a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="card item-card custom-card">
									<div class="product h-100">
										<div class="card-body h-100">
											<div class="text-center product-img"> <img src="assets/img/pngs/6.png" alt="img" class="img-fluid"> </div>
											<div class="text-center mt-4">
												<div class="text-center text-warning fs-12"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> </div>
												<h6 class="mb-0 mt-2">Digital Watch</h6>
												<div class="price mt-2 h5 mb-0"> <s class="h5 text-muted mr-4">$3,999</s>$2,700 </div>
											</div>
										</div>
										<div class="product-info">
											<a href="http://new.iten.ge/itenge/main.php" target="_blank" class="btn ripple  btn-primary btn-sm mt-1 mb-1 text-sm text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="ნახვა"> <i class="fe fe-eye"></i> </a>
											
											<a href="#" class="btn ripple  btn-sm btn-danger mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="წაშლა"> <i class="fas fa-trash-alt"></i> </a>
											
											<a href="#" class="btn ripple  btn-sm btn-secondary mt-1 text-sm  mb-1 text-white" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="რედაქტირება"> <i class="fas fa-edit"></i> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<nav>
							<ul class="pagination justify-content-end">
								<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-4 col-lg-3">
						<div class="card custom-card">
							<div class="card-body h-100">
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search ..."> <span class="input-group-append"> <button class="btn ripple btn-primary" type="button">Search</button> </span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-header custom-card-header">
										<h6 class="card-title mb-0">Categories</h6> </div>
									<div class="card-body h-100">
										<div class="form-group">
											<label class="form-label">Mens</label>
											<select name="beast" id="select-beast" class="form-control select2 select2-hidden-accessible" data-select2-id="select-beast" tabindex="-1" aria-hidden="true">
												<option label="Select" data-select2-id="2"></option>
												<option value="1">Foot wear</option>
												<option value="2">Top wear</option>
												<option value="3">Bootom wear</option>
												<option value="4">Men's Groming</option>
												<option value="5">Accessories</option>
											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-beast-container"><span class="select2-selection__rendered" id="select2-select-beast-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span>
											</span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<div class="form-group">
											<label class="form-label">Women</label>
											<select name="beast" id="select-beast1" class="form-control select2 select2-hidden-accessible" data-select2-id="select-beast1" tabindex="-1" aria-hidden="true">
												<option label="Select" data-select2-id="4"></option>
												<option value="1">Western wear</option>
												<option value="2">Foot wear</option>
												<option value="3">Top wear</option>
												<option value="4">Bootom wear</option>
												<option value="5">Beuty Groming</option>
												<option value="6">Accessories</option>
												<option value="7">jewellery</option>
											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-beast1-container"><span class="select2-selection__rendered" id="select2-select-beast1-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span>
											</span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<div class="form-group">
											<label class="form-label">Baby &amp; Kids</label>
											<select name="beast" id="select-beast2" class="form-control select2 select2-hidden-accessible" data-select2-id="select-beast2" tabindex="-1" aria-hidden="true">
												<option label="Select" data-select2-id="6"></option>
												<option value="1">Boys clothing</option>
												<option value="2">girls Clothing</option>
												<option value="3">Toys</option>
												<option value="4">Baby Care</option>
												<option value="5">Kids footwear</option>
											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-beast2-container"><span class="select2-selection__rendered" id="select2-select-beast2-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span>
											</span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<div class="form-group">
											<label class="form-label">Electronics</label>
											<select name="beast" id="select-beast3" class="form-control select2 select2-hidden-accessible" data-select2-id="select-beast3" tabindex="-1" aria-hidden="true">
												<option label="Select" data-select2-id="8"></option>
												<option value="1">Mobiles</option>
												<option value="2">Laptops</option>
												<option value="3">Gaming &amp; Accessories</option>
												<option value="4">Health care Appliances</option>
											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-beast3-container"><span class="select2-selection__rendered" id="select2-select-beast3-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span>
											</span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<div class="form-group">
											<label class="form-label">Sport,Books &amp; More </label>
											<select name="beast" id="select-beast4" class="form-control select2 select2-hidden-accessible" data-select2-id="select-beast4" tabindex="-1" aria-hidden="true">
												<option label="Select" data-select2-id="10"></option>
												<option value="1">Stationery</option>
												<option value="2">Books</option>
												<option value="3">Gaming</option>
												<option value="4">Music</option>
												<option value="5">Exercise &amp; fitness</option>
											</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select-beast4-container"><span class="select2-selection__rendered" id="select2-select-beast4-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Choose one</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span>
											</span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<div class="form-group">
											<label class="form-label">Price</label>
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked=""> <span class="custom-control-label">Under $25</span> </label>
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option2"> <span class="custom-control-label">$25 to $50</span> </label>
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option2"> <span class="custom-control-label">$50 to $100</span> </label>
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option2"> <span class="custom-control-label">Other (specify)</span> </label>
										</div> <a class="btn ripple btn-primary btn-block" href="#">Apply Filter</a> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Row -->
			</div>
		</div>
		<!-- End Main Content-->
		<!-- Sidebar -->
		<div class="sidebar sidebar-right sidebar-animate">
			<div class="sidebar-icon"> <a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a> </div>
			<div class="sidebar-body">
				<h5>Todo</h5>
				<div class="d-flex p-2">
					<label class="ckbox">
						<input checked="" type="checkbox"><span>Hangout With friends</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
				<div class="d-flex p-2 border-top">
					<label class="ckbox">
						<input type="checkbox"><span>Prepare for presentation</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
				<div class="d-flex p-2 border-top">
					<label class="ckbox">
						<input type="checkbox"><span>Prepare for presentation</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
				<div class="d-flex p-2 border-top">
					<label class="ckbox">
						<input checked="" type="checkbox"><span>System Updated</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
				<div class="d-flex p-2 border-top">
					<label class="ckbox">
						<input type="checkbox"><span>Do something more</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
				<div class="d-flex p-2 border-top">
					<label class="ckbox">
						<input type="checkbox"><span>System Updated</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
				<div class="d-flex p-2 border-top">
					<label class="ckbox">
						<input type="checkbox"><span>Find an Idea</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
				<div class="d-flex p-2 border-top mb-4 border-bottom">
					<label class="ckbox">
						<input type="checkbox"><span>Project review</span></label> <span class="ml-auto"> <i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i> <i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i> </span> </div>
				<h5>Overview</h5>
				<div class="p-2">
					<div class="main-traffic-detail-item">
						<div> <span>Founder &amp; CEO</span> <span>24</span> </div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
						</div>
						<!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div> <span>UX Designer</span> <span>1</span> </div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
						</div>
						<!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div> <span>Recruitment</span> <span>87</span> </div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
						</div>
						<!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div> <span>Software Engineer</span> <span>32</span> </div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
						</div>
						<!-- progress -->
					</div>
					<div class="main-traffic-detail-item">
						<div> <span>Project Manager</span> <span>32</span> </div>
						<div class="progress">
							<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
						</div>
						<!-- progress -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
		<!-- Main Footer-->
		<div class="main-footer text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12"> <span>Copyright © 2019 <a href="#">Dashlead</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span> </div>
				</div>
			</div>
		</div>
		<!--End Footer-->
	</div>
	<!-- End Page -->
	<!-- Back-to-top --><a href="#top" id="back-to-top" style="display: none;"><i class="fe fe-arrow-up"></i></a>
	<!-- Jquery js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNNmwy;U41=e>fkYkKo");
	-->
	</script>
	<!-- Bootstrap js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNNJw>l8&YX24YVY\'k");
	-->
	</script>
	<!-- Ionicons js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/plugins/ionicons/ionicons.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNNB9SHPqe,!X:5C2k6rprua");
	-->
	</script>
	<!-- Check-all-mail js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/js/check-all-mail.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNNv:<lmCq;mXm&V");
	-->
	</script>
	<!-- Rating js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNNGzCt84TUMVmV:Y");
	-->
	</script>
	<!-- Select2 js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/plugins/select2/js/select2.min.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-");
	-->
	</script>
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/js/select2.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNNGOPtExYG24YVY\'k");
	-->
	</script>
	<!-- Sidemenu js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/plugins/sidemenu/sidemenu.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNNGOPti11UMVmV:Y");
	-->
	</script>
	<!-- Sidebar js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/plugins/sidebar/sidebar.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNNG#vHPHq;mXm&V");
	-->
	</script>
	<!-- Sticky js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/js/sticky.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNN1z:O\"5f2mSHeU2lSS0.ETE5w");
	-->
	</script>
	<!-- Perfect-scrollbar js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNNG/v;8-_e24YmYkKo");
	-->
	</script>
	<!-- Switcher js -->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/switcher/js/switcher.js"></script>
	<script type="text/javascript">
	<!--
	kkxw("-MqJNNBt(;cwq;mXm&V");
	-->
	</script>
	<!-- Custom js-->
	<noscript>
		<p>To display this page you need a browser that supports JavaScript.</p>
	</noscript>
	<script src="assets/js/custom.js"></script>
	<div class="main-navbar-backdrop"></div>
</body>

</html>