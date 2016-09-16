<?php get_header(); ?>      
    <!-- Content -->
    <div class="col-md-9 tutorial-content">
        <?php
            $ch = curl_init('https://api.digitalocean.com/v2/droplets');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer 5269c7e9e73634f153d1306fcd17c06c0a920b567829431dc3b71b4e028e6488',
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
            );
            $output = curl_exec($ch); 
            $data = json_decode($output, true);
                
            echo "<pre>";
                print_r($data);
                curl_close($ch); 
                
            //$result = curl_exec($ch);
            //print_r($result);
            
            //GET https://api.digitalocean.com/v1/droplets/new?client_id=[client_id]&api_key=[api_key]&name=[droplet_name]&size_id=[size_id]&image_id=[image_id]&region_id=[region_id]&email=[my_email]
            

            ?>
    </div>
    <!-- /Content -->
            
<?php get_sidebar(); ?>
<?php get_footer(); ?>

