@extends('front.layout')

@section('content')
 <!-- Home Section -->
        <section id="banner">
            <div class="container-fluid p-t-0 p-b-0">

                <!-- banner content-->
                <div class="banner-content">
                    <div class="banner-inner text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-8 col-md-offset-2">
                                    <h1 class="text-uppercase">Training the World's </h1>
                                    <h3 class="text-uppercase">Technology Professionals</h3>
                                    <a href="#" class="btn btn-default focus btn-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /banner content-->

            </div>
        </section>
        <!-- /Home Section -->

        <!-- Banner Bottom -->
        <section class="banner-bottom-info">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="b-icon-boxs"><span class="flaticon-team-work"></span>  Partners</div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="b-icon-boxs"><span class="flaticon-seo-training"></span> Training</div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="b-icon-boxs"><span class="flaticon-payment-method"></span>  Delivery</div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="b-icon-boxs b-r-none"><span class="flaticon-offering-left-hand"></span> Offers</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner Bottom -->

        <!-- /Slider -->

        <!-- About Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <!-- Section Left Heading -->
                        <div class="heading">
                            <h2 class="text-uppercase">{{ $home->title }}</h2>
                        </div>
                        <!-- /Section Left Heading -->

                        <!-- left Section details -->
                        <div class="left-section-details">
                            {!! $home->content !!}
                        </div>
                        <!-- /left Section details -->

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">

                        <!-- Icon Box -->
                        <div class="about-right-info">
                            <ul class="list-icon-box">
                                <li>
                                    <a href="#" target="blank"><img class="img-responsive" src="{{ asset('app-front/images/logo1.png') }}" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#" target="blank"><img class="img-responsive" src="{{ asset('app-front/images/logo2.png') }}" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#" target="blank"><img class="img-responsive" src="{{ asset('app-front/images/logo3.png') }}" alt="logo"></a>
                                </li>
                                <li>
                                    <a href="#" target="blank"><img class="img-responsive" src="{{ asset('app-front/images/logo4.png') }}" alt="logo"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- /Icon Box -->
                    </div>
                </div> 
            </div>
        </section>
        <!-- /About Section -->

        <!-- Section -->
        <section class="section-bg1">
            <div class="overlay">
                <div class="container">
                    <!-- section Title-->
                    <div class="row">
                        <div class="col-md-12 heading">
                            <h2 class="text-uppercase text-white text-center space-bottom">Receive expert training in <span>topics like</span></h2>
                        </div>
                    </div>
                    <!-- section Title-->

                    <!-- section Content-->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <ul class="nav nav-tabs nav-tabs-holder">
                                <li class="active"><a data-toggle="tab" href="#home">Application Development</a></li>
                                <li><a data-toggle="tab" href="#menu1">Cloud Computing</a></li>
                                <li><a data-toggle="tab" href="#menu2">Cybersecurity</a></li>
                                <li><a data-toggle="tab" href="#menu3">Leadership and Business Skills</a></li>
                                <li><a data-toggle="tab" href="#menu4">IT Best Practices</a></li>
                            </ul>

                            <div class="tab-content text-center text-white">
                                <div id="home" class="tab-pane fade in active">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi, amet aliquam? Obcaecati, numquam velit cumque ab! Dolorum non cumque alias nulla ea, odio nostrum voluptate magni illo dolorem sunt. Rem obcaecati et laborum eum quia, quas dolorum harum. Adipisci quas autem corporis quae commodi odit doloribus. Dolorum quam asperiores, nemo laudantium sunt, nisi velit, consequatur molestiae.
                                    </p>
                                    <a href="#" class="btn btn-default focus btn-more">View Courses</a>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <p>
                                        Phasellus tempus erat quis tortor convallis, vel consequat risus luctus. Nulla nec scelerisque turpis. Mauris tempor ex vitae lectus molestie aliquam. Pellentesque a suscipit eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus fermentum, tortor vitae rutrum egestas, velit enim scelerisque felis, sed aliquet odio tortor ac felis. Maecenas tincidunt in mi ut pretium. 
                                    </p>
                                    <a href="#" class="btn btn-default focus btn-more">View Courses</a>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <p>
                                        Sed blandit lobortis nisi ut cursus. Morbi blandit facilisis laoreet. Suspendisse cursus ac tellus sit amet ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse aliquam est a diam gravida porttitor. Etiam consequat tempus ante, rhoncus pretium dui ultrices ut. Maecenas imperdiet ut felis non commodo. Aliquam varius massa ipsum, nec pulvinar mauris tincidunt sed. 
                                    </p>
                                    <a href="#" class="btn btn-default focus btn-more">View Courses</a>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <p>
                                        In vel tincidunt sem. Duis luctus, lorem in tempor iaculis, libero quam tempor felis, et pretium nisi nisl quis tellus. Morbi ut facilisis velit. Phasellus vel turpis neque. Morbi leo tortor, lacinia vel ipsum non, imperdiet commodo purus. Mauris dictum pretium tincidunt. Aenean faucibus pharetra tincidunt. Fusce scelerisque mauris risus, ut fringilla nunc volutpat a. Mauris viverra magna sit amet leo lobortis rutrum. 
                                    </p>
                                    <a href="#" class="btn btn-default focus btn-more">View Courses</a>
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                    <p>
                                        In tempus laoreet interdum. Pellentesque posuere lacinia varius. Nulla hendrerit, tellus at viverra dignissim, odio massa suscipit felis, in congue felis neque sit amet est. Praesent viverra velit id est fermentum iaculis. Curabitur ut nisl sapien. Vestibulum hendrerit, nulla id aliquam pharetra, nisi justo blandit velit, vitae tristique ante augue eget nunc. Donec vel commodo dolor. 
                                    </p>
                                    <a href="#" class="btn btn-default focus btn-more">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section Content-->
            </div>
        </div>
    </section>
    <!-- /Section -->


    <!-- Section -->
    <section>
        <div class="container">
            <!-- section Title-->
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-3 heading">
                    <h2 class="text-uppercase text-center space-bottom">Learn the way you want <span>anywhere in the world</span></h2>
                </div>
            </div>
            <!-- section Title-->

            <!-- section Content-->
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <!-- icon-box -->
                    <div class="icon-box text-center">
                        <span class="flaticon-seo-training"></span>
                        <h3>Classroom Live</h3>
                    </div>
                    <!-- /icon-box -->
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <!-- icon-box -->
                    <div class="icon-box text-center">
                        <span class="flaticon-teacher-pointing-blackboard"></span>
                        <h3>Virtual Classroom Live</h3>
                    </div>
                    <!-- /icon-box -->
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <!-- icon-box -->
                    <div class="icon-box text-center">
                        <span class="flaticon-learning"></span>
                        <h3>GK Digital Learning</h3>
                    </div>
                    <!-- /icon-box -->
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <!-- icon-box -->
                    <div class="icon-box text-center">
                        <span class="flaticon-group"></span>
                        <h3>Private Group Training</h3>
                    </div>
                    <!-- /icon-box -->
                </div>
            </div>

            <!-- Divider -->
            <div class="divider"></div>
            <!-- /Divider -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi, amet aliquam? Obcaecati, numquam velit cumque ab! Dolorum non cumque alias nulla ea, odio nostrum voluptate magni illo dolorem sunt. Rem obcaecati et laborum eum quia, quas dolorum harum. Adipisci quas autem corporis quae commodi odit doloribus. Dolorum quam asperiores, nemo laudantium sunt, nisi velit, consequatur molestiae.
                    </p>
                    <a href="#" class="btn btn-default focus btn-more space-top-20">View Courses</a>
                </div>
            </div>
            <!-- section Content-->
        </div>
    </div>
</section>
<!-- /Section -->
@endsection