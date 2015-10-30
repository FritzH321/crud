<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="{{ Request::is( 'home') ? 'active' : '' }}"><a href="{{ url('home') }}"><i class='fa fa-dashboard'></i> <span>Home</span></a></li>
            <li  class="{{ Request::is( 'clients') ? 'active' : '' }}"><a href="{{ url('clients') }}"><i class='fa fa-users'></i> <span>Clients</span></a></li>

            <li  class="{{ Request::is( 'settings') ? 'active' : '' }}"><a href="{{ url('settings') }}"><i class='fa fa-cogs'></i> <span>Settings</span></a></li>

            {{--<li class="treeview {{ Request::is( 'settings') ? 'active' : '' }}">
                <a href="#"><i class='fa fa-link'></i> <span>Settings</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="{{ Request::is( 'settings') ? 'active' : '' }}"><a  href="{{ url('settings') }}">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>--}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
