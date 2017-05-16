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
                   <h1 class="text-uppercase">{{ $post['title'] }}</h1>
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
        <!-- <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Course Catalog</a></li>
          <li class="active">Networking and Wireless</li>
       </ol> -->
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
           <div class="col-xs-12 col-sm-12 col-md-12">
               {!! $post['content'] !!}

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