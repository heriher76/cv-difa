<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info" style="background: url({{ url('images/user-img-background.jpg') }}) no-repeat no-repeat;">
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
            <div class="email">{{ Auth::user()->email }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="{{ url('admin/my-profile') }}"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Sign Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ url('admin') }}">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/about-me') }}">
                    <i class="material-icons">face</i>
                    <span>About Me</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/gallery') }}">
                    <i class="material-icons">description</i>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/slider') }}">
                    <i class="material-icons">description</i>
                    <span>Slider</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/messages') }}">
                    <i class="material-icons">description</i>
                    <span>Messages</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2019 <a href="javascript:void(0);">Admin Pages</a>.
        </div>
        <div class="version">
            <b>Version: </b> 0.0.1
        </div>
    </div>
    <!-- #Footer -->
</aside>