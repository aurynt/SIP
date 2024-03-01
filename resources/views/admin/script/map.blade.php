<script>
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
        layers: [googleHybrid]
    });

    @if (isset($data->type))
        const geojsonFeature = {
            "type": "Feature",
            "geometry": {
                "type": "{{ $data->type }}",
                "coordinates": {!! $data->koordinat !!},
            },
        };

        L.geoJSON(geojsonFeature, {
            style: (feature) => ({
                fillColor: 'teal',
                fillOpacity: 0.5,
                color: 'blue',
                weight: 2
            })
        }).addTo(map);

        const coordinates = {!! $data->koordinat !!};
        const bounds = L.geoJSON(geojsonFeature).getBounds();
        const center = bounds.getCenter();

        map.setView(center, 18);
    @endif
    var drawnItems = new L.FeatureGroup();
    map.addLayer(drawnItems);

    var drawControl = new L.Control.Draw({
        edit: {
            featureGroup: drawnItems
        },
        draw: {
            polygon: true,
            multiPolygon: true,
            polyline: false,
            rectangle: false,
            circle: false,
            circlemarker: false,
            marker: false
        }
    });
    map.addControl(drawControl);

    map.on('draw:created', function(e) {
        var type = e.layerType,
            layer = e.layer;

        switch (type) {
            case 'polygon':
                drawnItems.clearLayers();
                drawnItems.addLayer(layer);
                const coordinat = e.layer.toGeoJSON().geometry.coordinates;
                const type = e.layer.toGeoJSON().geometry.type;
                $('#type').val(type)
                $('#coordinat').val(JSON.stringify(coordinat))
                break;
            default:
                drawnItems.clearLayers();
                break;
        }
    });
</script>
