    <header id="header" class="header">
        <div class="header-menu">
            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">

                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            {{-- <span class="count bg-primary">2</span> --}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="https://www.google.com/imgres?q=logo%20user&imgurl=https%3A%2F%2Fpng.pngtree.com%2Fpng-vector%2F20191009%2Fourmid%2Fpngtree-user-icon-png-image_1796659.jpg&imgrefurl=https%3A%2F%2Fpngtree.com%2Fso%2Fuser-icon&docid=szqkvE-_5Cm9EM&tbnid=DZlkBa8SsD13sM&vet=12ahUKEwi5h7mO456KAxVq1DgGHVWqIDcQM3oECBcQAA..i&w=360&h=360&hcb=2&ved=2ahUKEwi5h7mO456KAxVq1DgGHVWqIDcQM3oECBcQAA" alt="User Avatar">
                        {{-- <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.jpg')}}" alt="User Avatar"> --}}

                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                        <a class="nav-link" href="{{route('logout')}}"><i class="fa fa-power -off"></i>Log Out</a>
                    </div>
                </div>

                <div class="language-select dropdown" id="language-select">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                        <i class="flag-icon flag-icon-id"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="language">
                        <div class="dropdown-item">
                            <span class="flag-icon flag-icon-jp"></span>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-es"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-us"></i>
                        </div>
                        <div class="dropdown-item">
                            <i class="flag-icon flag-icon-it"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </header>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>

        <div class="col-sm-8">

        {{-- <div class="col-sm-8">

            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active"></li>
                    </ol>
                </div>
            </div>
        </div>

        </div> --}}

    </div>
