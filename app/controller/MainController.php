<?php

namespace app\controller;

class MainController {
    public static function render($model, $view, $data = []) {
        extract($data);
        ob_start();
        include("app/view/{$model}/{$view}.php");

        return ob_get_clean();
    }
}
