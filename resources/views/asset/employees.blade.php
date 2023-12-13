@extends('layouts.app')

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="margin-top: -5%"></div>

<main id="main">

  @include('inc.messages')
       
    <!-- ======= Our products Section ======= -->
    <section id="services-list" class="services-list ">
     <div class="container-fluid" data-aos="fade-up">
   
       <div class="section-header">
         <h2 class="title">Manage Employees</h2>
   
       </div>
       
       <div class="row  d-block box-container" style="margin: 0 auto" >
   
        <div class="col-lg-12">
            <div class="row">
  
              <!-- Advertisement -->
              <div class="col-12">
                <div class="card top-selling overflow-auto">
  
  
                  <div class="card-body pb-0">
                   
                    <div>
                      <button type="button" class="btn btn-primary mb-3"><a href="./asset/addemployees" style="text-decoration:none; color:white; margin-bottom:2%">ADD NEW EMPLOYEE</a></button>
                  </div>
                  
                  <table class="table table-hover border">
                    <thead class="bg-dark text-light fw-bold border">
                      <tr>
                        <th scope="col">Employee ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Job Type</th>
                        <th scope="col">StartDate</th>
                        <th scope="col">Address</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Zip</th>
{{--                         <th scope="col">SupervisorID</th> --}}
                        <th scope="col" colspan="2">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($employees as $employee)
                      <tr>
                        <td><a href="#" class="text-primary fw-bold">{{$employee->ID}}</a></td>
                        <td>{{ $employee->First }}</td>
                        <td>{{ $employee->Last }}</td>
                        <td>{{ $employee->JobType->Name }}</td>
                        <td>{{ $employee->StartDate }}</td>
                        <td>{{ $employee->Address }}</td>
                        <td>{{ $employee->City }}</td>
                        <td>{{ $employee->State }}</td>
                        <td>{{ $employee->Zip }}</td>
                        {{-- <td>{{ $employee->SupervisorID }}</td> --}}
                        <td><a href="./asset/{{$employee->ID}}/editemployee" class="btn btn-success">Edit</a></td>
  
                        <td>{!!Form::open(['action'=> ['App\Http\Controllers\AssetController@destroyemployee',$employee->ID], 'method' =>'POST', 'class' =>'pull-right'])!!}
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