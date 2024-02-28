<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <style>
        * {
            margin: 0;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        #map {
            scroll-behavior: smooth;
            height: 100vh;
            width: 100vw;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
</head>

<body>
    <div id="map"></div>
    <script>
        window.csrfToken = "{{ csrf_token() }}";
        const token = localStorage.getItem('apiToken');

        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 23,
            attribution: '© OpenStreetMap'
        });

        const satelite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 23,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        const googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 23,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        const googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 23,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        const googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 23,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        var map = L.map('map', {
            center: [-6.8674333, 109.1353434],
            zoom: 14,
            layers: [googleHybrid]
        })

        var baseMaps = {
            "Open Street Map": osm,
            "Google Hybrid": googleHybrid,
            "Google Satelite": satelite,
            "Google Street": googleStreets,
            "Google Terrain": googleTerrain,
        };

        var layerControl = L.control.layers(baseMaps).addTo(map);

        $.ajax({
            serverSide: true,
            url: "{{ route('jalan.all') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            dataType: 'json',
            success: function(res) {
                const layerGroup = []
                const datas = res.filter((data) => data.type === 'MultiPolygon' || data.type === 'Polygon' &&
                    data
                    .koordinat !== null)
                datas.map((item) => {
                    var geojsonFeature = {
                        "type": "Feature",
                        "geometry": {
                            "type": item.type,
                            "coordinates": JSON.parse(item.koordinat)
                        }
                    };
                    const layer = L.geoJSON(geojsonFeature, {
                        style: (feature) => ({
                            fillColor: 'pink', // Warna isi
                            fillOpacity: 0.5, // Opasitas isi
                            color: 'purple', // Warna garis tepi
                            weight: 2
                        })
                    })
                    return layerGroup.push(layer)
                })
                layerControl.addOverlay(L.layerGroup(layerGroup), "Jalan");
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error);
            }
        });
        $.ajax({
            serverSide: true,
            url: "{{ route('drainase.all') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            dataType: 'json',
            success: function(res) {
                const layerGroup = []
                const datas = res.filter((data) => data.type === 'MultiPolygon' || data.type === 'Polygon' &&
                    data
                    .koordinat !== null)
                datas.map((item) => {
                    var geojsonFeature = {
                        "type": "Feature",
                        "properties": {},
                        "geometry": {
                            "type": item.type,
                            "coordinates": JSON.parse(item.koordinat)
                        }
                    };
                    const layer = L.geoJSON(geojsonFeature, {
                        style: (feature) => ({
                            fillColor: 'gray', // Warna isi
                            fillOpacity: 0.5, // Opasitas isi
                            color: 'black', // Warna garis tepi
                            weight: 2
                        })
                    })
                    return layerGroup.push(layer)
                })
                layerControl.addOverlay(L.layerGroup(layerGroup), "Drainase");
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error);
            }
        });
        $.ajax({
            serverSide: true,
            url: "{{ route('tanah-lahan.all') }}",
            method: 'GET',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Authorization': `Bearer ${token}`
            },
            dataType: 'json',
            success: function(res) {
                const layerGroup = []
                const batasLayerGroup = []
                const datas = res.filter((data) => data.type === 'MultiPolygon' || data.type === 'Polygon' &&
                    data
                    .koordinat !== null)
                datas.map((item) => {
                    var geojsonFeature = {
                        "type": "Feature",
                        "geometry": {
                            "type": item.type_batas,
                            "coordinates": JSON.parse(item.koordinat_batas)
                        }
                    };
                    const layer = L.geoJSON(geojsonFeature)
                    return batasLayerGroup.push(layer)
                })
                datas.map((item) => {
                    var geojsonFeature = {
                        "type": "Feature",
                        "geometry": {
                            "type": item.type,
                            "coordinates": JSON.parse(item.koordinat)
                        }
                    };
                    const layer = L.geoJSON(geojsonFeature, {
                        style: (feature) => ({
                            fillColor: 'green', // Warna isi
                            fillOpacity: 0.5, // Opasitas isi
                            color: 'red', // Warna garis tepi
                            weight: 2
                        })
                    })
                    return layerGroup.push(layer)
                })
                layerControl.addOverlay(L.layerGroup(layerGroup), "Tanah");
                layerControl.addOverlay(L.layerGroup(batasLayerGroup), "Batas Tanah");
            },
            error: function(xhr, status, error) {
                console.log("Error: " + error);
            }
        });
    </script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
</body>

</html>
