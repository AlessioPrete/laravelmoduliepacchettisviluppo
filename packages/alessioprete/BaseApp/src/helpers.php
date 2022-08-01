<?php
if (! function_exists('alessioprete_view')) {
    /**
     * Returns a new displayable view based on the configured alessioprete view namespace.
     * If that view doesn't exist, it will load the one from the original theme.
     *
     * @param string (see config/alessioprete/base.php)
     * @return string
     */
    function alessioprete_view($view)
    {
        $originalTheme = 'alessioprete::';
        $theme = config('alessioprete.base.view_namespace');

        if (is_null($theme)) {
            $theme = $originalTheme;
        }

        $returnView = $theme.$view;

        if (! view()->exists($returnView)) {
            $returnView = $originalTheme.$view;
        }

        return $returnView;
    }
}
if (! function_exists('alessioprete_authentication_column')) {
    /**
     * Return the username column name.
     * The Laravel default (and alessioprete default) is 'email'.
     *
     * @return string
     */
    function alessioprete_authentication_column()
    {
        return config('alessioprete.base.authentication_column', 'email');
    }
}

if (! function_exists('alessioprete_middleware')) {
    /**
     * Return the key of the middleware used across alessioprete.
     * That middleware checks if the visitor is an admin.
     *
     * @param $path
     * @return string
     */
    function alessioprete_middleware()
    {
        return config('alessioprete.base.middleware_key', 'admin');
    }
}

if (! function_exists('alessioprete_url')) {
    /**
     * Appends the configured alessioprete prefix and returns
     * the URL using the standard Laravel helpers.
     *
     * @param $path
     * @return string
     */
    function alessioprete_url($path = null, $parameters = [], $secure = null)
    {
        $path = ! $path || (substr($path, 0, 1) == '/') ? $path : '/'.$path;

        return url(config('alessioprete.base.route_prefix', 'admin').$path, $parameters, $secure);
    }
}

if (! function_exists('alessioprete_auth')) {
    /*
     * Returns the user instance if it exists
     * of the currently authenticated admin
     * based off the defined guard.
     */
    function alessioprete_auth()
    {
        return \Auth::guard(alessioprete_guard_name());
    }
}

if (! function_exists('alessioprete_guard_name')) {
    /*
     * Returns the name of the guard defined
     * by the application config
     */
    function alessioprete_guard_name()
    {
        return config('alessioprete.base.guard', config('auth.defaults.guard'));
    }
}

if (! function_exists('alessioprete_user')) {
    /*
     * Returns back a user instance without
     * the admin guard, however allows you
     * to pass in a custom guard if you like.
     */
    function alessioprete_user()
    {
        return alessioprete_auth()->user();
    }
}
