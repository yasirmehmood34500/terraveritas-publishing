@extends('layouts.main')
@section('left-bar')
    @include('includes.left-bars.job')
@endsection
@section('content')
    <style>
        .pdf-like-content .table thead th {
            background-color: #e9ecef;
            color: #495057;
        }

        .table-bg {
            background-color: rgb(0 183 255 / 15%) !important;
        }
    </style>
    <div class="bg-white mt-3 pdf-like-content">
        <div class="m-2 p-2">
            <h1 id="careers-at-terraveritas-publishing">Careers at TerraVeritas Publishing</h1>
            <p>TerraVeritas Publishing is always inviting motivated and talented candidates to join our growing team. We
                advertise job opportunities based on the requirements of the company. If you are passionate about academic
                publishing and meet our needs and the criteria outlined in the job advertisement, we encourage you to apply
                when positions are announced.</p>

        </div>
    </div>
@endsection