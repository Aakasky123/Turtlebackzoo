@extends('layouts.app')

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="margin-top: -5%"></div>

<main id="main">

  @include('inc.messages')
       
    <!-- ======= Our products Section ======= -->
    <section id="services-list" class="services-list ">
     <div class="container-fluid" data-aos="fade-up">
   
       <div class="section-header">
         <h2 class="title">Concession Activities</h2>
   
       </div>
       
       <div class="row  d-block box-container" style="margin: 0 auto" >
   
        <div class="col-lg-12">
            <div class="row">
  
              <!-- Advertisement -->
              <div class="col-12">
                <div class="card top-selling overflow-auto">
  
  
                  <div class="card-body pb-0">
                   
                    {{-- <div>
                      <button type="button" class="btn btn-primary mb-3"><a href="./concessions/addconcessions" style="text-decoration:none; color:white; margin-bottom:2%">ADD NEW CONCESSION</a></button>
                  </div> --}}
                  
                  <table class="table table-hover border">
                    <thead class="bg-dark text-light fw-bold border">
                      <tr>
                        <th scope="col">Type</th>
                        <th scope="col">AnimalShowID</th>
                        <th scope="col">Revenue</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($concessions as $wage)
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">{{ $wage->Type }}</a></td>
                        <td>{{ $wage->AnimalShowID }}</td>
                        <td>{{ $wage->TotalRevenue }}</td>
                        
  
                        
  
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                
                  </div>
  
                </div>
            </div>
      
            </div>
       </div>
       </div>
      </section>
   
     </main><!-- End #main -->
@endsection