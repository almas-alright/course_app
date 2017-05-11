@extends('front.layout')

@section('content')
 <!-- Home Section -->
    <section class="inner-banner">
      <div class="container-fluid p-t-0 p-b-0">

        <!-- banner content-->
         <div class="inner-content">
           <div class="inner-text text-center">
             <div class="container">
               <div class="row">
                 <div class="col-xs-12 col-md-8 col-md-offset-2">
                   <h1 class="text-uppercase">Contact Us</h1>
                 </div>
               </div>
             </div>
           </div>
         </div>
        <!-- /banner content-->

      </div>
    </section>
<!-- /Home Section -->

<!-- Breadcrumbs -->
<section class="banner-bottom-info">
  <div class="container">
    <div class="row">
       <div class="col-xs-12 col-md-12">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Contact</li>
       </ol>
      </div>
    </div>
  </div>
</section>
<!-- /Breadcrumbs -->

<!-- /Slider -->

<!-- About Section -->
<section>
    <div class="container">
  
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="/#" class="form-horizontal" method="post">
                {{ csrf_field() }}
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" placeholder="First Name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" placeholder="Last Name" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" placeholder="Email Address" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" placeholder="Phone" class="form-control" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</div>
</section>
<!-- /About Section -->



<!-- Section -->
<section class="section-bg2">
  <div class="overlay">
  <div class="container">
    <!-- section Title-->
    <div class="row">
      <div class="col-md-12 heading">
        <h2 class="text-uppercase text-white text-center space-bottom-30">Get Cool Stuff When You <span>Train With Us</span></h2>
      </div>
    </div>
    <!-- section Title-->
    
    <!-- section Content-->
    <div class="row">
       <div class="col-md-12 text-center text-white">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi, amet aliquam? Obcaecati, numquam velit cumque ab! Dolorum non cumque alias nulla ea, odio nostrum voluptate magni illo dolorem sunt. Rem obcaecati et laborum eum quia, quas dolorum harum. Adipisci quas autem corporis quae commodi odit doloribus. Dolorum quam asperiores, nemo laudantium sunt, nisi velit, consequatur molestiae.
        </p>
          <a href="#" class="btn btn-default focus btn-more space-top-20">Get Started</a>
        </div>
    </div>
    </div>
    <!-- section Content-->
  </div>
  </div>
</section>
<!-- /Section -->
@endsection