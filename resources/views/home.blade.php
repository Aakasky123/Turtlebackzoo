@extends('layouts.dashboard')

@section('content')
 
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./home">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="cart d-block" align="center">
          
          <a href="./cart"  style="display:block;"><i class="bi bi-cart4" style="font-size:250%"></i><span>My Cart</span></a>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
             <div class="row">
                @foreach ($products as $product)
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card"  style="box-shadow:2px 2px 4px black;">
                      {!! Form::open(['action' => 'App\Http\Controllers\CartController@store', 'method' => 'POST' , 'enctype'=>'multipart/form-data']) !!}
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="">Description</i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                              <li class="dropdown-header text-start">
                                <h6>Description</h6>
                              </li>
                              <li><a class="dropdown-item" href="#">{{Form::text('description', $product->description, ['class'=> 'card-title border-0', 'style'=>'color:navyblue'])}} </a></li>
                            </ul>
                          </div>
                          
                          <div class="card-body">
                            <h5>{{Form::text('name', $product->name, ['class'=> 'card-title border-0', 'style'=>'color:navyblue'])}}</h5>
                           {{--  <h5 class="card-title">{{$product->name}}</span></h5> --}}
          
                            <div class="d-flex align-items-center">
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                 

                                  <img src="./storage/product_images/{{$product->product_image}}" alt="" height="100" width="100" style="margin:2%; margin-left:50%" align="center">
                                 
                              </div>
                              <div class="ps-4" align="right">
                                <h6><span>$.</span> <span>{{Form::text('price', $product->price, ['class'=> 'border-0 w-50', 'style'=>'color:darkblue'])}}</span></h6><br>

                                
                              </div>
                              
                            </div>
                            <div class="row d-inliine-flex">
                              <div class="col-6 mt-5">
                                {{Form::text('quantity', '1', ['class'=> 'p-2', 'style'=>'color:darkblue;width: 60%; box-shadow:2px 2px 4px black; border-radius:8px', 'min'=>'1'])}}
                               {{--  <form action="">
                                  <input type="number" value="1" min="1" style="width: 60%; box-shadow:2px 2px 4px black; border-radius:8px" class="p-2">
                                </form> --}}
                              </div>
                              <div class="col-6 mt-5">
                                {{Form::submit('Add To Cart', ['class'=>'btn btn-warning mt-2 w-100', 'style'=>'box-shadow:2px 2px 4px black;font-weight:bolder; border-radius:8px;'])}}
                              </div>
                            </div>
                          </div>
                          {!! Form::close() !!}
                    </div>
                </div>
                @endforeach
            </div>         
        </div><!-- End Right side columns -->
      </div>
    </section>

   
  </main><!-- End #main -->
@endsection
