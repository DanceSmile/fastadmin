<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">
                   @include("layouts.profile")
                    <ul id="mainnav-menu" class="list-group">
                        <li class="list-header">Navigation</li>
                        <li>
                            <a href="index.html">
                                <i class="demo-psi-home"></i>
                                <span class="menu-title">
									<strong>Dashboard</strong>
								</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="demo-psi-split-vertical-2"></i>
                                <span class="menu-title">
									<strong>Layouts</strong>
								</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse">
                                <li><a href="layouts-collapsed-navigation.html">Collapsed Navigation</a></li>
                                <li><a href="layouts-offcanvas-navigation.html">Off-Canvas Navigation</a></li>
                            </ul>
                        </li>

                        <!--Menu list item-->
                        <li>
                            <a href="#">
                                <i class="demo-psi-gear-2"></i>
                                <span class="menu-title">
									<strong>Widgets</strong>
									<span class="pull-right badge badge-warning">24</span>
								</span>
                            </a>
                        </li>
                        <li class="list-divider"></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>