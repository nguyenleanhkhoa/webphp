
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Yến sào Gia Bảo</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Siêu thị bán thực phẩm Yến Sào Gia Bảo" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="source/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="source/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="source/css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="source/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="source/css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- top-header -->
	<div class="header-most-top">
		<p>Yến Sào Gia Bảo</p>
	</div>
	<!-- //top-header -->
	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href={{route('index')}}>
						<span>Y</span>ến
						<span>S</span>ào
						<span>G</span>ia
						<span>B</span>ảo
						<img src="images/swift.png" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">
							<span class="fa fa-map-marker" aria-hidden="true"></span> Địa điểm </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-truck" aria-hidden="true"></span>Đơn hàng</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> Số điện thoại
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Đăng nhập </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Đăng ký  </a>
					</li>
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					<form action="#" method="post">
						<input name="Search" type="search" placeholder="Tìm kiếm thông tin sản phẩm" required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- Button trigger modal(shop-locator) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>Please Select Your Location</h3>
			<select class="list_of_cities">
				<optgroup label="Popular Cities">
					<option selected style="display:none;color:#eee;">Select City</option>
					<option>Birmingham</option>
					<option>Anchorage</option>
					<option>Phoenix</option>
					<option>Little Rock</option>
					<option>Los Angeles</option>
					<option>Denver</option>
					<option>Bridgeport</option>
					<option>Wilmington</option>
					<option>Jacksonville</option>
					<option>Atlanta</option>
					<option>Honolulu</option>
					<option>Boise</option>
					<option>Chicago</option>
					<option>Indianapolis</option>
				</optgroup>
				<optgroup label="Alabama">
					<option>Birmingham</option>
					<option>Montgomery</option>
					<option>Mobile</option>
					<option>Huntsville</option>
					<option>Tuscaloosa</option>
				</optgroup>
				<optgroup label="Alaska">
					<option>Anchorage</option>
					<option>Fairbanks</option>
					<option>Juneau</option>
					<option>Sitka</option>
					<option>Ketchikan</option>
				</optgroup>
				<optgroup label="Arizona">
					<option>Phoenix</option>
					<option>Tucson</option>
					<option>Mesa</option>
					<option>Chandler</option>
					<option>Glendale</option>
				</optgroup>
				<optgroup label="Arkansas">
					<option>Little Rock</option>
					<option>Fort Smith</option>
					<option>Fayetteville</option>
					<option>Springdale</option>
					<option>Jonesboro</option>
				</optgroup>
				<optgroup label="California">
					<option>Los Angeles</option>
					<option>San Diego</option>
					<option>San Jose</option>
					<option>San Francisco</option>
					<option>Fresno</option>
				</optgroup>
				<optgroup label="Colorado">
					<option>Denver</option>
					<option>Colorado</option>
					<option>Aurora</option>
					<option>Fort Collins</option>
					<option>Lakewood</option>
				</optgroup>
				<optgroup label="Connecticut">
					<option>Bridgeport</option>
					<option>New Haven</option>
					<option>Hartford</option>
					<option>Stamford</option>
					<option>Waterbury</option>
				</optgroup>
				<optgroup label="Delaware">
					<option>Wilmington</option>
					<option>Dover</option>
					<option>Newark</option>
					<option>Bear</option>
					<option>Middletown</option>
				</optgroup>
				<optgroup label="Florida">
					<option>Jacksonville</option>
					<option>Miami</option>
					<option>Tampa</option>
					<option>St. Petersburg</option>
					<option>Orlando</option>
				</optgroup>
				<optgroup label="Georgia">
					<option>Atlanta</option>
					<option>Augusta</option>
					<option>Columbus</option>
					<option>Savannah</option>
					<option>Athens</option>
				</optgroup>
				<optgroup label="Hawaii">
					<option>Honolulu</option>
					<option>Pearl City</option>
					<option>Hilo</option>
					<option>Kailua</option>
					<option>Waipahu</option>
				</optgroup>
				<optgroup label="Idaho">
					<option>Boise</option>
					<option>Nampa</option>
					<option>Meridian</option>
					<option>Idaho Falls</option>
					<option>Pocatello</option>
				</optgroup>
				<optgroup label="Illinois">
					<option>Chicago</option>
					<option>Aurora</option>
					<option>Rockford</option>
					<option>Joliet</option>
					<option>Naperville</option>
				</optgroup>
				<optgroup label="Indiana">
					<option>Indianapolis</option>
					<option>Fort Wayne</option>
					<option>Evansville</option>
					<option>South Bend</option>
					<option>Hammond</option>														       
				</optgroup>
				<optgroup label="Iowa">
					<option>Des Moines</option>
					<option>Cedar Rapids</option>
					<option>Davenport</option>
					<option>Sioux City</option>
					<option>Waterloo</option>       													
				</optgroup>
				<optgroup label="Kansas">
					<option>Wichita</option>
					<option>Overland Park</option>
					<option>Kansas City</option>
					<option>Topeka</option>
					<option>Olathe  </option>            													
				</optgroup>
				<optgroup label="Kentucky">
					<option>Louisville</option>
					<option>Lexington</option>
					<option>Bowling Green</option>
					<option>Owensboro</option>
					<option>Covington</option>        														
				</optgroup>
				<optgroup label="Louisiana">
					<option>New Orleans</option>
					<option>Baton Rouge</option>
					<option>Shreveport</option>
					<option>Metairie</option>
					<option>Lafayette</option>          														
				</optgroup>
				<optgroup label="Maine">
					<option>Portland</option>
					<option>Lewiston</option>
					<option>Bangor</option>
					<option>South Portland</option>
					<option>Auburn</option>         														
				</optgroup>
				<optgroup label="Maryland">
					<option>Baltimore</option>
					<option>Frederick</option>
					<option>Rockville</option>
					<option>Gaithersburg</option>
					<option>Bowie</option>         														
				</optgroup>
				<optgroup label="Massachusetts">
					<option>Boston</option>
					<option>Worcester</option>
					<option>Springfield</option>
					<option>Lowell</option>
					<option>Cambridge</option>  
				</optgroup>
				<optgroup label="Michigan">
					<option>Detroit</option>
					<option>Grand Rapids</option>
					<option>Warren</option>
					<option>Sterling Heights</option>
					<option>Lansing</option> 
				</optgroup>
				<optgroup label="Minnesota">
					<option>Minneapolis</option>
					<option>St. Paul</option>
					<option>Rochester</option>
					<option>Duluth</option>
					<option>Bloomington</option>      														
				</optgroup>
				<optgroup label="Mississippi">
					<option>Jackson</option>
					<option>Gulfport</option>
					<option>Southaven</option>
					<option>Hattiesburg</option>
					<option>Biloxi</option>         														
				</optgroup>
				<optgroup label="Missouri">
					<option>Kansas City</option>
					<option>St. Louis</option>
					<option>Springfield</option>
					<option>Independence</option>
					<option>Columbia</option>            														
				</optgroup>
				<optgroup label="Montana">
					<option>Billings</option>
					<option>Missoula</option>
					<option>Great Falls</option>
					<option>Bozeman</option>
					<option>Butte-Silver Bow</option>         														
				</optgroup>
				<optgroup label="Nebraska">
					<option>Omaha</option>
					<option>Lincoln</option>
					<option>Bellevue</option>
					<option>Grand Island</option>
					<option>Kearney</option>        													
				</optgroup>
				<optgroup label="Nevada">
					<option>Las Vegas</option>
					<option>Henderson</option>
					<option>North Las Vegas</option>
					<option>Reno</option>
					<option>Sunrise Manor</option>            													
				</optgroup>
				<optgroup label="New Hampshire">
					<option>Manchesters</option>
					<option>Nashua</option>
					<option>Concord</option>
					<option>Dover</option>
					<option>Rochester</option>              													
				</optgroup>
				<optgroup label="New Jersey">
					<option>Newark</option>
					<option>Jersey City</option>
					<option>Paterson</option>
					<option>Elizabeth</option>
					<option>Edison</option> 
				</optgroup>
				<optgroup label="New Mexico">
					<option>Albuquerque</option>
					<option>Las Cruces</option>
					<option>Rio Rancho</option>
					<option>Santa Fe</option>
					<option>Roswell</option>       
				</optgroup>
				<optgroup label="New York">
					<option>New York</option>
					<option>Buffalo</option>
					<option>Rochester</option>
					<option>Yonkers</option>
					<option>Syracuse</option>        														
				</optgroup>
				<optgroup label="North Carolina">
					<option>Charlotte</option>
					<option>Raleigh</option>
					<option>Greensboro</option>
					<option>Winston-Salem</option>
					<option>Durham</option>          														
				</optgroup>
				<optgroup label="North Dakota">
					<option>Fargo</option>
					<option>Bismarck</option>
					<option>Grand Forks</option>
					<option>Minot</option>
					<option>West Fargo</option>
				</optgroup>
				<optgroup label="Ohio">
					<option>Columbus</option>
					<option>Cleveland</option>
					<option>Cincinnati</option>
					<option>Toledo</option>
					<option>Akron</option>      
				</optgroup>
				<optgroup label="Oklahoma">
					<option>Oklahoma City</option>
					<option>Tulsa</option>
					<option>Norman</option>
					<option>Broken Arrow</option>
					<option>Lawton</option>        														
				</optgroup>
				<optgroup label="Oregon">
					<option>Portland</option>
					<option>Eugene</option>
					<option>Salem</option>
					<option>Gresham</option>
					<option>Hillsboro</option>          														
				</optgroup>
				<optgroup label="Pennsylvania">
					<option>Philadelphia</option>
					<option>Pittsburgh</option>
					<option>Allentown</option>
					<option>Erie</option>
					<option>Reading</option>         														
				</optgroup>
				<optgroup label="Rhode Island">
					<option>Providence</option>
					<option>Warwick</option>
					<option>Cranston</option>
					<option>Pawtucket</option>
					<option>East Providence</option>   
				</optgroup>
				<optgroup label="South Carolina">
					<option>Columbia</option>
					<option>Charleston</option>
					<option>North Charleston</option>
					<option>Mount Pleasant</option>
					<option>Rock Hill</option> 
				</optgroup>
				<optgroup label="South Dakota">
					<option>Sioux Falls</option>
					<option>Rapid City</option>
					<option>Aberdeen</option>
					<option>Brookings</option>
					<option>Watertown</option> 
				</optgroup>
				<optgroup label="Tennessee">
					<option>Memphis</option>
					<option>Nashville</option>
					<option>Knoxville</option>
					<option>Chattanooga</option>
					<option>Clarksville</option>       
				</optgroup>
				<optgroup label="Texas">
					<option>Houston</option>
					<option>San Antonio</option>
					<option>Dallas</option>
					<option>Austin</option>
					<option>Fort Worth</option>   
				</optgroup>
				<optgroup label="Utah">
					<option>Salt Lake City</option>
					<option>West Valley City</option>
					<option>Provo</option>
					<option>West Jordan</option>
					<option>Orem</option>   
				</optgroup>	
				<optgroup label="Vermont">
					<option>Burlington</option>
					<option>Essex</option>
					<option>South Burlington</option>
					<option>Colchester</option>
					<option>Rutland</option>   
				</optgroup>
				<optgroup label="Virginia">
					<option>Virginia Beach</option>
					<option>Norfolk</option>
					<option>Chesapeake</option>
					<option>Arlington</option>
					<option>Richmond</option> 
				</optgroup>	
				<optgroup label="Washington">
					<option>Seattle</option>
					<option>Spokane</option>
					<option>Tacoma</option>
					<option>Vancouver</option>
					<option>Bellevue</option> 
				</optgroup>	
				<optgroup label="West Virginia">
					<option>Charleston</option>
					<option>Huntington</option>
					<option>Parkersburg</option>
					<option>Morgantown</option>
					<option>Wheeling</option> 
				</optgroup>	
				<optgroup label="Wisconsin">
					<option>Milwaukee</option>
					<option>Madison</option>
					<option>Green Bay</option>
					<option>Kenosha</option>
					<option>Racine</option>
				</optgroup>
				<optgroup label="Wyoming">
					<option>Cheyenne</option>
					<option>Casper</option>
					<option>Laramie</option>
					<option>Gillette</option>
					<option>Rock Springs</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->
	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let s start your Grocery Shopping. Don t have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<input type="submit" value="Sign In">
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<p>
							Tham gia cùng Yến Sào Gia Bảo! Hãy tạo tài khoản mới.
						</p>
						<form action="#" method="post">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Họ tên" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="Email" name="Email" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Mật khẩu" name="password" id="password1" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Xác nhận mật khẩu" name="Confirm Password" id="password2" required="">
							</div>
							<input type="submit" value="Sign Up">
						</form>
						<p>
							<a href="#">By clicking register, I agree to your terms</a>
						</p>
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->
	<!-- //header-bot -->
	<!-- navigation -->
	<div class="ban-top">
		<div class="container" style="width:1366px">
			<div class="agileits-navi_search">
				<form action="#" method="post">
					<select id="agileinfo-nav_search" name="agileinfo_search" required="">
						<option value="">Danh mục</option>
						@foreach($Loaisanpham as $loai)
						<option value="{{$loai->name}}">{{$loai->name}}</option>
						@endforeach

					</select>
				</form>
			</div>
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
							    aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<li class="active">
									<a class="nav-stylehead" href={{route('index')}}>Trang chủ
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="">
									<a class="nav-stylehead" href={{route('About')}}>Giới thiệu</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Công dụng và cách chế biến 
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="agile_inner_drop_nav_info">
											<div class="col-sm-4 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li>
														<a href="product.php">Công dụng của yến</a>
													</li>
													<li>
														<a href="product.php">Cách chưng yến để uống</a>
													</li>
													<li>
														<a href="product.php">Cách làm cháo yến</a>
													</li>

												</ul>
											</div>

											{{--<div class="col-sm-4 multi-gd-img">--}}
												{{--<img src="images/nav.png" alt="">--}}
											{{--</div>--}}
											{{--<div class="clearfix"></div>--}}
										</div>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dịch vụ
										<span class="caret"></span>
									</a>
									{{--<ul class="dropdown-menu multi-column columns-3">--}}
										{{--<div class="agile_inner_drop_nav_info">--}}
											{{--<div class="col-sm-6 multi-gd-img">--}}
												{{--<ul class="multi-column-dropdown">--}}
													{{--<li>--}}
														{{--<a href="">Kitchen & Dining</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Detergents</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Utensil Cleaners</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Floor & Other Cleaners</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Disposables, Garbage Bag</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Repellents & Fresheners</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href=""> Dishwash</a>--}}
													{{--</li>--}}
												{{--</ul>--}}
											{{--</div>--}}
											{{--<div class="col-sm-6 multi-gd-img">--}}
												{{--<ul class="multi-column-dropdown">--}}
													{{--<li>--}}
														{{--<a href="">Pet Care</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Cleaning Accessories</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Pooja Needs</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Crackers</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Festive Decoratives</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Plasticware</a>--}}
													{{--</li>--}}
													{{--<li>--}}
														{{--<a href="">Home Care</a>--}}
													{{--</li>--}}
												{{--</ul>--}}
											{{--</div>--}}
											{{--<div class="clearfix"></div>--}}
										{{--</div>--}}
									{{--</ul>--}}
								</li>
								<li class="">
									<a class="nav-stylehead" href="Fags.blade.php">Faqs</a>
								</li>
								<li class="dropdown">
									<a class="nav-stylehead dropdown-toggle" href="#" data-toggle="dropdown">Pages
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li>
											<a href="icons.php">Web Icons</a>
										</li>
										<li>
											<a href="typography.php">Typography</a>
										</li>
									</ul>
								</li>
								<li class="">
									<a class="nav-stylehead" href="contact.php">Liên hệ</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //navigation -->
	<!-- banner -->
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
	<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption" style="padding-top:12px" >
						<img src="source/images/slide/banner1.jpg" alt="" srcset="" height="500px" width="940px">
					</div>
				</div>
			</div>
			@foreach($slide as $sl)
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption"  style="padding-top:12px">
						<img src="source/images/slide/{{$sl->image}}" alt="" srcset="" height="500px" width="940px">
					</div>
				</div>
			</div>
			@endforeach
			
			
			
		</div>
			
	</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="height:600px;margin-top:236px;">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="height:600px;margin-top:236px;">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Những sản phẩm được ưa chuộng nhất
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<!-- product left -->
			{{--<div class="side-bar col-md-3">--}}
				{{--<div class="search-hotel">--}}
					{{--<h3 class="agileits-sear-head">Tìm kiếm...</h3>--}}
					{{--<form action="#" method="post">--}}
						{{--<input type="search" placeholder="Tên sản phẩm..." name="search" required="">--}}
						{{--<input type="submit" value=" ">--}}
					{{--</form>--}}
				{{--</div>--}}
				{{--<!-- price range -->--}}
				{{--<div class="range">--}}
					{{--<h3 class="agileits-sear-head">Mức giá</h3>--}}
					{{--<ul class="dropdown-menu6">--}}
						{{--<li>--}}

							{{--<div id="slider-range"></div>--}}
							{{--<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />--}}
						{{--</li>--}}
					{{--</ul>--}}
				{{--</div>--}}
			{{----}}
				{{----}}
				{{--<!-- //food preference -->--}}
				{{--<!-- discounts -->--}}
				{{--<div class="left-side">--}}
					{{--<h3 class="agileits-sear-head">Giảm giá</h3>--}}
					{{--<ul>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">5% or More</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">10% or More</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">20% or More</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">30% or More</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">50% or More</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">60% or More</span>--}}
						{{--</li>--}}
					{{--</ul>--}}
				{{--</div>--}}
				{{--<!-- //discounts -->--}}
				{{--<!-- reviews -->--}}
				{{--<div class="customer-rev left-side">--}}
					{{--<h3 class="agileits-sear-head">Đánh giá của khách hàng</h3>--}}
					{{--<ul>--}}
						{{--<li>--}}
							{{--<a href="#">--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<span>5.0</span>--}}
							{{--</a>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<a href="#">--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star-o" aria-hidden="true"></i>--}}
								{{--<span>4.0</span>--}}
							{{--</a>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<a href="#">--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star-o" aria-hidden="true"></i>--}}
								{{--<span>3.5</span>--}}
							{{--</a>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<a href="#">--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star-o" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star-o" aria-hidden="true"></i>--}}
								{{--<span>3.0</span>--}}
							{{--</a>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<a href="#">--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star-half-o" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star-o" aria-hidden="true"></i>--}}
								{{--<i class="fa fa-star-o" aria-hidden="true"></i>--}}
								{{--<span>2.5</span>--}}
							{{--</a>--}}
						{{--</li>--}}
					{{--</ul>--}}
				{{--</div>--}}
				{{--<!-- //reviews -->--}}
				{{--<!-- cuisine -->--}}
				{{--<div class="left-side">--}}
					{{--<h3 class="agileits-sear-head">Cuisine</h3>--}}
					{{--<ul>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">South American</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">French</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">Greek</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">Chinese</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">Japanese</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">Italian</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">Mexican</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">Thai</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span">Indian</span>--}}
						{{--</li>--}}
						{{--<li>--}}
							{{--<input type="checkbox" class="checked">--}}
							{{--<span class="span"> Spanish </span>--}}
						{{--</li>--}}
					{{--</ul>--}}
				{{--</div>--}}
				{{--<!-- //cuisine -->--}}
				{{--<!-- deals -->--}}
				{{--<div class="deal-leftmk left-side">--}}
					{{--<h3 class="agileits-sear-head">Special Deals</h3>--}}
					{{--<div class="special-sec1">--}}
						{{--<div class="col-xs-4 img-deals">--}}
							{{--<img src="images/d2.jpg" alt="">--}}
						{{--</div>--}}
						{{--<div class="col-xs-8 img-deal1">--}}
							{{--<h3>Lay s Potato Chips</h3>--}}
							{{--<a href="single.php">$18.00</a>--}}
						{{--</div>--}}
						{{--<div class="clearfix"></div>--}}
					{{--</div>--}}
					{{--<div class="special-sec1">--}}
						{{--<div class="col-xs-4 img-deals">--}}
							{{--<img src="images/d1.jpg" alt="">--}}
						{{--</div>--}}
						{{--<div class="col-xs-8 img-deal1">--}}
							{{--<h3>Bingo Mad Angles</h3>--}}
							{{--<a href="single.php">$9.00</a>--}}
						{{--</div>--}}
						{{--<div class="clearfix"></div>--}}
					{{--</div>--}}
					{{--<div class="special-sec1">--}}
						{{--<div class="col-xs-4 img-deals">--}}
							{{--<img src="images/d4.jpg" alt="">--}}
						{{--</div>--}}
						{{--<div class="col-xs-8 img-deal1">--}}
							{{--<h3>Tata Salt</h3>--}}
							{{--<a href="single.php">$15.00</a>--}}
						{{--</div>--}}
						{{--<div class="clearfix"></div>--}}
					{{--</div>--}}
					{{--<div class="special-sec1">--}}
						{{--<div class="col-xs-4 img-deals">--}}
							{{--<img src="images/d5.jpg" alt="">--}}
						{{--</div>--}}
						{{--<div class="col-xs-8 img-deal1">--}}
							{{--<h3>Gujarat Dry Fruit</h3>--}}
							{{--<a href="single.php">$525.00</a>--}}
						{{--</div>--}}
						{{--<div class="clearfix"></div>--}}
					{{--</div>--}}
					{{--<div class="special-sec1">--}}
						{{--<div class="col-xs-4 img-deals">--}}
							{{--<img src="images/d3.jpg" alt="">--}}
						{{--</div>--}}
						{{--<div class="col-xs-8 img-deal1">--}}
							{{--<h3>Cadbury Dairy Milk</h3>--}}
							{{--<a href="single.php">$149.00</a>--}}
						{{--</div>--}}
						{{--<div class="clearfix"></div>--}}
					{{--</div>--}}
				{{--</div>--}}
				{{--<!-- //deals -->--}}
			{{--</div>--}}
			<!-- //product left -->
			<!-- product right -->
			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
					<div class="product-sec1" style="margin-left:24px ;margin-right:-294px;">
						<h3>Tổ yến nguyên  chất</h3>
						<p class="heading-tittle">	Tìm thấy {{count($new_product)}} sản phẩm</p>

						@foreach($new_product as $new)
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="source/images/toyennguyenchat/{{$new->image}}" alt=""  height="150px">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href={{route('chitietsanpham',$new->id)}} class="link-product-add-cart" style="left:19.5%">Xem thông tin</a>
										</div>
									</div>
									{{--  <span class="product-new-top">New</span>  --}}
								</div>
								<div class="item-info-product ">
									<h4>
										<a href={{route('chitietsanpham',$new->id)}}>{{$new->name}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{number_format($new->promotion_price)}} vnd</span>
										<del>{{number_format($new->unit_price)}} vnd</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="{{$new->name}}" />
												<input type="hidden" name="amount" value="{{$new->promotion_price}}" />
												<input type="hidden" name="discount_amount" value="0" />
												<input type="hidden" name="currency_code" value="VND" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Bỏ vào giỏ hàng" class="button" />
											</fieldset>
										</form>
									</div>
								</div>
							</div>
						</div>
						@endforeach

						<div class="clearfix"></div>
					</div>



					<div class="product-sec1" style="margin-left:24px ;margin-right:-294px;">
						<h3>Yến chưng có sẵn</h3>
						@foreach($yenchungcosan as $yenchungcs)
						<div class="col-md-4 product-men">


							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="source/images/yenchungcosan/{{$yenchungcs->image}}" alt="" height="150px">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{route('Single',$yenchungcs->id)}}" class="link-product-add-cart" style="left:19.5%">Quick View</a>
										</div>
									</div>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{route('Single',$yenchungcs->ida)}}">{{$yenchungcs->name}}</a>
									</h4>
									<div class="info-product-price">

										<span class="item_price">{{number_format($yenchungcs->promotion_price)}} vnd</span>

									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="{{$yenchungcs->name}}" />
												<input type="hidden" name="amount" value="{{number_format($yenchungcs->unit_price)}} " />
												<input type="hidden" name="discount_amount" value="0" />
												<input type="hidden" name="currency_code" value="VND" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Bỏ vào giỏ hàng" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						@endforeach

						<div class="clearfix"></div>
					</div>
					<!-- //third section (oils) -->
					<!-- fourth section (noodles) -->
					<div class="product-sec1" style="margin-left:24px ;margin-right:-294px;">
						<h3>Yến sào chưng sẵn hũ rời</h3>
						@foreach($yenchungsanhuroi as $huroi)
						<div class="col-md-4 product-men">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="source/images/yenhuroi/{{$huroi->image}}" alt="" height="150px">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{route('Single',$huroi->id)}}" class="link-product-add-cart" style="left:19%">Xem thông tin</a>
										</div>
									</div>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href={{route('chitietsanpham',$new->id)}}>{{$huroi->name}}</a>
									</h4>
									<div class="info-product-price">
										<span class="item_price">{{number_format($huroi->promotion_price)}} vnd</span>
										<del>{{number_format($huroi->unit_price)}} vnd</del>
									</div>
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="{{$huroi->name}}" />
												<input type="hidden" name="amount" value="{{number_format($huroi->promotion_price)}}" />
												<input type="hidden" name="discount_amount" value="0" />
												<input type="hidden" name="currency_code" value="VND" />
												<input type="hidden" name="return" value=" " />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="submit" name="submit" value="Bỏ vào giỏ hàng" class="button" />
											</fieldset>
										</form>
									</div>

								</div>
							</div>
						</div>
						@endforeach

						<div class="clearfix"></div>
					</div>
					<!-- //fourth section (noodles) -->
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
	<!-- //top products -->
	<!-- special offers -->
	
	
	<!-- //newsletter -->
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer first section -->
			
			<!-- //footer first section -->
			<!-- footer second section -->
			
			<!-- //footer second section -->
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Categories</h3>
						<ul>
							@foreach ($Loaisanpham as $loai )
							<li>
								<a href="product.php">{{$loai->name}}</a>
							</li>
							@endforeach
							
						</ul>
					</div>
					{{-- <div class="col-xs-6 footer-grids agile-secomk">
						<ul>
							<li>
								<a href="product.php">Snacks & Beverages</a>
							</li>
							<li>
								<a href="product.php">Bread & Bakery</a>
							</li>
							<li>
								<a href="product.php">Sweets</a>
							</li>
							<li>
								<a href="product.php">Chocolates & Biscuits</a>
							</li>
							<li>
								<a href="">Personal Care</a>
							</li>
							<li>
								<a href="product.php">Dried Fruits & Nuts</a>
							</li>
						</ul>
					</div> --}}
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Quick Links</h3>
						<ul>
							<li>
								<a href={{route('About')}}>Giới thiệu</a>
							</li>
							<li>
								<a href="contact.php">Liên lạc</a>
							</li>
							<li>
								<a href="help.php">Giúp đỡ</a>
							</li>
							<li>
								<a href="faqs.php">Faqs</a>
							</li>
							<li>
								<a href="terms.php">Terms of </a>
							</li>
							<li>
								<a href="privacy.php">Chính sách</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i>Số 5 Trường Lưu ,P.Long Trường ,Q.9</li>
							<li>
								<i class="fa fa-mobile"></i> +8493 6808 578 </li>
							<li>
								<i class="fa fa-phone"></i> +8493 7808 578 </li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:example@mail.com"> dongnamquangcao@gmail.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				{{-- <div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Us on</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="agileits_app-devices">
						<h5>Download the App</h5>
						<a href="#">
							<img src="images/1.png" alt="">
						</a>
						<a href="#">
							<img src="images/2.png" alt="">
						</a>
						<div class="clearfix"> </div>
					</div>
				</div> --}}
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->
			
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="source/js/jquery-2.1.4.min.js"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="source/js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- Large modal -->
	<!-- <script>
		$('#').modal('show');
	</script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="source/js/minicart.js"></script>
	<script>
		paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

		paypalm.minicartk.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="source/js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="source/js/jquery.flexisel.js"></script>
	<script>
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="source/js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="source/js/move-top.js"></script>
	<script src="source/js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="source/js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


</body>

</html>