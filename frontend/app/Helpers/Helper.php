<?php

use App\Setting;
 function getConfigValueFromSettingsTable($configKey) {
    $settings = Setting::where('config_key', $configKey)->first();
    if(!empty($settings)) {
        return $settings->config_value;
    }
        return null;
}
