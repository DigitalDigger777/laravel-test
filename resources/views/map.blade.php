@extends('layouts.sb_admin_app')

@section('styles')
    <style>
        #map {
            height: 860px;
        }
    </style>
@endsection

@section('scripts')

    <script>

        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var labelIndex = 0;

        function initialize() {
            var center = { lat: 50.45466, lng: 30.5238 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: center
            });

            google.maps.event.addListener(map, 'click', function(event) {
                addMarker(event.latLng, map);
            });

            addMarker(center, map);
        }

        function addMarker(location, map) {
            var marker = new google.maps.Marker({
                position: location,
                label: labels[labelIndex++ % labels.length],
                map: map
            });
        }




    </script>
    <script async defer
            src="//maps.googleapis.com/maps/api/js?key=AIzaSyAv7CLFFndXxed0wbgujz8cNwWewibceBk&callback=initialize">
    </script>


@endsection

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Map</li>
    </ol>
@endsection

@section('content')
    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">Google Map API Example</div>
        <div class="card-body">
            <div id="map"></div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>


@endsection