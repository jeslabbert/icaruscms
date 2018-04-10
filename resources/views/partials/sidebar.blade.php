@inject('request', 'Illuminate\Http\Request')
<div class="main-sidebar">
    <!-- Inner sidebar -->
    <div class="sidebar">
        <!-- user panel (Optional) -->
        {{--<div class="user-panel">--}}
            {{--<div class="pull-left image">--}}
                {{--<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">--}}
            {{--</div>--}}
            {{--<div class="pull-left info">--}}
                {{--<p>User Name</p>--}}

                {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
            {{--</div>--}}
        {{--</div><!-- /.user-panel -->--}}

        <!-- Search Form (Optional) -->
        {{--<form action="#" method="get" class="sidebar-form">--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
                {{--<span class="input-group-btn">--}}
                {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
              {{--</span>--}}
            {{--</div>--}}
        {{--</form><!-- /.sidebar-form -->--}}

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            @guest

                      @else
                    @if (auth()->user()->UserAccessProfiles->count() > 0 )
                <li class="active"><a href="/portfolios"><i class="fas fa-sitemap"></i><span> @lang('phrases.portfoliomanagement')</span></a></li>
                    @endif

                   @if (auth()->user()->isTasksManager())

                        <li class="treeview">
                            <a href="#"><i class="fas fa-tasks"></i><span> Task Management</span>
                                {{--TODO <i class="fas fa-angle-left pull-right"></i>--}}
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fas fa-book"></i><span> @lang('phrases.workflow')</span></a></li>

                            </ul>
                        </li>
                        @endif
                            @if (auth()->user()->isUserManager())
            <li class="treeview">
                <a href="#"><i class="fas fa-users"></i><span> User Management</span>
                    {{--TODO <i class="fas fa-angle-left pull-right"></i>--}}
                </a>
                <ul class="treeview-menu">
                    <li><a href="/users"><i class="fas fa-address-book"></i><span> @lang('phrases.users')</span></a></li>
                    <li><a href="/roles"><i class="fab fa-black-tie"></i></i><span> @lang('phrases.roles')</span></a></li>
                    <li><a href="/permissions"><i class="fas fa-ticket-alt"></i><span> @lang('phrases.permissions')</span></a></li>
                </ul>
            </li>


                    @endif
                @endguest
        </ul><!-- /.sidebar-menu -->
        <div style="position: fixed; bottom: 0;">
            <ul class="sidebar-menu">
            <li><a href="#"><i class="fas fa-code-branch"></i><span> {{\App\GlobalParameter::where('id', 1)->first()->cloud_version}} {{\App\GlobalParameter::where('id', 1)->first()->cloud_type}}</span></a></li>
            </ul>
        </div>
    </div>

    <!-- /.sidebar -->
</div><!-- /.main-sidebar -->