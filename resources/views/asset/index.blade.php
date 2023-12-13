@extends('layouts.app')

@section('content')

<div class="breadcrumbs d-flex align-items-center" style="margin-top: -5%"></div>
  <main id="main">

   
       
 <!-- ======= Our products Section ======= -->
 <section id="services-list" class="services-list ">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2 class="title">Manage Assets</h2>

    </div>

    <div class="row  d-block box-container" style="margin: 0 auto" align="center">

      <div class="col-lg-3 col-md-3 service-item d-flex my-3 " data-aos="fade-up" data-aos-delay="100">
        
          <a href="{{ url('employees') }}" class="box fw-bold p-4 w-100"> Manage Employees
         </a>
      </div>

      <div class="col-lg-3 col-md-3 service-item d-flex my-3 " data-aos="fade-up" data-aos-delay="100">
        
        <a href="{{ url('attractions') }}" class="box fw-bold p-4 w-100"> Manage Attractions
       </a>
      </div>
      <div class="col-lg-3 col-md-3 service-item d-flex my-3 " data-aos="fade-up" data-aos-delay="100">
        
        <a href="{{ url('buildings') }}" class="box fw-bold p-4 w-100"> Manage Buildings
      </a>
      </div>
      <div class="col-lg-3 col-md-3 service-item d-flex my-3 " data-aos="fade-up" data-aos-delay="100">
        
        <a href="{{ url('animals') }}" class="box fw-bold p-4 w-100"> Manage Animals
       </a>
    </div>

    <div class="col-lg-3 col-md-3 service-item d-flex my-3 " data-aos="fade-up" data-aos-delay="100">
      
      <a href="{{ url('wages') }}" class="box fw-bold p-4 w-100 "> Manage Employee Hourly Wages
     </a>
    </div>
   
    
    </div>
   </section>
        

     

  </main><!-- End #main -->

 

@endsection