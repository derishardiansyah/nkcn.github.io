<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
<script src="<?= base_url() ?>assets/js/BootSideMenu.js"></script>
<script src="<?= base_url() ?>assets/leaflet/leaflet.js"></script>
<script src="<?= base_url() ?>assets/leaflet-panel/src/leaflet-panel.js"></script>
<script src="<?= base_url() ?>assets/js/leaflet.ajax.js"></script>
<script src="<?= base_url() ?>assets/leaflet-panel/examples/data/alert.js"></script>
<script src="<?= base_url() ?>assets/leaflet-panel/examples/data/aspinall.js"></script>
<!-- Page level plugins -->
<script src="<?= base_url() ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url() ?>vendor/datatables/datatables-demo.js"></script>
<script src="<?= base_url() ?>assets_admin/js/sb-admin-2.min.js"></script>


<script type="text/javascript">
    $('#test').BootSideMenu({
        side: "left",
        autoClose: false
    });

    $('#balai').BootSideMenu({
        side: "right",
        autoClose: false
    });


    var lembaga = L.layerGroup();
    <?php foreach ($maps as $mps => $value) { ?>
        L.marker([<?= $value->latitude ?>, <?= $value->longtitude ?>])
            .bindPopup("<b><?= $value->nama_lembaga ?></b><br/>" +
                "Isu : <?= $value->isu ?></br>" +
                "Wilayah Kegiatan : <?= $value->wilayah_kegiatan ?></br>" +
                "Tahun : <?= $value->tahun ?>").addTo(lembaga);
    <?php } ?>

    var upt = L.layerGroup();
    <?php foreach ($upt as $upt => $value) { ?>
        var Icon = L.icon({
            iconUrl: '<?= base_url() ?>vendor/assets/image/marker_merah.png',
            iconSize: [35, 35], // size of the icon
        });
        L.marker([<?= $value->latitude ?>, <?= $value->longtitude ?>], {
                icon: Icon
            })
            .bindPopup("<b><?= $value->nama_upt ?></b><br/>" +
                "Provinsi : <?= $value->provinsi ?>").addTo(upt);
    <?php } ?>

    var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

    var grayscale = L.tileLayer(mbUrl, {
            id: 'mapbox/light-v9',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        }),
        streets = L.tileLayer(mbUrl, {
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            attribution: mbAttr
        });

    var map = L.map('map', {
        center: [-0.2380395, 121.2688475],
        zoom: 5,
        layers: [grayscale, lembaga, upt]
    });

    var baseLayers = {
        "Grayscale": grayscale,
        "Streets": streets
    };

    var overlays = {
        "Lembaga": lembaga,
        "UPT": upt
    };

    L.control.layers(baseLayers, overlays).addTo(map);
</script>