@extends('backend.master')

@section('title')
        Car-single-view
@stop

@section('content')
<div class="col-8 offset-2">
        <div class="card ">
            <div class="card-header bg-info">
              <p class="text-light">Car Single Info.</p>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Car Image</th>
                        <td><img width="100px;" src="{{url('/uploads/cars/'.$car->image)}}" alt=""></td>
                    </tr>
                    <tr>
                        <th>Car Name</th>
                        <td>{{ $car->name}}</td>
                    </tr>
                    <tr>
                        <th>Car Brand</th>
                        <td>{{ $car->brand}}</td>
                    </tr>
                    <tr>
                        <th>Car Model</th>
                        <td>{{ $car->model}}</td>
                    </tr>
                    <tr>
                        <th>Car Model Year</th>
                        <td>{{ date("Y-m-d",strtotime($car->year)) }}</td>
                    <tr>
                        <th>Car Color</th>
                        <td>{{ $car->color}}</td>
                    </tr>
                    <tr>
                        <th>Car CC</th>
                        <td>{{$car->cc}}</td>
                    </tr>
                    <tr>
                        <th>Car Power in HP</th>
                        <td>{{$car->power}}</td>
                    </tr>
                    <tr>
                        <th>Car Torque in NM</th>
                        <td>{{$car->torque}}</td>
                    </tr>
                    <tr>
                        <th>Car Odo</th>
                        <td>{{$car->odo}}</td>
                    </tr>
                    <tr>
                        <th>Car Number</th>
                        <td>{{$car->number}}</td>
                    </tr>
                    <tr>
                        <th>Car Description</th>
                        <td>{{$car->description}}</td>
                    </tr>
                    <tr>
                        <th>Price/Day</th>
                        <td>{{$car->price_per_day}}.00 TK</td>
                    </tr>
                    <tr>
                        <th>Discount Price</th>
                        <td>{{$car->discount_offer}}.00 TK</td>
                    </tr>



                </table>

            </div>
            <div class="card-footer bg-secondary text-right">
                <a href="{{ route('admin.car.list')}}" class="btn btn-primary">Go Back</a>
            </div>
          </div>

      </div>

@stop
