@extends('saccomanager.superdashboardlayout')
<!-- Counts Section -->
@section('content')
<section class="dashboard-header section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-bold text-center text-warning">All Registered Vehicles</h3>
                </div>
            </div>
            <div class="row">
                @foreach($vehicles as $vehicle)
                <div class="col-xl-3 col-md-3 col-sm-3">
                    <div class="card">
                        <img class="card-img-top img-fluid rounded-circle" src="{{asset('storage/vehicle_images/'.$vehicle->v_image)}}">
                        <div class="card-body">
                            <p>REG NUMBER:</p>
                            <h6 class="card-title">{{$vehicle->reg_number}}</h6>
                            <p>DRIVER NAME:</p>
                            <h6 class="card-title">{{$vehicle->first_name}}  {{$vehicle->last_name}} </h6>
                            <p>DRIVER PHONE:</p>
                            <h6 class="card-title">{{$vehicle->phone}} </h6>
                            <p>OWNER NAME:</p>
                            <h6 class="card-title">{{$vehicle->ofname}} {{$vehicle->olname}} </h6>
                            <p>OWNER PHONE:</p>
                            <h6 class="card-title">{{$vehicle->ophone}}</h6>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>

</section>

@endsection