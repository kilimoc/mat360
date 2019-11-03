@extends('saccomanager.superdashboardlayout')
<!-- Counts Section -->
@section('content')
<section class="dashboard-header section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12 offset-sm-1 offset-md-3 offset-xl-3">
            <div class="form-outer text-center d-flex align-items-center">
                <div class="form-inner">
                    <div class="logo text-uppercase"><span>New Sacco</span><strong class="text-primary"> Registration</strong></div>
                    <p>@include('flash_message')</p>
                    <form class="text-left form-validate" method="post" action="{{route('newSaccoForm.submit')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group-material">
                            <input id="regnumber" type="text" name="regno" required data-msg="Please enter Vehicle Registration Number" class="input-material">
                            <label for="regnumber" class="label-material">Registration Number</label>
                        </div>
                        <div class="form-group-material">
                            <input id="sacconame" type="text" name="sacconame" required data-msg="Please enter the driver ID Number" class="input-material">
                            <label for="sacconame" class="label-material">Sacco Name</label>
                        </div>
                        <div class="form-group-material">
                            <input id="idnumber" type="text" name="idnumber" required data-msg="Please enter your password" class="input-material">
                            <label for="idnumber" class="label-material">ID Number of Sacco Manager </label>
                        </div>
                        <div class="form-group-material">
                            <input id="headquarters" type="text" name="headquarters" required data-msg="Please enter your password" class="input-material">
                            <label for="headquarters" class="label-material">Sacco HeadQuarters</label>
                        </div>
                        <div class="form-group text-center">
                            <input id="register" type="submit" value="Register Sacco" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
            </div>
        </div>

</section>

@endsection