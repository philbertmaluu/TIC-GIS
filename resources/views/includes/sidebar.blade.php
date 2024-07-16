<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">

            @if(Auth::user()->role == 1)
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboards') }}">Dashboard</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">

                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <span class="nav-text">Potential Sites</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('potentialarea.index') }}">Maps</a></li>

                </ul>
            </li>



            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-thermometer-quarter" aria-hidden="true"></i>
                    <span class="nav-text">Temperature</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('temperature.index') }}">Maps</a></li>
                    <li><a href="javascript:void()">Graphs</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Rainfall</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('railfall.index') }}">Maps</a></li>
                    <li><a href="javascript:void()">Graphs</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    <span class="nav-text">Landcover</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('landcover.index') }}">Maps</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-map" aria-hidden="true"></i>
                    <span class="nav-text">DEM</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dem.index') }}">Maps</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-map" aria-hidden="true"></i>
                    <span class="nav-text">Slope</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('slope.index') }}">Maps</a></li>
                </ul>
            </li>


            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-adjust" aria-hidden="true"></i>
                    <span class="nav-text">Soil</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('soil.index') }}">Maps</a></li>
                </ul>
            </li>




            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span class="nav-text">User Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Investors</a></li>
                    <li><a href="javascript:void()">Guests</a></li>
                    <li><a href="javascript:void()">Admins</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-cog"></i>
                    <span class="nav-text">Settings</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="javascript:void()">Profile</a></li>
                    <li><a href="javascript:void()">Permisions</a></li>
                    <li><a href="javascript:void()">Sites</a></li>
                </ul>
            </li>
            @else

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <span class="nav-text">Investiment Areas</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dashboards') }}">Investiments</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-thermometer-quarter" aria-hidden="true"></i>
                    <span class="nav-text">Temperature</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('temperature.index') }}">Maps</a></li>
                    <li><a href="javascript:void()">Graphs</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Rainfall</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('railfall.index') }}">Maps</a></li>
                    <li><a href="javascript:void()">Graphs</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                    <span class="nav-text">Landcover</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('landcover.index') }}">Maps</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-map" aria-hidden="true"></i>
                    <span class="nav-text">DEM</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('dem.index') }}">Maps</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-map" aria-hidden="true"></i>
                    <span class="nav-text">Slope</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('slope.index') }}">Maps</a></li>
                </ul>
            </li>


            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-adjust" aria-hidden="true"></i>
                    <span class="nav-text">Soil</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('soil.index') }}">Maps</a></li>
                </ul>
            </li>


            @endif
        </ul>



    </div>
</div>