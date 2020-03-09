@section('sidebar')
    <div id="wrapper">
    <div class="overlay"></div>

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
        <ul class="nav sidebar-nav">
            <div class="sidebar-header">
                <div class="sidebar-brand">
                    @if(isset(Auth::user()->avatar))
                        <img src="image/{{Auth::user()->avatar}}" style="height: 100px; width: 100px; border-radius: 40px;">
                    @else
                        <img src="/image/default-user-profile.png" style="height: 100px; width: 100px; border-radius: 40px;">
                    @endif
                </div>
            </div>

            <div class="empty">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#team">Team</a></li>
            </div>
        </ul>
    </nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
        </button>

    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
@endsection
