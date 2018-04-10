@inject('request', 'Illuminate\Http\Request')
<div class="main-sidebar">
    <!-- Inner sidebar -->
    <div class="sidebar">
        <!-- user panel (Optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>User Name</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div><!-- /.user-panel -->

        <!-- Search Form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form><!-- /.sidebar-form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->

            <li class="active"><a href="/about"><i class="fas fa-sitemap"></i><span> About</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fas fa-users"></i><span> Site Management</span>
                    {{--TODO <i class="fas fa-angle-left pull-right"></i>--}}
                </a>
                <ul class="treeview-menu">
                    <li><a href="/sites"><i class="fas fa-address-book"></i><span> Sites</span></a></li>
                    <li><a href="/newsite"><i class="fab fa-black-tie"></i></i><span> New Site</span></a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </div>

    <!-- /.sidebar -->
</div><!-- /.main-sidebar -->