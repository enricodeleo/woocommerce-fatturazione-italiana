<?php
/**
 * Data Store Handler
 *
 * @package WC_Piva_Cf_Invoice_Ita
 */

if (!defined('ABSPATH')) {
    exit;
}

class WC_Piva_Cf_Invoice_Ita_Data_Store {
    private static $instance = null;
    private $prefix = 'wcpicfi_';
    private $expiration = HOUR_IN_SECONDS;

    public static function instance() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function set($key, $value) {
        return set_transient($this->prefix . $key, $value, $this->expiration);
    }

    public function get($key) {
        return get_transient($this->prefix . $key);
    }

    public function delete($key) {
        return delete_transient($this->prefix . $key);
    }
}
