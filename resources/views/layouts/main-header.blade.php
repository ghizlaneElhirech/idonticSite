<!--=================================
header start-->
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    <div class="text-left navbar-brand-wrapper">
         <a class="navbar-brand brand-logo" href="{{ url('/') }}"><img id="logo_d" src="/images/logo.png"  alt=""><p id="logo_name" >IDON<span  id="cs">TICS</span> </p></a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('/dashboard') }}"><img id="logo_d" src="images/logo.png"  alt=""></a>


    </div>
    <!-- Top bar left -->
    <ul class="nav navbar-nav mr-auto">
        <li class="nav-item">
            <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>
        <li class="nav-item">
            <div class="search">
                <a class="search-btn not_click" href="javascript:void(0);"></a>
                <div class="search-box not-click">
                    <input type="text" class="not-click form-control" placeholder="Search" value=""
                        name="search">
                    <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                </div>
            </div>
        </li>
    </ul>
    <!-- top bar right -->
    <ul class="nav navbar-nav ml-auto">

        

        <li class="nav-item fullscreen">
            <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
        </li>
        <li class="nav-item dropdown ">
            <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <i class="ti-bell"></i>
                <span class="badge badge-danger notification-status"> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">
                <div class="dropdown-header notifications">
                    <strong>{{trans('Sidebar_trans.Notifications')}}</strong>
                     
                                           
                   <span class="badge badge-pill badge-warning" id="notifications_count">{{ auth()->user()->unreadNotifications->count() }}</span>
                   <br>
                   <span class="badge badge-pill badge-warning "><a
                                            href="\MarkAsRead_all">mark as read all</a></span>
                </div>
               <div class="dropdown-divider" id="unreadNotifications"></div>
                 @foreach (auth()->user()->unreadNotifications as $notification)
                <a href="{{ route('visitorsadmin.index') }}" class="dropdown-item" >{{ $notification->data['title'] }} by {{ $notification->data['user'] }}
                 <small class="float-right text-muted time">{{ $notification->created_at }}</small> </a>
                @endforeach

            </div>
        </li>
      
        <li class="nav-item dropdown mr-30">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <img src="{{ URL::asset('assets/images/user_icon.png') }}" alt="avatar">


            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">{{ Auth::user()->name }}</h5>
                            <span>{{ Auth::user()->email }}</span>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
                
                <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>Profile</a>
                
                <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="{{route('users.edit',Auth::user()->id)}}"><i class="text-info ti-settings"></i>Settings</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="text-danger ti-unlock"></i>logout</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
            </div>
        </li>
    </ul>
</nav>

<script>
    setInterval(function() {
        $("#notifications_count").load(window.location.href + " #notifications_count");
        $("#unreadNotifications").load(window.location.href + " #unreadNotifications");
    }, 5000);
</script>
<!--=================================
header End-->
