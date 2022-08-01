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
        'packages/alessioprete/base/css/bundle.css',
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

    // Developer or company name. Shown in footer.
    'developer_name' => 'Alessio Prete',

    // Developer website. Link in footer. Type false if you want to hide it.
    'developer_link' => 'https://www.alessioprete.com',

    // Show powered by Laravel alessioprete in the footer? true/false
    'show_powered_by' => true,

    // -------
    // SCRIPTS
    // -------

    // JS files that are loaded in all pages, using Laravel's asset() helper
    'scripts' => [
        // Backstrap includes jQuery, Bootstrap, CoreUI, PNotify, Popper
        'packages/alessioprete/base/js/bundle.js',

        // examples (everything inside the bundle, loaded from CDN)
        // 'https://code.jquery.com/jquery-3.4.1.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
        // 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        // 'https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
        // 'https://unpkg.com/sweetalert/dist/sweetalert.min.js',
        // 'https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js'

        // examples (VueJS or React)
        // 'https://unpkg.com/vue@2.4.4/dist/vue.min.js',
        // 'https://unpkg.com/react@16/umd/react.production.min.js',
        // 'https://unpkg.com/react-dom@16/umd/react-dom.production.min.js',
    ],

    'setup_password_recovery_routes' => true,

    // Alias for that middleware
    'middleware_key' => 'admin',
    // Note: It's recommended to use the alessioprete_middleware() helper everywhere, which pulls this key for you.

    // The classes for the middleware to check if the visitor is an admin
    // Can be a single class or an array of classes
    'middleware_class' => [
        \alessioprete\BaseApp\app\Http\Middleware\CheckIfAdmin::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        // \Backpack\CRUD\app\Http\Middleware\UseBackpackAuthGuardInsteadOfDefaultAuthGuard::class,
    ],

    // The prefix used in all base routes (the 'admin' in admin/dashboard)
    // You can make sure all your URLs use this prefix by using the alessioprete_url() helper instead of url()
    'route_prefix' => 'admin',

    // The guard that protects the alessioprete admin panel.
    // If null, the config.auth.defaults.guard value will be used.
    'guard' => 'aprete',
];
