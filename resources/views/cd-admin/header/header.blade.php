<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>BGH</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Bhattidanda</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('public/cd-admin/images/avatar.png')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{Auth::user()->name}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{url('public/cd-admin/images/avatar.png')}}" class="img-circle" alt="User Image">

                            <p>
                           
                                {!! Auth::user()->name !!}
                                
                                <small>{{Auth::user()->role}}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            
                            <div class="pull-right">
                                <a href="{{route('logout')}}" class="btn btn-danger btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('public/images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Creatu Developers</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->
        <!-- search form -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                   
                    @if(auth::user()->role == 'superadmin')
                    <li class="active"><a href="{{url('/addadmin')}}"><i class="fa fa-circle-o"></i>Add New Admin</a></li>
                    @endif
                    <li><a href="{{url('/view-all-admin')}}"><i class="fa fa-circle-o"></i>View All Admin</a></li>
                </ul>
            </li>
            <li class="header">Introduction</li>
            
            <li class="treeview">
                <a href="#">
                   <i class="fa fa-home"></i> <span>Introduction</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    
                   
                  <!--  <li><a href="{{url('/addintroduction')}}"><i class="fa fa-circle-o"></i>Add Introduction</a></li> -->
                     <li><a href="{{url('/introshow')}}"><i class="fa fa-circle-o"></i>Show Introduction</a></li>
                   
                </ul>
            </li>
            <li class="header">Carousel</li>
            
            <li class="treeview">
                <a href="">
                   <i class="fa fa-picture-o"></i> <span>Carousel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    
                    
                    <li><a href="{{url('/carousel')}}"><i class="fa fa-circle-o"></i>View Carousel</a></li>
                    <li><a href="{{url('/addcarousel')}}"><i class="fa fa-circle-o"></i>Add Carousel</a></li>
                </ul>
            </li>
            <li class="header">About</li>
            
            <li class="treeview">
                <a href="#">
                   <i class="fa fa-home"></i> <span>About</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    
                   
                   <!--  <li><a href="{{url('/about')}}"><i class="fa fa-circle-o"></i>Add About</a></li> -->
                     <li><a href="{{url('/aboutdetail')}}"><i class="fa fa-circle-o"></i>Show About</a></li>
                   
                </ul>
            </li>

            <li class="header">Services</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>Services</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                         <span class="badge badge-info right">{{$serv}}</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/allservices')}}"><i class="fa fa-circle-o"></i>View All Services</a></li>
                    
                    <li><a href="{{url('/addservice')}}"><i class="fa fa-circle-o"></i>Add Services</a></li>
                </ul>
            </li>

            <li class="header">Packages</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>Packages</span>
                    <span class="pull-right-container">
                         <span class="badge badge-info right">{{$pack}}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>

                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/allpackages')}}"><i class="fa fa-circle-o"></i>View All Packagess</a></li>
                    
                    <li><a href="{{url('/addpackages')}}"><i class="fa fa-circle-o"></i>Add packages</a></li>
                </ul>
            </li>

            <li class="header">Booking</li>
            
            <li class="treeview">
                <a href="#">
                     <i class="fa fa-suitcase"></i> <span>Bookings</span>
                      <span class="pull-right-container">
                         <span class="badge badge-info right">{{$pack}}</span>
                        <i class="fa fa-angle-left pull-right"></i>

                    </span>
                </a>
                 <ul class="treeview-menu">
                 <li class="active"><a href="{{url('/bookings')}}"><i class="fa fa-circle-o"></i>View Bookings</a></li>
                <li class="active"><a href="{{url('/reply')}}"><i class="fa fa-circle-o"></i>View Replies</a></li>
                </ul>
                </li>

             <li class="header">Gallery</li>
            
                <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o"></i> <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/viewgallery')}}"><i class="fa fa-circle-o"></i>View Album</a></li>
                    <!-- <li class="active"><a href="{{url('/igallery')}}"><i class="fa fa-circle-o"></i>View Image</a></li> -->
                    
                    <li><a href="{{url('/addgallery')}}"><i class="fa fa-circle-o"></i>Add Album</a></li>
                    <!-- <li><a href="{{url('/addimage')}}"><i class="fa fa-circle-o"></i>Add Image</a></li> -->
                </ul>
                </li>
           

                 <li class="header">Review</li>
            
                <li class="treeview">
                <a href="#">
                    <i class="fa fa-star"></i> <span>Review</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                         <span class="badge badge-info right">{{$serv}}</span>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/review')}}"><i class="fa fa-circle-o"></i>View Review</a></li>
                    
                    <li><a href="{{url('/addreview')}}"><i class="fa fa-circle-o"></i>Add Review</a></li>
                </ul>
                </li>

           <li class="header">Message</li>
           <li class="treeview">
            <a href="#">
            <i class="fa fa-envelope"></i><span>Message</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
                <ul class="treeview-menu">
                <li class="active"><a href="{{url('/viewcontact')}}"><i class="fa fa-circle-o"></i>View Inbox</a></li>
                 <li class="active"><a href="{{url('/replies')}}"><i class="fa fa-circle-o"></i>View Reply</a></li>
                </ul>
        </li>



                 <li class="header">SEO</li>
            
                <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle"></i> <span>SEO</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- <li class="active"><a href="{{url('/addseo')}}"><i class="fa fa-circle-o"></i>Add Seo </a></li> -->
                    
                    <li><a href="{{url('/viewseo')}}"><i class="fa fa-circle-o"></i>View Seo</a></li>
                </ul>
                </li>

           

             {{-- <li class="header">News</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-copy"></i> <span>News</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/news-add')}}"><i class="fa fa-circle-o"></i>Add New News</a></li>
                    <li><a href="{{url('/news-view')}}"><i class="fa fa-circle-o"></i>View All News </a></li>
                </ul>
            </li>

            <li class="header">Event</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Event</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('events-add')}}"><i class="fa fa-circle-o"></i>Add New Event</a></li>
                    <li><a href="{{url('/events-view')}}"><i class="fa fa-circle-o"></i>View All Event </a></li>
                </ul>
            </li>

            <li class="header">Blog</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>Blog</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('blog-add')}}"><i class="fa fa-circle-o"></i>Add New Blog</a></li>
                    <li><a href="{{url('/blog-view')}}"><i class="fa fa-circle-o"></i>View All Blog </a></li>
                </ul>
            </li>

            <li class="header">Work</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Work</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('work-add')}}"><i class="fa fa-circle-o"></i>Add New Work</a></li>
                    <li><a href="{{url('/work-view')}}"><i class="fa fa-circle-o"></i>View All Work </a></li>
                </ul>
            </li>
            

             <li class="header">Video</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-video-camera"></i> <span>Video</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('videos-add')}}"><i class="fa fa-circle-o"></i>Add New video</a></li>
                    <li><a href="{{url('videos-view')}}"><i class="fa fa-circle-o"></i>View All videos</a></li>
                </ul>
            </li>


            <li class="header">Contact</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope "></i> <span>Contact</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('/contact-view')}}"><i class="fa fa-circle-o"></i>View All contact </a></li>
                </ul>
            </li> --}}

                 

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>