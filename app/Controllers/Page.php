<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Page extends Controller {
    protected $acf = true;

    public function variant() {
        return get_field('field_page_settings_variant');
    }
}
