<?php

        $data = '{"NameProduct":"'.$_POST["NameProduct"]
                .'", "TypeProduct":"'.$_POST["TypeProduct"]
                .'", "DescriptionProduct":"{\"Image\":\"'.$_POST["ImageLink"]
                    .'\", \"Description\":\"'.$_POST["Description"]
                .'\"}", "Price":'.$_POST["Price"]
                .', "StatusProduct":'.$_POST['StatusProduct'].'}';

        # {"NameProduct":"Jambon", "TypeProduct":"Bouf", "DescriptionProduct":"{\"Image\": \"https://exemple.com\", \"Description\":\"Blabla\"}", "Price": 5.0, "StatusProduct":1}

        $url = "http://localhost:8080/api/product";
        $options = array(
            'http' => array(
            'method'  => 'POST',
            'content' => $data,
            )
        );
        
        $context  = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );
        $response = json_decode( $result );

        header('Location: ../../add_product.php');