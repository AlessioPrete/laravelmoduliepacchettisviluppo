<?php

return [
    //Elemento di prova
    'campoTest' => 'ciccio prete',
    // ----
    // HEAD
    // ----
    'version' => \Composer\InstalledVersions::getVersion('alessioprete/baseapp'),
    // Project name. Shown in the window title.
    'project_name' => 'General Admin Panel',

    // JS files that are loaded in all pages, using Laravel's mix() helper
    'mix_scripts' => [
        // file_path => manifest_directory_path
        // 'js/app.js' => '',
    ],
    // When clicking on the admin panel's top-left logo/name,
    // where should the user be redirected?
    // The string below will be passed through the url() helper.
    // - default: '' (project root)
    // - alternative: 'admin' (the admin's dashboard)
    'home_link' => '',
    'styles' => [
        // Example (the fonts above, loaded from CDN instead)
        // 'https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',

        // Example (load font-awesome instead of line-awesome):
        // 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css',
    ],

    /*
    |--------------------------------------------------------------------------
    | File System
    |--------------------------------------------------------------------------
    */

    // alessioprete\BaseApp sets up its own filesystem disk, just like you would by
    // adding an entry to your config/filesystems.php. It points to the root
    // of your project and it's used throughout all alessioprete packages.
    //
    // You can rename this disk here. Default: root
    'root_disk_name' => 'root',

    /*
   |--------------------------------------------------------------------------
   | Authentication
   |--------------------------------------------------------------------------
   */

    //Namespace per Modello Utenti
    'user_model_fqn' => config('auth.providers.users.model'),

    /*
   |--------------------------------------------------------------------------
   | Registration Open
   |--------------------------------------------------------------------------
   |
   | Choose whether new users/admins are allowed to register.
   | This will show the Register button on the login page and allow access to the
   | Register functions in AuthController.
   |
   | By default the registration is open only on localhost.
   */

    'registration_open' => env('ALESSIOPRETE_REGISTRATION_OPEN', env('APP_ENV') === 'local'),

    /*
   |--------------------------------------------------------------------------
   | Theme (User Interface)
   |--------------------------------------------------------------------------
   */
    // Change the view namespace in order to load a different theme than the one alessioprete provides.
    // You can create child themes yourself, by creating a view folder anywhere in your resources/views
    // and choosing that view_namespace instead of the default one. alessioprete will load a file from there
    // if it exists, otherwise it will load it from the default namespace ("alessioprete::").

    'view_namespace' => 'alessioprete::',
];
