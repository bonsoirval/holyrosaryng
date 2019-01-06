<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],


        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],

        'school' => [
            'driver' => 'session',
            'provider' => 'schools',
        ],

        //admins
        'nursing_admin' => [
            'driver' => 'session',
            'provider' => 'nursing_admins',
        ],

        //candidate's guards
        'nursing_candidate' => [
            'driver' => 'session',
            'provider' => 'nursing_candidates',
        ],

        'medlab_candidate' => [
            'driver' => 'session',
            'provider' => 'nursing_candidates',
        ],

        'midwife_candidate' => [
            'driver' => 'session',
            'provider' => 'midwife_candidates',
        ],

        //students' guards
        'nursing_student' => [
            'driver' => 'session',
            'provider' => 'nursing_students',
        ],

        'medlab_student' => [
            'driver' => 'session',
            'provider' => 'medlab_students',
        ],

        'midwife_student' => [
            'driver' => 'session',
            'provider' => 'midwife_students',
        ],


    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Admin::class,
        ],

        'schools' => [
          'driver' => 'eloquent',
          'model' => App\School::class,
        ],

        //admins
        'nursing_admins' => [
            'driver' => 'eloquent',
            'model' => App\Nursing_admin::class,
        ],

        //candidates' providers
        'nursing_candidates' => [
          'driver' => 'eloquent',
          'model' => App\Nursing_candidate::class,
        ],

        'midwife_candidates' => [
          'driver' => 'eloquent',
          'model' => App\Midwife_candidate::class,
        ],

        'medlab_candidates' => [
          'driver' => 'eloquent',
          'model' => App\Medlab_candidate::class,
        ],

        //students' providers
        'nursing_students' => [
          'driver' => 'eloquent',
          'model' => App\Nursing_student::class,
        ],

        'medlab_students' => [
          'driver' => 'eloquent',
          'model' => App\Medlab_student::class,
        ],

        'midwife_students' => [
          'driver' => 'eloquent',
          'model' => App\Midwife_student::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'admins' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],

        'nursing_admin' => [
            'provider' => 'nursing_admins',
            'table' => 'password_resets',
            'expire' => 15,
        ],

        'schools' => [
          'provider' => 'schools',
          'table' => 'password_resets',
          'expire' => 15,
        ],

        'nursing_candidates' => [
          'provider' => 'schools',
          'table' => 'password_resets',
          'expire' => 15,
        ],

        'medlab_candidates' => [
          'provider' => 'schools',
          'table' => 'password_resets',
          'expire' => 15,
        ],

        'mifwife_candidates' => [
          'provider' => 'schools',
          'table' => 'password_resets',
          'expire' => 15,
        ]
    ],

];
