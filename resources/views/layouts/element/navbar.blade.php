<nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('home') }}" rel="tooltip" title="tagit" data-placement="bottom">
                <span>Tagit •</span> Vikas
            </a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a>
                            BLK•
                        </a>
                    </div>
                    <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="#" target="_blank">
                        <i class="fab fa-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="#" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item p-0">
                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="#" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>


                <!--                <li class="nav-item">
                                    <a class="nav-link btn btn-default d-none d-lg-block" href="{{ route('login') }}" onclick="scrollToDownload()">
                                        <i class="tim-icons icon-cloud-download-93"></i> Download
                                    </a>
                                </li>-->
                @if (Auth::check())
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="fa fa-cogs d-lg-none d-xl-none"></i>{{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="{{ route('users.hash') }}" class="dropdown-item">
                            <i class="tim-icons icon-paper"></i> My Tags
                        </a>
                        <a href="examples/profile-page.html" class="dropdown-item">
                            <i class="tim-icons icon-single-02"></i>Profile Page
                        </a>
                        <a href="examples/landing-page.html" class="dropdown-item">
                            <i class="fa fa-cogs"></i>Setting
                        </a>
                        <a href="{{ route('logout') }}" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                    </div>
                </li>
                @else
                <li class="nav-item">
                    <a class="btn btn-link btn-success " href="{{ route('login') }}" onclick="scrollToDownload()">
                        <i class="tim-icons icon-single-02"></i> Login
                    </a>
                </li>
                @endif

            </ul>
        </div>
    </div>
</nav>