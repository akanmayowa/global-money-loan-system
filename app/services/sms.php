<?php


    class Sms{
        public $api_key = "ZpYtbJJ9VpofEFMZ22pxsBf0IN0eHheFW9S2goTucKlDGFrmhr0ATxpRhcal";
        public $sender;
        public $reciever;
        public $message;
        public $gateway = "0";
        public $append_sender = "0";
        public $url = 'https://sms.sms-gateway.me/api/send-sms';


        public function __construct($sender, $reciever, $message)
        {
            $this->sender = $sender;
            $this->reciever = $reciever;
            $this->message = $message;
        }


        public function storeSms()
        {
            $client = new \GuzzleHttp\Client();
            $response = $client->post($this->url, [
                [
                    'headers' => ['Accept' => 'application/json',],
                    'query' => [
                        'api_token'=> $this->api_key,
                        'to'=> $this->reciever,
                        'from'=> $this->sender,
                        'body'=> $this->message,
                        'gateway'=> $this->gateway,
                        'append_sender'=> $this->append_sender,
                    ],
                  ]
              ]
            );

            $body = $response->getBody();
            print_r(json_decode((string) $body));
        }

    }
?>
