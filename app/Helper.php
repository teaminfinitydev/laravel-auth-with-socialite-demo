<?php 
if (!function_exists('set_social_auth')) {
    function set_social_auth($driver = null)
    {
        $validDrivers = ['google', 'github', 'facebook'];

        if (in_array($driver, $validDrivers)) {
            return url("/auth/redirect/{$driver}");
        }

        return url('./?');
    }
}

if (!function_exists('get_web_config_env_data')) {
    function get_web_config_env_data($key) {

        $value = \DotenvEditor::getValue($key);

        return $value;
    }
}