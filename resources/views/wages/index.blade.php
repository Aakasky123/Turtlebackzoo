@extends('layouts.app')

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="margin-top: -5%"></div>

<main id="main">

  @include('inc.messages')
       
    <!-- ======= Our products Section ======= -->
    <section id="services-list" class="services-list ">
     <div class="container-fluid" data-aos="fade-up">
   
       <div class="section-header">
         <h2 class="title">Manage Hourly Wages</h2>
   
       </div>
       
       <div class="row  d-block box-container" style="margin: 0 auto" >
   
        <div class="col-lg-12">
            <div class="row">
  
              <!-- Advertisement -->
              <div class="col-12">
                <div class="card top-selling overflow-auto">
  
  
                  <div class="card-body pb-0">
                   
                    <div>
                      <button type="button" class="btn btn-primary mb-3"><a href="./wages/addwages" style="text-decoration:none; color:white; margin-bottom:2%">ADD NEW WAGE</a></button>
                  </div>
                  
                  <table class="table table-hover border">
                    <thead class="bg-dark text-light fw-bold border">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">HourlyRate</th>
                        <th scope="col" colspan="2">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($wages as $wage)
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">{{ $wage->Name }}</a></td>
                        <td>{{ $wage->HourlyRate }}</td>
                        <td><a href="./wages/{{$wage->ID}}/editwage" class="btn btn-success">Edit</a></td>
  
                        <td>{!!Form::open(['action'=> ['App\Http\Controllers\AssetController@destroywage',$wage->ID], 'method' =>'POST', 'class' =>'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td> 
  
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                
                  </div>
  
                </div>
            </div>
      
            </div>
       </div>
      </section>
   
     </main><!-- End #main -->
@endsection