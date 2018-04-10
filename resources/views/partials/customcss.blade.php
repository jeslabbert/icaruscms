<style>
    .skin-blue .main-header .logo {
        background-color: {{\App\CustomCSS::where('id', 1)->first()->topbar_bgcolor}};
    }
    .skin-blue .main-header .logo:hover {
        background-color: {{\App\CustomCSS::where('id', 1)->first()->topbar_bgcolor}};
    }
    .skin-blue .main-header .navbar .sidebar-toggle:hover {
        background-color: rgba(0,0,0,0.1);
    }
    .skin-blue .main-header .navbar {
        background-color: {{\App\CustomCSS::where('id', 1)->first()->topbar_bgcolor}};
    }
    .skin-blue .main-header .navbar .nav>li>a {
        color: {{\App\CustomCSS::where('id', 1)->first()->topbar_fontcolor}};
    }
    .skin-blue .main-header .navbar .sidebar-toggle {
        color: {{\App\CustomCSS::where('id', 1)->first()->topbar_fontcolor}};
    }
    .skin-blue .main-header .navbar .sidebar-toggle:hover {
        color: {{\App\CustomCSS::where('id', 1)->first()->topbar_fontcolor}};
    }
    .skin-blue .main-header li.user-header {
        background-color: {{\App\CustomCSS::where('id', 1)->first()->topbar_bgcolor}};
    }
    .navbar-nav > .user-menu > .dropdown-menu > li.user-header > p {
        color: {{\App\CustomCSS::where('id', 1)->first()->topbar_fontcolor}};
    }
    .skin-blue .sidebar-menu>li.active>a {
        border-left-color: {{\App\CustomCSS::where('id', 1)->first()->topbar_bgcolor}};
    }
    #btn-qrlog {
        background-color: {{\App\CustomCSS::where('id', 1)->first()->topbar_bgcolor}};
        color: {{\App\CustomCSS::where('id', 1)->first()->topbar_fontcolor}};
    }
</style>