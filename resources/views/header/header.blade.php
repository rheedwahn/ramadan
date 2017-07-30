    <nav class="navbar navbar-toggleable-md navbar-dark inverse fixed-top">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">CONTACT</a>
                    </li>
                    @if(Auth::guest()) 
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#basic">LOGIN</a>
                            <div class="modal fade" id="basic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog cascading-modal" role="document">
                                    <!--Content-->
                                    <div class="modal-content">

                                        <!--Header-->
                                        <div class="modal-header inverse darken-3 white-text">
                                            
                                            <h4 class="title"><i class="fa fa-user"></i> Log in</h4>
                                        </div>
                                        <!--Body-->
                                        <div class="modal-body">
                                        <div id="log" style="display:none">
                                            <a class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                            <span id="msg"></span>
                                        </div>
                                            <form method="POST" id="form_login" action="{{ route('user.login') }}" >
                                                {{ csrf_field() }}
                                                <div class="md-form form-sm" id="loader" style="display:none;">
                                                    <img src="{{ asset('ramadhan/loader.gif') }}" alt="loader" />
                                                </div>
                                                <div class="md-form form-sm">
                                                    <i class="fa fa-envelope prefix"></i>
                                                    <input type="email" name="email" id="form30" class="form-control" required=" required" name="email">
                                                    <label for="form30">Your email</label>
                                                </div>

                                                <div class="md-form form-sm">
                                                    <i class="fa fa-lock prefix"></i>
                                                    <input type="password" name="password" id="form31" class="form-control" required=" required" name="password">
                                                    <label for="form31">Your password</label>
                                                </div>
                                                <p id="errorMessage" style="color: red; font-size: 18px;"></p>
                                                <div class="text-center mt-2">
                                                    <button type="button" class="btn inverse waves-effect" id="login" >Log in <i class="fa fa-sign-in ml-1"></i></button>
                                                    
                                                </div>
                                            </form>
                                        </div>
                                        <!--Footer-->
                                        <div class="text-center">
                                            <div class="">
                                                <h4>Sign in with</h4>
                                            </div><br>
                                            <div class="text-center social">
                                                <a href="#"><img src="{{ asset('ramadhan/img/svg/facebook.svg') }}" alt="facebook" style="width:20px;"></a>
                                                <a href="#"><img src="{{ asset('ramadhan/img/twitter.png') }}" alt="facebook" style="width:20px;"></a>
                                                <a href="#"><img src="{{ asset('ramadhan/img/google-plus.png') }}" alt="facebook" style="width:20px;"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!--Modal: Login Form-->
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link">LOGOUT</a>
                    </li>
                    @endif
                       
                </ul>
            </div>
        </div>
    </nav>