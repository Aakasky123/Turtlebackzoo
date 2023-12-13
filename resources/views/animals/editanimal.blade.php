@extends('layouts.app')

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="margin-top: -5%"></div>

<main id="main">

   
       
    <!-- ======= Our products Section ======= -->
    <section id="services-list" class="services-list ">
     <div class="container-fluid" data-aos="fade-up">
   
       <div class="section-header">
         <h2 class="title">Edit Animal</h2>
   
       </div>
   
       <div class="row  d-block box-container" style="margin: 0 auto" >
   
        <div class="col-lg-12">
            <div class="row">
  
              <!-- Advertisement -->
              <div class="col-12">
                <div class="card top-selling overflow-auto">
  
  
                  <div class="card-body pb-0">
                   
                    
                  
                  <div>
                    {!! Form::open(['action' => ['App\Http\Controllers\AssetController@updateanimal', $animal], 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
                    {{-- creating form elements --}}
                    <div class="form-group">
                      {{Form::label('Name', 'Name')}}
                      {{Form::text('Name', $animal->Name, ['class'=> 'form-control'])}}
                    </div>
                    
                    <div class="form-group">
                      {{Form::label('Status', 'Status')}}
                      {{Form::select('Status',
                       [''=>'---Select Status---', 
                        'Injured'=>'Injured', 
                       'Healthy'=>'Healthy',
                       ], $animal->Status, ['class'=> 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('Species', 'Species')}}
                        {{Form::text('Species', $animal->Species->Name, ['class'=> 'form-control'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('BirthYear', 'BirthYear')}}
                        {{Form::number('BirthYear', $animal->BirthYear, ['class'=> 'form-control'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('FoodCost', 'FoodCost')}}
                        {{Form::number('FoodCost', $animal->FoodCost, ['class'=> 'form-control'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('RegistrationDate', 'RegistrationDate')}}
                        {{Form::date('RegistrationDate', $animal->created_at, ['class'=> 'form-control'])}}
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