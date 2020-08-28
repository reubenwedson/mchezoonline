<header class="kode_header_2">
    <!--Header 2 Top Bar Start-->
    <div class="kf_top_bar">
        <div class="container">
            <div class="pull-left">
                <ul class="kf_social2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div>
            <div class="kf_right_dec">
                <ul class="kf_topdec">
                    <li>
                        <div class="kf_lung">
                            <span>Curreny :</span>
                            <div class="dropdown">
                                <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> USD
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dLabel">
                                    <li>BRL</li>
                                    <li>EUR</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Whishlist</a></li>
                </ul>
                <ul class="kf_user">
                    <li><a href="#"><i class="fa fa-lock"></i>Sign up</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
                <a href="#" data-toggle="modal" data-target="#search" class="kode_search"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>
    <!--Header 2 Top Bar End-->
    <div class="container">
        <!--Logo Bar Start-->
        <div class="kode_logo_bar">
            <!--Logo Start-->
            <div class="logo">
                <a href="#">
                    <img src="images/logo 1.png" alt="">
                </a>
            </div>
            <!--Logo Start-->
            <!--Navigation Wrap Start-->
            <div class="kode_navigation">
                <!--Navigation Start-->
                <ul class="nav">
                    <li><a href="{{url('/')}}">home</a></li>
                    <li>
                        <a href="#">Sports</a>
                        <ul>
                            @foreach($all_sports as $all_sport)
                            <li><a href="#">{{$all_sport->strSport}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="#">Fixtures & Results</a>
                        <ul>
                            <li><a href="latest-result.html">latest result</a></li>
                            <li><a href="team-schedule.html">teamschedule</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">team</a>
                        <ul>
                            <li><a href="team-overview.html">team overview</a></li>
                            <li><a href="team-roster.html">team roster</a></li>
                            <li><a href="team-schedule.html">team schedule</a></li>
                            <li><a href="team-standing.html">team standing</a></li>
                            <li><a href="team-comparison.html">team comparison</a></li>
                            <li><a href="teamdetails.html">team details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">player</a>
                        <ul>
                            <li><a href="player-detail.html">player detail</a></li>
                            <li><a href="players-standing.html">players standing</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">pages</a>
                        <ul>
                            <li><a href="ticket.html">ticket</a></li>
                            <li><a href="shop.html">shop</a></li>
                            <li><a href="ticket-detail.html">ticket detail</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="comingsoon.html">comingsoon</a></li>
                            <li><a href="widget.html">widget</a></li>
                            <li><a href="contactus.html">contact us</a></li>
                        </ul>
                    </li>
                    <li class="kf_megamenu">
                        <a href="#">mega menu</a>
                        <div class="megamenu_dec container">
                            <div class="col-md-3">
                                <h5 class="megamenu_hd">ShortCodes 1</h5>
                                <ul class="megamenu_list">
                                    <li><a href="ticket.html">ticket</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="ticket-detail.html">ticket detail</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="comingsoon.html">comingsoon</a></li>
                                    <li><a href="widget.html">widget</a></li>
                                    <li><a href="contactus.html">contact us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5 class="megamenu_hd">ShortCodes 1</h5>
                                <ul class="megamenu_list">
                                    <li><a href="ticket.html">ticket</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="ticket-detail.html">ticket detail</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="comingsoon.html">comingsoon</a></li>
                                    <li><a href="widget.html">widget</a></li>
                                    <li><a href="contactus.html">contact us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5 class="megamenu_hd">ShortCodes 1</h5>
                                <ul class="megamenu_list">
                                    <li><a href="ticket.html">ticket</a></li>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="ticket-detail.html">ticket detail</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="comingsoon.html">comingsoon</a></li>
                                    <li><a href="widget.html">widget</a></li>
                                    <li><a href="contactus.html">contact us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h5 class="megamenu_hd">ShortCodes 1</h5>
                                <ul class="kf_table">
                                    <li>
                                        <div class="table_no">
                                            <span>1</span>
                                        </div>
                                        <div class="team_logo">
                                            <span><img src="images/team_logo.png" alt=""></span>
                                            <a href="#">Ac milan</a>
                                        </div>
                                        <div class="team_point">
                                            <span>99</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="table_no">
                                            <span>2</span>
                                        </div>
                                        <div class="team_logo">
                                            <span><img src="images/team_logo2.png" alt=""></span>
                                            <a href="#">Chelsae</a>
                                        </div>
                                        <div class="team_point">
                                            <span>94</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="table_no">
                                            <span>3</span>
                                        </div>
                                        <div class="team_logo">
                                            <span><img src="images/team_logo3.png" alt=""></span>
                                            <a href="#">Real Madrid</a>
                                        </div>
                                        <div class="team_point">
                                            <span>90</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="table_no">
                                            <span>4</span>
                                        </div>
                                        <div class="team_logo">
                                            <span><img src="images/team_logo4.png" alt=""></span>
                                            <a href="#">Bryan munich</a>
                                        </div>
                                        <div class="team_point">
                                            <span>88</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <!--DL Menu Start-->
                <div id="kode-responsive-navigation" class="dl-menuwrapper">
                    <button class="dl-trigger">Open Menu</button>
                    <ul class="dl-menu">
                        <li><a href="index-2.html">home</a></li>
                        <li class="menu-item kode-parent-menu">
                            <a href="#">Fixtures & Results</a>
                            <ul class="dl-submenu">
                                <li><a href="latest-result.html">latest result</a></li>
                                <li><a href="team-schedule.html">teamschedule</a></li>
                            </ul>
                        </li>
                        <li class="menu-item kode-parent-menu"><a href="#">blog</a>
                            <ul class="dl-submenu">
                                <li>
                                    <a href="#">blog 1</a>
                                    <ul class="dl-submenu">
                                        <li><a href="blog-grid-2.html">blog 2</a></li>
                                        <li><a href="blog-grid-3.html">blog 3</a></li>
                                        <li><a href="blog-grid-4.html">blog 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">blog 2</a>
                                    <ul class="dl-submenu">
                                        <li><a href="blog2-grid-2.html">blog 2</a></li>
                                        <li><a href="blog2-grid-3.html">blog 3</a></li>
                                        <li><a href="blog2-grid-4.html">blog 4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">blog 3</a>
                                    <ul class="dl-submenu">
                                        <li><a href="blog3-grid-2.html">blog 2</a></li>
                                        <li><a href="blog3-grid-3.html">blog 3</a></li>
                                        <li><a href="blog3-grid-4.html">blog 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-grid-with-sidebar.html">blog grid</a></li>
                                <li><a href="blog-large-with-sidebar.html">blog large</a></li>
                                <li><a href="blog-listing-with-sidebar.html">blog listing</a></li>
                                <li><a href="blog-detail.html">blog detail</a></li>
                            </ul>
                        </li>
                        <li class="menu-item kode-parent-menu"><a href="#">team</a>
                            <ul class="dl-submenu">
                                <li><a href="team-overview.html">team overview</a></li>
                                <li><a href="team-roster.html">team roster</a></li>
                                <li><a href="team-schedule.html">team schedule</a></li>
                                <li><a href="team-standing.html">team standing</a></li>
                                <li><a href="team-comparison.html">team comparison</a></li>
                                <li><a href="teamdetails.html">team details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item kode-parent-menu"><a href="#">player</a>
                            <ul class="dl-submenu">
                                <li><a href="player-detail.html">player detail</a></li>
                                <li><a href="players-standing.html">players standing</a></li>
                            </ul>
                        </li>
                        <li class="menu-item kode-parent-menu"><a href="#">pages</a>
                            <ul class="dl-submenu">
                                <li><a href="ticket.html">ticket</a></li>
                                <li><a href="shop.html">shop</a></li>
                                <li><a href="ticket-detail.html">ticket detail</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="comingsoon.html">comingsoon</a></li>
                                <li><a href="widget.html">widget</a></li>
                            </ul>
                        </li>
                        <li><a href="contactus.html">contact us</a></li>
                    </ul>
                </div>
                <!--DL Menu END-->
                <!--Navigation End-->
                <a href="#" class="kf_cart">
                    <i class="fa fa-shopping-basket "></i>
                    <div class="text">
                        <span>Your Cart (03)</span>
                        <em>$1200.00</em>
                    </div>
                </a>
            </div>
            <!--Navigation Wrap End-->
        </div>
        <!--Logo Bar End-->
    </div>
</header>
