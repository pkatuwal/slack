function notify_slack() {
        $payload = array(
            'text' => '----You text is here',
            'channel' => '--your chanel name is here with has tag',
            'username' => '--bot username',
            'link_names' => 1,
            'unfurl_links' => false,
            'unfurl_media' => true,
            'mrkdwn' => true,
            'icon_url' => ':ghost:'
        );
        $encoded = json_encode($payload);
        $post_value = 'payload=' . urlencode($encoded);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://hooks.slack.com/services/######/XXXXXXXX/xxxxxxxxxxxxxxxxxxxx",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $post_value,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded",
                "postman-token: cf7caa4a-707b-b739-8017-736160817229"
            )
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
    }
