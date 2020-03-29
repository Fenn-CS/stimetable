@extends('layouts.front')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto col-12 text-center mb-3">
            <h1 class="mt-0 text-primary">Want to do a swap?</h1>
            <p class="lead">Check out the list of items people are willing to give out and get other items</p>
            <button class="btn btn-sm">Reachout</button>
        </div>
        <div class="card-columns">
            <div class="card card-body">
                <span class="float-right font-weight-bold">$10</span>
                <h6 class="text-truncate">Chocolate Martini</h6>
                <p class="small">I have this Chocolate Martini and would give anyone who needs it for $10</p>
                <button class="btn btn-sm">Reachout</button>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">One Litter of Oil</span>
                <h6 class="text-truncate">A sack of rice</h6>
                <p class="small">Willing to swap rice for oil.</p>
                <button class="btn btn-sm">Reachout</button>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">Toilet Papper</span>
                <h6 class="text-truncate">Hand Wash and Disinfectants</h6>
                <p class="small">Willing to give out some handwash for some toilet papper</p>
                <button class="btn btn-sm">Reachout</button>
            </div>
            <div class="card card-body">
                <span class="float-right font-weight-bold">Baby Diapers</span>
                <h6 class="text-truncate">A couple of food and non food items</h6>
                <p class="small">I need baby diapers as I ran out of them I have a list of options  you can pick from</p>
                <button class="btn btn-sm">Reachout</button>
            </div>

        </div>

    </div>
</div>
@endsection
