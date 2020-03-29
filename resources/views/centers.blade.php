@extends('layouts.front')

@section('content')
<style>
    .btn-primary {
        color: white;
        font-size: 15px;
    }
</style>
<div class="container">
    <div class="list-group">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-3" style="padding: 10px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.7758909974073!2d9.711506015284558!3d4.066039547964319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061127193abff47%3A0xf825ea2f8dc8ab55!2sDeido%2C%20Douala!5e0!3m2!1sen!2scm!4v1585517552269!5m2!1sen!2scm" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <!-- <img src="" class="card-img" alt="..."> -->
                </div>
                <div class="col-md-6" style="padding: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">NCDC</h5>
                        <p class="card-text">
                        3435 Grensternburg Street, South San Francisco, CA 94080
                        </p>
                        <p class="card-text">
                            <small class="badge badge-success">open</small>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-primary mt-2">
                        Contact
                    </a>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-3" style="padding: 10px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.7758909974073!2d9.711506015284558!3d4.066039547964319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061127193abff47%3A0xf825ea2f8dc8ab55!2sDeido%2C%20Douala!5e0!3m2!1sen!2scm!4v1585517552269!5m2!1sen!2scm" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <!-- <img src="" class="card-img" alt="..."> -->
                </div>
                <div class="col-md-6" style="padding: 20px;">
                    <div class="card-body">
                        <h5 class="card-title">Motin Horse Quarantine Facility</h5>
                        <p class="card-text">
                        3435 Xaskters Road, South San Francisco, CA 94080
                        </p>
                        <p class="card-text">
                            <small class="badge badge-danger">caution</small>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-primary mt-2">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection