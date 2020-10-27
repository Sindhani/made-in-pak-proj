<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true"
     data-img="{{asset('vendor/theme-assets/images/backgrounds/02.jpg')}}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{route('admin.dashboard.index')}}">
                    <img class="brand-logo"
                         alt="Chameleon admin logo"
                         src="{{asset('vendor/theme-assets/images/logo/logo.png')}}"/>
                    <h3 class="brand-text">Chameleon</h3>
                </a>
            </li>
            <li class="nav-item d-md-none">
                <a class="nav-link close-navbar"><i class="ft-x"></i></a>
            </li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active">
                <a href="{{route('admin.dashboard.index')}}"><i class="ft-home"></i>
                    <span class="menu-title" data-i18n="">Dashboard</span></a>
            </li>
            <li class=""><a href="{{route('admin.sales.index')}}"><i class="ft-home"></i><span
            class="menu-title" data-i18n="">Sales</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.buyers.index')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Buyers</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.sellers.index')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Sellers</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.categories.index')}}"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Add Categories</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.sellers.index')}}"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Add SubCategory</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.assign-roles-and-permissions.index')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Orders</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.tag.index')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Tags</span></a>
            </li>
             <li class=" nav-item"><a href="{{route('admin.assign-roles-and-permissions.index')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Review & Ratings</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.category.index')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Category</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.subcategory.index')}}"><i class="ft-pie-chart"></i><span
            class="menu-title"
            data-i18n="">Sub Category</span></a>
            </li>

        </ul>
    </div>
    <div class="navigation-background"></div>
</div>

