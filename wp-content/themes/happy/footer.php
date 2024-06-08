<script>
    var map = L.map('map').setView([-25.5500621, -49.6401092], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var locations = [];

    <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'orfanato',
            'posts_per_page' => -1
        );

        $posts = get_posts($args);

        if ($posts) :
            foreach ($posts as $post) :
                setup_postdata($post);
                $nome = esc_js(get_field('nome', $post->ID));
                $latitude = esc_js(get_field('latitude', $post->ID));
                $longitude = esc_js(get_field('longitude', $post->ID));
                $post_id = esc_js($post->ID);
                ?>
                locations.push({
                    name: "<?php echo $nome; ?>",
                    lat: <?php echo $latitude; ?>,
                    lon: <?php echo $longitude; ?>,
                    post_id: "<?php echo $post_id; ?>"
                });
                <?php
            endforeach;
            wp_reset_postdata();
        endif;
    ?>

    var markers = [];

    locations.forEach(function(location) {
        var marker = L.marker([location.lat, location.lon]).addTo(map);
        var link = '/orfanato/?post_id=' + location.post_id;
        marker.bindPopup('<b>' + location.name + '</b><br><a href="' + link + '" target="_blank">Mais informações</a>');
        markers.push(marker.getLatLng());
    });

    if (markers.length) {
        var bounds = L.latLngBounds(markers);
        map.fitBounds(bounds);
        map.setZoom(map.getZoom() - 1);
    }
</script>


</body>

</html>
