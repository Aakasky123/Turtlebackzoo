@extends('layouts.app')

@section('content')

<div class="breadcrumbs d-flex align-items-center" style="margin-top: -5%"></div>
  <main id="main">

   
       
 <!-- ======= Our products Section ======= -->
 <section id="services-list" class="services-list ">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2 class="title">Manage All Zoo Operations</h2>

    </div>

    <div class="row  d-block box-container" style="margin: 0 auto" align="center">

      <div class="col-lg-3 col-md-3 service-item d-flex my-3 " data-aos="fade-up" data-aos-delay="100">
        
          <a href="{{ url('zooattractions') }}" class="box fw-bold p-4 w-100"> Manage Attraction Activities
         </a>
      </div>

      <div class="col-lg-3 col-md-3 service-item d-flex my-3 " data-aos="fade-up" data-aos-delay="100">
        
        <a href="{{ url('attendance') }}" class="box fw-bold p-4 w-100"> Manage Attendance Activities
       </a>
      </div>
      <div class="col-lg-3 col-md-3 service-item d-flex my-3 " data-aos="fade-up" data-aos-delay="100">
        
        <a href="{{ url('concessions') }}" class="box fw-bold p-4 w-100"> Manage Concession Activities
      </a>
      </div>
    </div>
   </section>
        

     

  </main><!-- End #main -->

 

@endsection