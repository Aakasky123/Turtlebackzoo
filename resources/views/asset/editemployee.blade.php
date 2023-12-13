@extends('layouts.app')

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="margin-top: -5%"></div>

<main id="main">

   
       
    <!-- ======= Our products Section ======= -->
    <section id="services-list" class="services-list ">
     <div class="container-fluid" data-aos="fade-up">
   
       <div class="section-header">
         <h2 class="title">Edit Employees</h2>
   
       </div>
   
       <div class="row  d-block box-container" style="margin: 0 auto" >
   
        <div class="col-lg-12">
            <div class="row">
  
              <!-- Advertisement -->
              <div class="col-12">
                <div class="card top-selling overflow-auto">
  
  
                  <div class="card-body pb-0">
                   
                    
                  
                  <div>
                    {!! Form::open(['action' => ['App\Http\Controllers\AssetController@updateemployee', $employees], 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
                    {{-- creating form elements --}}
                    <div class="form-group">
                      {{Form::label('First Name', 'First Name')}}
                      {{Form::text('First',  $employees->First , ['class'=> 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('Last Name', 'Last Name')}}
                        {{Form::text('Last', $employees->Last, ['class'=> 'form-control'])}}
                      </div>
                      <div class="form-group">
                        {{ Form::label('JobType', 'Job Type') }}
                        {{ Form::select('JobType', ['' => '---Select Job Type---'] + $jobTypes->pluck('Name', 'Name')->toArray(), $employees->JobType, ['class' => 'form-control']) }}
                    </div>
                    
                    <div class="form-group">
                      {{Form::label('StartDate', 'StartDate')}}
                      {{Form::date('StartDate',  $employees->StartDate , ['class'=> 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('Address', 'Address')}}
                        {{Form::text('Address', $employees->Address, ['class'=> 'form-control'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('City', 'City')}}
                        {{Form::text('City', $employees->City, ['class'=> 'form-control'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('State', 'State')}}
                        {{Form::text('State', $employees->State, ['class'=> 'form-control'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('Zip', 'Zip')}}
                        {{Form::text('Zip', $employees->Zip, ['class'=> 'form-control'])}}
                      </div>                              
                    {{Form::submit('Submit', ['class'=>'btn btn-primary mt-2'])}}
                    {!! Form::close() !!}
                </div>
                
                  </div>
  
                </div>
            </div>
      
            </div>
       </div>
      </section>
   
     </main><!-- End #main -->
@endsection