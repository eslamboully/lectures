<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset(admin()->image)}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{admin()->full_name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> @lang('adminpanel::adminpanel.online')</a>
            </div>
        </div>

        <!-- start search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="@lang('adminpanel::adminpanel.search')">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- end search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">@lang('adminpanel::adminpanel.main_navigation')</li>

            <li class="{{ active('/') }}">
                <a href="{{ url('/admin') }}">
                    <i class="fa fa-dashboard"></i> <span>@lang('admin::admin.home')</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            @if ( auth()->guard('admin')->user()->can('read_admins'))
            <li class=" {{ active('admins') }} treeview">
                <a href="#">
                    <i class="fa fa-user-secret"></i> <span>@lang('admin::admin.admins')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('admins.index') }}"><i class="fa fa-user-secret"></i> @lang('admin::admin.admins')</a></li>
                @if ( auth()->guard('admin')->user()->can('add_admins'))
                    <li><a href="{{ route('admins.create') }}"><i class="fa fa-plus"></i> @lang('adminpanel::adminpanel.add')</a></li>
                @endif
                </ul>
            </li>
            @endif
            @if ( auth()->guard('admin')->user()->can('read_users'))
            <li class=" {{ active('users') }} treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>@lang('admin::admin.users')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('users.index') }}"><i class="fa fa-user"></i> @lang('admin::admin.users')</a></li>
                    @if ( auth()->guard('admin')->user()->can('add_users'))
                    <li><a href="{{ route('users.create') }}"><i class="fa fa-plus"></i> @lang('adminpanel::adminpanel.add')</a></li>
                    @endif
                </ul>
            </li>
            @endif
            @if ( auth()->guard('admin')->user()->can('read_services'))
            <li class=" {{ active('services') }} treeview">
                <a href="#">
                    <i class="fa fa-500px"></i> <span>@lang('service::service.services_and_cat')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="active"><a href="{{ route('service-categories.index') }}"><i class="fa fa-list"></i>@lang('service::category.categories')</a></li>

                    <li class="active">
                        <a href="{{ route('services.index') }}"><i class="fa fa-500px"></i>
                            @lang('service::service.services')
                        </a>
                    </li>
                </ul>
            </li>
            @endif

                @if(auth()->guard('admin')->user()->can('read_levelOne'))
                <li class=" {{ active('level_ones') }} treeview">
                    <a href="#">
                        <i class="fa fa-500px"></i> <span>@lang('levels::level.level_one')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ route('level_ones.index') }}"><i class="fa fa-list"></i>@lang('levels::level.level_one')</a></li>
                        <li class="active"><a href="{{ route('level_ones.create') }}"><i class="fa fa-plus"></i>@lang('admin::admin.add')</a>
                        </li>
                    </ul>
                </li>
                @endif

                @if(auth()->guard('admin')->user()->can('read_levelTwo'))
                    <li class=" {{ active('level_twos') }} treeview">
                        <a href="#">
                            <i class="fa fa-500px"></i> <span>@lang('levels::level.level_two')</span>
                            <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="{{ route('level_twos.index') }}"><i class="fa fa-list"></i>@lang('levels::level.level_two')</a></li>
                            <li class="active"><a href="{{ route('level_twos.create') }}"><i class="fa fa-plus"></i>@lang('admin::admin.add')</a>
                            </li>
                        </ul>
                    </li>
                @endif

            @if(auth()->guard('admin')->user()->can('read_levelThree'))
                <li class=" {{ active('level_threes') }} treeview">
                    <a href="#">
                        <i class="fa fa-500px"></i> <span>@lang('levels::level.level_three')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ route('level_threes.index') }}"><i class="fa fa-list"></i>@lang('levels::level.level_three')</a></li>
                        <li class="active"><a href="{{ route('level_threes.create') }}"><i class="fa fa-plus"></i>@lang('admin::admin.add')</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if(auth()->guard('admin')->user()->can('read_levelFour'))
                <li class=" {{ active('level_fours') }} treeview">
                    <a href="#">
                        <i class="fa fa-500px"></i> <span>@lang('levels::level.level_four')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ route('level_fours.index') }}"><i class="fa fa-list"></i>@lang('levels::level.level_four')</a></li>
                        <li class="active"><a href="{{ route('level_fours.create') }}"><i class="fa fa-plus"></i>@lang('admin::admin.add')</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if(auth()->guard('admin')->user()->can('read_levelFive'))
                <li class=" {{ active('level_fives') }} treeview">
                    <a href="#">
                        <i class="fa fa-500px"></i> <span>@lang('levels::level.level_five')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ route('level_fives.index') }}"><i class="fa fa-list"></i>@lang('levels::level.level_five')</a></li>
                        <li class="active"><a href="{{ route('level_fives.create') }}"><i class="fa fa-plus"></i>@lang('admin::admin.add')</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if(auth()->guard('admin')->user()->can('read_levelSix'))
                <li class=" {{ active('level_sixs') }} treeview">
                    <a href="#">
                        <i class="fa fa-500px"></i> <span>@lang('levels::level.level_six')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ route('level_sixs.index') }}"><i class="fa fa-list"></i>@lang('levels::level.level_six')</a></li>
                        <li class="active"><a href="{{ route('level_sixs.create') }}"><i class="fa fa-plus"></i>@lang('admin::admin.add')</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if(auth()->guard('admin')->user()->can('read_levelSeven'))
                <li class=" {{ active('level_sevens') }} treeview">
                    <a href="#">
                        <i class="fa fa-500px"></i> <span>@lang('levels::level.level_seven')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ route('level_sevens.index') }}"><i class="fa fa-list"></i>@lang('levels::level.level_seven')</a></li>
                        <li class="active"><a href="{{ route('level_sevens.create') }}"><i class="fa fa-plus"></i>@lang('admin::admin.add')</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if(auth()->guard('admin')->user()->can('read_levelEight'))
                <li class=" {{ active('level_eights') }} treeview">
                    <a href="#">
                        <i class="fa fa-500px"></i> <span>@lang('levels::level.level_eight')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ route('level_eights.index') }}"><i class="fa fa-list"></i>@lang('levels::level.level_eight')</a></li>
                        <li class="active"><a href="{{ route('level_eights.create') }}"><i class="fa fa-plus"></i>@lang('admin::admin.add')</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if(auth()->guard('admin')->user()->can('read_levelNine'))
                <li class=" {{ active('level_nines') }} treeview">
                    <a href="#">
                        <i class="fa fa-500px"></i> <span>@lang('levels::level.level_nine')</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="{{ route('level_nines.index') }}"><i class="fa fa-list"></i>@lang('levels::level.level_nine')</a></li>
                        <li class="active"><a href="{{ route('level_nines.create') }}"><i class="fa fa-plus"></i>@lang('admin::admin.add')</a>
                        </li>
                    </ul>
                </li>
            @endif

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
