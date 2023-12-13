@extends('layouts.app')

@section('content')

<div class="breadcrumbs d-flex align-items-center" style="margin-top: -5%"></div>
  <main id="main">

   
       
 <!-- ======= Our products Section ======= -->
 <section id="services-list" class="services-list ">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2 class="title">Management & Reporting Activities</h2>

    </div>

    <div class="row  d-block box-container my-4" style="margin: 0 auto" >
   
      <div class="col-lg-12">
          <div class="row">

            <!-- Advertisement -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                 
                  <div>
                    <h2>Concession Revenue</h2>
                </div>
                
                <table class="table table-hover border">
                  <thead class="bg-dark text-light fw-bold border">
                    <tr>
                      <th scope="col">Date</th>
                      <th scope="col">TickesSold</th>
                      <th scope="col">Revenue</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($revenueDetails as $detail)
                    <tr>
                      <td><a href="#" class="text-primary fw-bold">{{ $detail->Date }}</a></td>
                      <td>{{ $detail->TicketsSold }}</td>
                      <td>{{ $detail->Revenue }}</td>

                    </tr>
                    @endforeach
                  </tbody>
                  <tbody>
                    <tr>
                      <p>Total Revenue: <b>{{ $totalRevenue }}</b></p>
                    </tr>
                  </tbody>
                </table>
              
                </div>

              </div>
          </div>
    
          </div>
     </div>

    
     </div>

  
     <div class="row  d-block box-container my-4" style="margin: 0 auto" >
   
      <div class="col-lg-12">
          <div class="row">

            <!-- Advertisement -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                 
                  <div>
                    <h2>animal population report</h2>
                </div>
                
                <table class="table table-hover border">
                  <thead class="bg-dark text-light fw-bold border">
                      <tr>
                          <th>Species</th>
                          <th>Status</th>
                          <th>Monthly Food Cost</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($populationDetails as $detail)
                          <tr>
                              <td>{{ $detail->Species }}</td>
                              <td>{{ $detail->Status }}</td>
                              <td>{{ $detail->MonthlyFoodCost }}</td>
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

    
              <div class="row  d-block box-container my-4" style="margin: 0 auto" >
   
                <div class="col-lg-12">
                    <div class="row">
          
                      <!-- Advertisement -->
                      <div class="col-12">
                        <div class="card top-selling overflow-auto">
          
              <div>
                <h2>veterinarians cost report</h2>
            </div>
            <table class="table table-hover border">
              <thead class="bg-dark text-light fw-bold border">
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Hourlyrate</th>
                  </tr>
              </thead>
              <tbody>
                  @php
                      $total = 0; // Initialize total
                  @endphp
          
                  @foreach ($employeesCost as $detail)
                      @if ($detail->Name == 'veterinarian')
                          <tr>
                              <td>{{ $detail->ID }}</td>
                              <td>{{ $detail->Name }}</td>
                              <td>{{ $detail->HourlyRate }}</td>
          
                              @php
                                  $total += $detail->HourlyRate * 40; // Update total
                              @endphp
                          </tr>
                      @endif
                  @endforeach
          
                  <tr>
                      <td></td>
                      <td></td>
                      <td>Total Revenue: <b>{{ $total }}</b></td>
                  </tr>
              </tbody>
          </table>
        </div>

      </div>
  </div>

  </div>
</div>
 

              

                <div class="row  d-block box-container my-4"  style="margin: 0 auto" >
   
                  <div class="col-lg-12">
                      <div class="row">
            
                        <!-- Advertisement -->
                        <div class="col-12">
                          <div class="card top-selling overflow-auto">
            
                <div>
                  <h2>animalCarespecialist cost report</h2>
              </div>
              <table class="table table-hover border">
                <thead class="bg-dark text-light fw-bold border">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Hourlyrate</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total = 0; // Initialize total
                    @endphp
            
                    @foreach ($employeesCost as $detail)
                        @if ($detail->Name == 'animalCarespecialist')
                            <tr>
                                <td>{{ $detail->ID }}</td>
                                <td>{{ $detail->Name }}</td>
                                <td>{{ $detail->HourlyRate }}</td>
            
                                @php
                                    $total += $detail->HourlyRate * 40; // Update total
                                @endphp
                            </tr>
                        @endif
                    @endforeach
            
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Total Revenue: <b>{{ $total }}</b></td>
                    </tr>
                </tbody>
            </table>
            
          </div>

        </div>
    </div>

    </div>
  </div>

    <div class="row  d-block box-container" style="margin: 0 auto" >
   
      <div class="col-lg-12">
          <div class="row">

            <!-- Advertisement -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                 
                  <div>
                    <h2>top attractions</h2>
                </div>
                
                <table class="table table-hover border">
                  <thead class="bg-dark text-light fw-bold border">
                      <tr>
                          <th>Attraction</th>
                          <th>Total Revenue</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($topAttractions as $attraction)
                          <tr>
                              <td>{{ $attraction->Name }}</td>
                              <td>{{ $attraction->TotalRevenue }}</td>
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

     <div class="row  d-block box-container my-4" style="margin: 0 auto" >
   
      <div class="col-lg-12">
          <div class="row">

            <!-- Advertisement -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                 
                  <div>
                    <h2>Best Days</h2>
                </div>
                
                
                <table class="table table-hover border">
                  <thead class="bg-dark text-light fw-bold border">
                      <tr>
                          <th>Date</th>
                          <th>Total Revenue</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($bestDays as $day)
                          <tr>
                              <td>{{ $day->Date }}</td>
                              <td>{{ $day->TotalRevenue }}</td>
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

     <div class="row  d-block box-container" style="margin: 0 auto" >
   
      <div class="col-lg-12">
          <div class="row">

            <!-- Advertisement -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">


                <div class="card-body pb-0">
                 
                  <div>
                    <h2>average revenue</h2>
                </div>
                
                <table class="table table-hover border">
                  <thead class="bg-dark text-light fw-bold border">
                      <tr>
                          <th>Attraction Average Revenue</th>
                          <th>Concession Average Revenue</th>
                          <th>Attendance Average Revenue</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>{{$attractionAverage}}</td>
                         <td>{{$averageConcessionCost}}</td>
                         <td>{{$attendanceAverage}}</td>
                        {{-- <td>{{}}</td>
                        <td>{{}}</td> --}}
                      </tr>
                  </tbody>
              </table>
              
                </div>

              </div>
          </div>
    
          </div>
     </div>

    
     </div>
</div>

   </section>
        

     

  </main><!-- End #main -->

 

@endsection