@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Mapa</div>

                    <div class="panel-body">
                        <div id="map" style="height: 600px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function initMap() {
            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -12.046448, lng: -77.042751},
                zoom: 12
            });

            var myLatLng = {lat: -12.046448, lng: -77.042751};

            var marker1 = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: ''
            });

            var marker2 = new google.maps.Marker({
                position: {lat: -12.040441, lng: -77.042650},
                map: map,
                title: ''
            });


        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqdskgAUoSIh5gwovzoYd7Xar0VbvIPsY&callback=initMap"
            async defer></script>
@endpush