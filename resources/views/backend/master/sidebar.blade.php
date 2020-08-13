<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <form role="search">
    </form>
    <ul class="nav menu">
        <li @yield('admin') ><a href="/admin"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
        <li @yield('category')><a href="/admin/category"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg>Category Jobs</a></li>
        <li @yield('company')><a href="/admin/company"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg>Company</a></li>
        <li @yield('job')><a href="/admin/job"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad" /></svg> Jobs</a></li>
        <li @yield('order')><a href="/admin/order"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad" /></svg> Order Job</a></li>
        <div  id="menu" @yield('setting') >
            <li class="setting">
              <a href="javascript:void(0)">
                <svg class="glyph stroked notepad">
                    <use xlink:href="#stroked-notepad"></use>
                </svg>
                <span {{isset($item) ? 'style=color:#fff' : ''}}>Setting</span>
              </a>
              <ul class="dropdown_menu">
                <li @yield('setting_menu')><a href="/admin/setting/menu">Setting Menu</a></li>
                <li @yield('setting_testimonial')><a href="/admin/setting/testimonial">Setting Testimonialt</a></li>
                <li @yield('setting_contact')><a href="/admin/setting/contact">Setting Contact</a></li>
              </ul>
            </li>
         </div>
        <li role="presentation" class="divider"></li>
        <li @yield('user')><a href="/admin/user"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Users Admin</a></li>
        <li @yield('user_client')><a href="/admin/user/client"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Users Client</a></li>
        <li @yield('user_candidate')><a href="/admin/user/candidate"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Users Candidate</a></li>
    </ul>

</div>

<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
<script>
  $('#menu > li').hover(function() {
    // khi thẻ menu li bị hover thì drop down menu thuộc thẻ li đó sẽ trượt xuống(hiện)
    $('.dropdown_menu', this).slideDown();
  },function() {
    // khi thẻ menu li bị out không hover nữa thì drop down menu thuộc thẻ li đó sẽ trượt lên(ẩn)
    $('.dropdown_menu', this).slideUp();
  });

  $('.dropdown_menu > li').hover(function() {
    // khi thẻ dropdown_menu li bị hover thì submenusubmenu thuộc thẻ li đó sẽ trượt xuống(hiện)
    $('.submenu', this).slideDown();
  },function() {
    // khi thẻ dropdown_menu li bị hover thì submenusubmenu thuộc thẻ li đó sẽ trượt lên(ẩnẩn)
    $('.submenu', this).slideUp();
  });
</script>
