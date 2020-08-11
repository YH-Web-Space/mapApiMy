<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Tomboat</title>
    <!--Bootstrap icon-->
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>-->
    <!-- CSS style -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/media.css">
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>

<div id="map">
</div>
<form>
    <p><select id="select" name="food">
                <option id="kiev" value="kiev">Киев</option>
                <option id="odesa" value="odesa">Одеса</option>
                <option id="harkiv" value="harkiv">Харьков</option>
        </select></p>
<!--    <p><input id="btn" type="submit" value="Отправить"></p>-->
</form>
<!--<select id="select">-->
<!--    <option value="7827 руб">80x190/200см</option>-->
<!--    <option value="8768 руб">90x190/200см</option>-->
<!--    <option value="11271 руб">120x190/200см</option>-->
<!--</select>-->
<!--<p>Цена матраса: <span id="price"></span></p>-->

<!--<button id="kiev">Київ</button>-->
<!--<button id="odesa">Odessa</button>-->
<!--<button id="harkov">Harkov</button>-->

<script>
    // let test = getSelect ();
    let select = document.getElementById('select');

    function jopa (){
        console.log(select.value);
    }
    select.addEventListener("change", jopa);

    function initMap() {
        let selectKiev = document.getElementById('kiev');
        let selectOdesa = document.getElementById('odesa');
        let selectHarkiv = document.getElementById('harkiv');
        let btn = document.getElementById('btn');


        let k = selectKiev.getAttribute('value');
        let o = selectOdesa.getAttribute('value');
        let h = selectHarkiv.getAttribute('value');

        const mapDiv = document.getElementById("map");
        const map = new google.maps.Map(mapDiv, {
            center: {lat: 50.442978, lng: 30.536492},
            zoom: 10
        });

        // function getSelect(e){
        //     e.preventDefault();
        //     let select = document.getElementById('select')

            let kiev = {
                center: {lat: 50.442978, lng: 30.536492},
                zoom: 10
            };

            let odesa = {
                center: {lat: 46.478618, lng: 30.713227},
                zoom: 10
            };

            let harkov = {
                center: {lat: 49.995938, lng: 36.208199},
                zoom: 10
            };

            let markerKiev = [
                // marker KIEV
                [50.442978,30.536492],
                [50.438441, 30.521042],
                [50.476364, 30.430405],
                // marker Odessaa
                [50.004336, 36.234626],
                [49.989785, 36.206166],
                // marker Harkov
                [46.430379, 30.742665],
                [46.479727, 30.680293]
            ];

        let select = document.getElementById('select');

        select.addEventListener("change", function () {
            let select1 = select.value;
            // console.log(select1);
            if (select1 === k){
                // console.log('Kiev');
                google.maps.event.addDomListener(select, "change", () => {
                    const map = new google.maps.Map(mapDiv, kiev);
                    for (let i = 0; i<markerKiev.length; i++){
                        let location = markerKiev[i];
                        var marker = new google.maps.Marker(
                            {   position: {lat: location[0], lng: location[1]},
                                map: map
                            }
                        );
                    }
                });
            }

            if (select1 === o){
                // console.log('Odesa');
                google.maps.event.addDomListener(select, "change", () => {
                    const map = new google.maps.Map(mapDiv, odesa);
                    for (let i = 0; i<markerKiev.length; i++){
                        let location = markerKiev[i];
                        var marker = new google.maps.Marker(
                            {   position: {lat: location[0], lng: location[1]},
                                map: map
                            }
                        );
                    }
                });
            }

            if (select1 === h){
                // console.log('Harkiv');
                google.maps.event.addDomListener(select, "change", () => {
                    const map = new google.maps.Map(mapDiv, harkov);
                    for (let i = 0; i<markerKiev.length; i++){
                        let location = markerKiev[i];
                        var marker = new google.maps.Marker(
                            {   position: {lat: location[0], lng: location[1]},
                                map: map
                            }
                        );
                    }
                });
            }
        })


        // }
        // btn.addEventListener("click", getSelect);
    }


</script>
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5rIyP0K7Il4MxtDpilo-debi1lvMrUcI&callback=initMap"
        type="text/javascript"></script>

<script type="text/javascript" src="js/main.js"></script>
</body>
</html>