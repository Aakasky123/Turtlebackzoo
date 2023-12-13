@extends('layouts.app')

@section('content')

<div class="breadcrumbs d-flex align-items-center" style="margin-top: -5%"></div>
  <main id="main">

   
       
 <!-- ======= Our products Section ======= -->
 <section id="services-list" class="services-list ">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2 class="title">System Functions</h2>

    </div>

    <div class="row  box-container">

      <div class="col-lg-3 col-md-3 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
        
          <a href="{{ url('/asset') }}" class="box">
            
            <h3>Manage Assets</h3>

            <ul class="" style="list-style: circle; ">
              <b> Manage The:</b>
               <li class="ml-0">Employees</li>
               <li>Buildings</li>
               <li>Attractions</li>
               <li>Animals</li>
               <li>Employee Hourly Wages</li>
               
           </ul>
         </a>
      </div>
      <div class="col-lg-3 col-md-3 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
        
        <a href="{{ url('/activity') }}" class="box">
          
          <h3>Zoo Operations</h3>

          <ul class="" style="list-style: circle; ">
            <b> Zoo Daily activity & revenue reports:</b>
             <li> Attractions</li>
             <li>Attendance</li>
             <li> Concessions</li>             
         </ul>
       </a>
    </div>
    <div class="col-lg-3 col-md-3 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
        
      <a href="{{ url('/management') }}" class="box">
        <h3>Management and Report Functions</h3>

        <p class="m-0 max-w-[30ch] text-sm ">
          This program provides statistics used by management to analyze its animal 
          population, facilities, employees and customers 
      </p>
     </a>
  </div>
    
  
  <!-- End Service Item -->

    </div>
   
   </section>
        

     

  </main><!-- End #main -->

 

@endsection