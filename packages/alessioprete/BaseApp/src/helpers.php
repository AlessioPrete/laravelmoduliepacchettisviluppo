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
