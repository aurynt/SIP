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
        const osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        });

        const satelite = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 19,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        const googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        const googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        const googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        var map = L.map('map', {
            center: [-6.8674333, 109.1353434],
            zoom: 14,
            layers: [googleHybrid],
            maxZoom: 23
        })

        var baseMaps = {
            "Open Street Map": osm,
            "Google Hybrid": googleHybrid,
            "Google Satelite": satelite,
            "Google Street": googleStreets,
            "Google Terrain": googleTerrain,
        };

        var layerControl = L.control.layers(baseMaps).addTo(map);

        $.get("{{ route('jalan.all') }}", (res) => {
            const layerGroup = []
            const datas = res.filter((data) => data.type == 'MultiPolygon')
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
        })
        $.get("{{ route('drainase.all') }}", (res) => {
            const layerGroup = []
            const datas = res.filter((data) => data.type == 'MultiPolygon')
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
                        fillColor: 'gray', // Warna isi
                        fillOpacity: 0.5, // Opasitas isi
                        color: 'black', // Warna garis tepi
                        weight: 2
                    })
                })
                return layerGroup.push(layer)
            })
            layerControl.addOverlay(L.layerGroup(layerGroup), "Drainase");
        })
        $.get("{{ route('tanah-lahan.all') }}", (res) => {
            const layerGroup = []
            const datas = res.filter((data) => data.type == 'MultiPolygon' && data.koordinat !== null)
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
        })
    </script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
</body>

</html>
