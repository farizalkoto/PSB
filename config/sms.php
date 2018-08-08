<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Default Driver
    |--------------------------------------------------------------------------
    |
    | This value determines which of the following gateway to use.
    | You can switch to a different driver at runtime.
    |
    */
    'default' => 'twilio',

    /*
    |--------------------------------------------------------------------------
    | List of Drivers
    |--------------------------------------------------------------------------
    |
    | These are the list of drivers to use for this package.
    | You can change the name. Then you'll have to change
    | it in the map array too.
    |
    */
    'drivers' => [
        'textlocal' => [
            'url'      => 'http://api.textlocal.in/send/', # Country Wise this may change.
            'username' => 'Your Username',
            'hash'     => 'Your Hash',
            'sender'   => 'Sender Name',
        ],
        'twilio' => [
            'sid'   => 'AC222751abea3430f400f573ecbb85321b',
            'token' => '68d3e5b7723f0682e9eb95eaf51dadd7',
            'from'  => '+6285849533320',
        ],
        'linkmobility' => [
          'url'      => 'http://simple.pswin.com', # Country Wise this may change.
          'username' => 'Your Username',
          'password' => 'Your Password',
          'sender'   => 'Sender name',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Class Maps
    |--------------------------------------------------------------------------
    |
    | This is the array of Classes that maps to Drivers above.
    | You can create your own driver if you like and add the
    | config in the drivers array and the class to use for
    | here with the same name. You will have to extend
    | Tzsk\Sms\Contract\MasterDriver in your driver.
    |
    */
    'map' => [
        'textlocal'    => Tzsk\Sms\Drivers\Textlocal::class,
        'twilio'       => Tzsk\Sms\Drivers\Twilio::class,
        'linkmobility' => Tzsk\Sms\Drivers\Linkmobility::class,
    ]
];
