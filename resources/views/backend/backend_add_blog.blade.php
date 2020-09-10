<!DOCTYPE html>
<html lang="en">


<!-- blog23:34-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/img/favicon.ico')}}">
    <title>Zotetech Backend</title>
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/css/style.css')}}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">


            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark primary-color">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#">Zote News</a>
                <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{url('backend-blogs')}}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item active">

                    <a class="nav-link" href="#"><span><strong>Latest</strong></span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="{{url('backend-blogs')}}"><span><strong>Politics</strong></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><span><strong>Sports</strong></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><span><strong>Entertainment</strong></span></a>
                         </li>

                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                    </li>

                </ul>
                <!-- Links -->

                <form class="form-inline">
                    <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
                </div>
                <!-- Collapsible content -->

            </nav>
            <!--/.Navbar-->


        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Zote News</li>
                        <li>
                        <a href="{{url('backend-blogs')}}"><i class="fa fa-dashboard"></i> <span>Home</span></a>
                        </li>
                        <li>
                            <a href="{{url('/')}}"><i class="fa fa-user-md"></i> <span> <strong> Latest</strong></span></a>
                        </li>
						<li>
                            <a href="{{url('Politics')}}"><i class="fa fa-user-md"></i> <span> <strong> Politics </strong></span></a>
                        </li>
                        <li>
                            <a href="{{url('Technologies')}}"><i class="fa fa-user-md"></i> <span> <strong> Technology </strong></span></a>
                        </li>
                        <li>
                            <a href="{{url('Celebrity')}}"><i class="fa fa-user-md"></i> <span> <strong> Celebrity </strong></span></a>
                        </li>
                        <li>
                            <a href="{{url('Sports')}}"><i class="fa fa-user-md"></i> <span> <strong> Sports </strong></span></a>
                        </li>
                        <li>
                            <a href="{{url('add-blog')}}"><i class="fa fa-user-md"></i> <span> <strong> Add Blog </strong></span></a>

                         <li>
                            <a href="{{url('edit-blog')}}"><i class="fa fa-user-md"></i> <span> <strong> Edit Blog </strong></span></a>
                         </li>



                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Blog</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    <form method="POST" action="{{url('save-blog')}}">
                        @csrf
                            <div class="form-group">
                                <label>Blog Name</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Blog Images</label>
                                <div>
                                    <input class="form-control" type="file">
                                    <small class="form-text text-muted">Max. file size: 50 MB. Allowed images: jpg, gif, png. Maximum 10 images only.</small>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
											<img src="assets/img/blog/blog-thumb-01.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
                                                <img src="assets/img/placeholder-thumb.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
											<img src="assets/img/placeholder-thumb.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
											<img src="assets/img/placeholder-thumb.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
											<img src="assets/img/placeholder-thumb.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-4 col-lg-3 col-xl-2">
                                        <div class="product-thumbnail">
											<img src="assets/img/placeholder-thumb.jpg" class="img-thumbnail img-fluid" alt="">
                                            <span class="product-remove" title="remove"><i class="fa fa-close"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Blog Category</label>
                                        <select class="select">
                                            <option>Health Care</option>
                                            <option>Child</option>
                                            <option>AHealth Care</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Blog Sub Category</label>
                                        <select class="select">
                                            <option>Health Care</option>
                                            <option>Health Care</option>
                                            <option>Health Care</option>
                                            <option>Health Care</option>
                                            <option>Health Care</option>
                                            <option>Health Care</option>
                                            <option>Health Care</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Blog Description</label>
                                <textarea cols="30" rows="6" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tags <small>(separated with a comma)</small></label>
                                <input type="text" placeholder="Enter your tags" data-role="tagsinput" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="display-block">Blog Status</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="blog_active" value="option1" checked>
									<label class="form-check-label" for="blog_active">
									Active
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="blog_inactive" value="option2">
									<label class="form-check-label" for="blog_inactive">
									Inactive
									</label>
								</div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Publish Blog</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{asset('backend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('backend/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('backend/js/select2.min.js')}}"></script>
    <script src="{{asset('backend/js/tagsinput.js')}}"></script>
    <script src="{{asset('backend/js/app.js')}}"></script>
</body>


<!-- blog23:51-->
</html>
