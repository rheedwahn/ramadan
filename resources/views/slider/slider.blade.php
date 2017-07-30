<div id="carousel-example-1z" class="carousel slide" data-ride="carousel">
        <!--Indicators-->
        <!-- <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol> -->
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!--First slide-->
            <div class="carousel-item active">
                <img class="mosque" src="{{ asset('ramadhan/img/mosque.png') }}" alt="First slide">
            </div>
            <div class="carousel-caption">
                <!--Intro content-->
                <div class="fully text-center">
                    <h2>ISLAM THE RELIGION OF PEACE</h2>
                    <h1>RAMADAN MUBARAKAT</h1>
                    <p>We help to locate nearest Iftor close to you</p>
                    <div class="bottons">
                        <a class="btn btn-border-default waves-effect btn-lg login" data-toggle="modal" data-target="#register">Register</a>
                            
                          <!--Modal: Register Form-->
                            <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog cascading-modal" role="document">
                                    <!--Content-->
                                    <div class="modal-content">

                                        <!--Header-->
                                        <div class="modal-header inverse darken-3 white-text">
                                            
                                            <h4 class="title"><i class="fa fa-user-plus"></i> Register</h4>
                                        </div>
                                        <!--Body-->

                                        <div class="modal-body"> 
                                        <div class="alert alert-danger print-error-msg" style="display:none">
                                            <ul></ul>
                                        </div>
                                            <form method="post" id="reg_form" action="{{ route('user.register') }}">
                                                {{ csrf_field() }}
                                                <div class="md-form form-sm" id="loader" style="display:none;">
                                                    <img src="{{ asset('ramadhan/loader.gif') }}" alt="loader" />
                                                </div>
                                                <div class="md-form form-sm">
                                                    <i class="fa fa-user prefix user" style="margin-left: -230px;"></i>
                                                    <input type="text" name="name" id="form32" class="form-control name">
                                                    <label for="form32">Your Name</label>
                                                </div>
                                                <div class="md-form form-sm">
                                                    <i class="fa fa-envelope prefix envelop" style="margin-left: -230px;"></i>
                                                    <input type="email" name="email" id="form32" class="form-control email">
                                                    <label for="form32">Your email</label>
                                                </div>

                                                <div class="md-form form-sm">
                                                    <i class="fa fa-lock prefix" style="margin-left: -230px;"></i>
                                                    <input type="password" name="password" id="form33" class="form-control password">
                                                    <label for="form33">Your password</label>
                                                </div>

                                                <div class="md-form form-sm">
                                                    <i class="fa fa-mobile prefix" style="margin-left: -230px;"></i>
                                                    <input type="text" name="phone" id="form34" class="form-control phone" min="11" max="11">
                                                    <label for="form34">Phone number</label>
                                                </div>
                                                <div class="md-form form-sm">
                                                    <i class="fa fa-map-marker prefix" style="margin-left: -230px;"></i>
                                                    <input type="text" name="address" id="form34" class="form-control address">
                                                    <label for="form34">Address</label>
                                                </div>

                                                <div class="text-center mt-2">
                                                    <button type="button" id="submit" class="btn inverse waves-effect" >Sign up <i class="fa fa-sign-in ml-1"></i></button>
                                                </div>
                                            </form>

                                        </div>
                                        <!--Footer-->
                                        
                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                            <!--Modal: Register Form-->
                        <span class="dropdown">
                          <button class="btn dropdown-toggle btn-border-default btn-lg" type="button" data-toggle="dropdown">Donate
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu" style="margin-left: 10px;">
                            <li><a href="{{ route('payment') }}">Money</a></li>
                            <li><a href="{{ route('cloth') }}">Clothes</a></li>
                            <li><a href="{{ route('cloth') }}">Food</a></li>
                          </ul>
                        </span>
                    </div>
                </div>

                            
               
        <!--/Intro content-->
            </div>
            <!--/First slide-->
            <!--Second slide-->
            <div class="carousel-item">
                <img class="mosque" src="{{ asset('ramadhan/img/mosque1.png') }}" alt="Second slide">
            </div>
            <!--/Second slide-->
            <!--Third slide-->
            <div class="carousel-item">
                <img class="mosque" src="{{ asset('ramadhan/img/mosque2.png') }}" alt="Third slide">
            </div>
            <!--/Third slide-->
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>

                            <p></br></p>
                            <p></br></p>
                            <p></br></p>