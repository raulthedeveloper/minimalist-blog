@extends('layouts.landingpage')

@section('content')
    <div class="d-flex flex-row">

        <div class="bg-light" style="height: 100vh; width: 60%">
            @include('inc/navigation')
            text side
        </div>

        <div class="landing-right  justify-content-center flex-column d-flex" style="height: 100vh; width: 40%; background-color:#ded5d5;">
            <img class="img-fluid rounded-circle w-75 m-auto"  src="{{ URL::to('/') }}/images/headshot.jpg" alt="">
        </div>
    </div>

@endsection
