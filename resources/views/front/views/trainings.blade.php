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
                   <h1 class="text-uppercase">Networking and Wireless Training</h1>
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
          <li><a href="#">Course Catalog</a></li>
          <li class="active">Networking and Wireless</li>
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
           <div class="col-xs-12 col-sm-8 col-md-8">
               <!-- Section Left Heading -->
               <div class="heading">
                   <h2 class="text-uppercase mt0">Build and maintain your network with <span>confidence</span></h2>
               </div>
               <!-- /Section Left Heading -->

               <!-- left Section details -->
               <div class="left-section-details">
                   <p>
                  We have the hands-on networking and wireless training you need to master the skills required to understand, build and maintain your networks. Build your foundation of networking knowledge in a real-world, multivendor environment, and then focus on specialized disciplines with TCP/IP training, IPv6 training and more.
                 </p>

                 <p>Our networking courses help you gain the skills to implement, support, optimize and defend networks, while preparing for industry-recognized networking and wireless certifications including CWNP, Wireshark, Cisco, VMware, CompTIA's A+ and Network+ certifications.</p>


               </div>
            <!-- /left Section details -->

           </div>
           <div class="col-xs-12 col-sm-4 col-md-4">
              <img class="img-responsive" src="{{ asset('app-front/images/img.jpg') }}" alt="image">
           </div>
       </div> 
    </div>
</section>
<!-- /About Section -->

<!-- Section -->
<section class="courses-section">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="left-sidebar">
          <!-- <div class="cat-box">
            <h3>Category</h3>
            <ul class="cat-item">
              <li><a href="#">Business Warehouse (3)</a></li>
              <li><a href="#">Enterprise Resource Planning (12)</a></li>
              <li><a href="#">Fiori (3)</a></li>
              <li><a href="#">HANA (14)</a></li>
              <li><a href="#">NetWeaver (23)</a></li>
              <li><a href="#">Popular (8)</a></li>
              <li><a href="#">Sybase (7)</a></li>
            </ul>
          </div> -->

          <!-- Widget -->
          <div class="left-widget space-top-40">
            <!-- <p class="text-center text-uppercase"><b>Filter By</b></p> -->
            <h3 class="text-uppercase bule-text">Delivery Format</h3>
            <hr>
            <ul class="left-nav">
              <li><a href="#"><span class="lnr lnr-users"></span> Classroom Live</a> <span class="lnr lnr-question-circle"></span></li>
              <li><a href="#"><span class="lnr lnr-screen"></span> Virtual Classroom Live</a> <span class="lnr lnr-question-circle"></span></li>
              <li><a href="#"><span class="lnr lnr-clock"></span> Classroom Live</a> <span class="lnr lnr-question-circle"></span></li>
            </ul>
          </div>
          <!-- /Widget -->

          <!-- Widget -->
          <div class="left-widget space-top-40">
            <h3 class="text-uppercase bule-text">Delivery Format</h3>
            <hr>
            <ul class="left-nav">
              <li><a href="#"><span class="lnr lnr-file-add"></span> Guaranteed Dates</a> <span class="lnr lnr-question-circle"></span></li>
            </ul>
          </div>
          <!-- /Widget -->

           <!-- Widget -->
          <div class="left-widget space-top-40">
            <h3 class="text-uppercase bule-text">Delivery Location</h3>
            <hr>
            <select class="form-control">
            <option>Select Location</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          </div>
          <!-- /Widget -->
        </div>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="course-box">
              <div class="course-top text-center">
                <h3><a href="#">CCNAX v3.0 - CCNA Routing and Switching Boot Camp</a></h3>
                <p>Take the accelerated path to the CCNA Routing and Switching certification exam (200-125 CCNAX).
Delivery Formats</p>
              </div>
              <div class="clearfix course-bottom">
                <div class="pull-left">
                  <h5>Delivery Formats</h5>
                  <ul class="list-inline">
                    <li><a href="#"><span class="lnr lnr-file-add"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-screen"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-clock"></span></a></li>
                  </ul>
                </div>
                <div class="pull-right">
                  <h5>Form</h5>
                  <p><span class="price">$3350</span> USD</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="course-box">
              <div class="course-top text-center">
                <h3><a href="#">CCNAX v3.0 - CCNA Routing and Switching Boot Camp</a></h3>
                <p>Take the accelerated path to the CCNA Routing and Switching certification exam (200-125 CCNAX).
Delivery Formats</p>
              </div>
              <div class="clearfix course-bottom">
                <div class="pull-left">
                  <h5>Delivery Formats</h5>
                  <ul class="list-inline">
                    <li><a href="#"><span class="lnr lnr-file-add"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-screen"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-clock"></span></a></li>
                  </ul>
                </div>
                <div class="pull-right">
                  <h5>Form</h5>
                  <p><span class="price">$3350</span> USD</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="course-box">
              <div class="course-top text-center">
                <h3><a href="#">CCNAX v3.0 - CCNA Routing and Switching Boot Camp</a></h3>
                <p>Take the accelerated path to the CCNA Routing and Switching certification exam (200-125 CCNAX).
Delivery Formats</p>
              </div>
              <div class="clearfix course-bottom">
                <div class="pull-left">
                  <h5>Delivery Formats</h5>
                  <ul class="list-inline">
                    <li><a href="#"><span class="lnr lnr-file-add"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-screen"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-clock"></span></a></li>
                  </ul>
                </div>
                <div class="pull-right">
                  <h5>Form</h5>
                  <p><span class="price">$3350</span> USD</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="course-box">
              <div class="course-top text-center">
                <h3><a href="#">CCNAX v3.0 - CCNA Routing and Switching Boot Camp</a></h3>
                <p>Take the accelerated path to the CCNA Routing and Switching certification exam (200-125 CCNAX).
Delivery Formats</p>
              </div>
              <div class="clearfix course-bottom">
                <div class="pull-left">
                  <h5>Delivery Formats</h5>
                  <ul class="list-inline">
                    <li><a href="#"><span class="lnr lnr-file-add"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-screen"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-clock"></span></a></li>
                  </ul>
                </div>
                <div class="pull-right">
                  <h5>Form</h5>
                  <p><span class="price">$3350</span> USD</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="course-box">
              <div class="course-top text-center">
                <h3><a href="#">CCNAX v3.0 - CCNA Routing and Switching Boot Camp</a></h3>
                <p>Take the accelerated path to the CCNA Routing and Switching certification exam (200-125 CCNAX).
Delivery Formats</p>
              </div>
              <div class="clearfix course-bottom">
                <div class="pull-left">
                  <h5>Delivery Formats</h5>
                  <ul class="list-inline">
                    <li><a href="#"><span class="lnr lnr-file-add"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-screen"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-clock"></span></a></li>
                  </ul>
                </div>
                <div class="pull-right">
                  <h5>Form</h5>
                  <p><span class="price">$3350</span> USD</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="course-box">
              <div class="course-top text-center">
                <h3><a href="#">CCNAX v3.0 - CCNA Routing and Switching Boot Camp</a></h3>
                <p>Take the accelerated path to the CCNA Routing and Switching certification exam (200-125 CCNAX).
Delivery Formats</p>
              </div>
              <div class="clearfix course-bottom">
                <div class="pull-left">
                  <h5>Delivery Formats</h5>
                  <ul class="list-inline">
                    <li><a href="#"><span class="lnr lnr-file-add"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-screen"></span></a></li>
                    <li><a href="#"><span class="lnr lnr-clock"></span></a></li>
                  </ul>
                </div>
                <div class="pull-right">
                  <h5>Form</h5>
                  <p><span class="price">$3350</span> USD</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section -->

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