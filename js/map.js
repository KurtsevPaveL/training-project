    //GOOGLE MAP API
    function initialize() {
        var myLatlng = {lat: 50.010061, lng: 36.317099};
        var mapOptions = {
            center: myLatlng,
            zoom: 17
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: "Academy Smart"
        });
        //Adding content
        var contentString = "<img src='img/smartlogo.png'>";
        var infoWindow = new google.maps.InfoWindow({content: contentString});

        google.maps.event.addListener(marker, 'click', function () {
            infoWindow.open(map, marker);
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

