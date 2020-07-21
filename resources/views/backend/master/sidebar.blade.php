<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <form role="search">
    </form>
                   <ul class="nav menu">
        <li @yield('admin') ><a href="/admin"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
        <li @yield('category')><a href="/admin/category"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg>Category Jobs</a></li>
        <li @yield('company')><a href="/admin/company"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg>Company</a></li>
        <li @yield('job')><a href="/admin/job"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad" /></svg> Jobs</a></li>
        <li @yield('order')><a href="/admin/order"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad" /></svg> Order Job</a></li>
        <li role="presentation" class="divider"></li>
        <li @yield('user')><a href="/admin/user"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Users Admin</a></li>
        <li @yield('user_client')><a href="/admin/user/client"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Users Client</a></li>
        <li @yield('user_candidate')><a href="/admin/user/candidate"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Users Candidate</a></li>
    
    </ul>

</div>