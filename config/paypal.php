<?php
return array(
    // set your paypal credential
    'client_id' => 'AWEYnTdqRR1OcEVpn23gywpcDSzpWAcWbg669_zZaGM_M_2FOipFw5VRWMlYNLEtqu0PyyvK0Rj54QJc',
    'secret' => 'ENj1HnNF3o9ToY9kOcpTHmcwGLvkpV2JXRjZrMohWIeg4FAyRrUt46du3yUnRvlagpAvCxXpJhpRh-7q',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);