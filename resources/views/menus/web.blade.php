<ul class="navbar-nav ml-auto">
    @foreach($items as $menu_item)
        <li class="nav-item">

        @if(Auth::check() and $menu_item->link() == '/login')
            <li class="dropdown profile text-right">
                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-expanded="false">
                    <img src="/storage/users/default.png" class="profile-img"> <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-animated">
                    <li class="profile-img">
                        <div class="profile-body">
                            <h5>Greg</h5>
                            <h6>admin@admin.com</h6>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <form action="http://127.0.0.1:8000/logout" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger btn-block">
                                <i class="voyager-power"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        @endif

        @if( ! Auth::check() and $menu_item->link() == '/login')
            <li class="dropdown profile">
                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-expanded="false">
                    <img src="/storage/users/default.png" class="profile-img"> <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-animated">
                    <li class="divider"></li>
                    <li class="class-full-of-rum">

                        <div class="login-container">

                            <p>Sign In Below:</p>

                            <form action="http://127.0.0.1:8000/login" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group form-group-default" id="emailGroup">
                                    <label>E-mail</label>
                                    <div class="controls">
                                        <input type="text" name="email" id="email" value="" placeholder="E-mail" class="form-control" required="">
                                    </div>
                                </div>

                                <div class="form-group form-group-default" id="passwordGroup">
                                    <label>Password</label>
                                    <div class="controls">
                                        <input type="password" name="password" placeholder="Password" class="form-control" required="">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-block login-button">
                                    <span class="signin">Login</span>
                                </button>

                            </form>

                            <div style="clear:both"></div>

                        </div>
                    </li>
                </ul>
            </li>
        @endif

        @if($menu_item->link() != '/login')

            <a class="nav-link" href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a>

        @endif
        </li>
    @endforeach
</ul>