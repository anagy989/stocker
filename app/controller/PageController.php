<?php

namespace app\controller;



class PageController extends MainController {
    public static function actionContact() {
        return self::render("page", "contact");
    }
    public static function actionAbout() {
        return self::render("page", "about");
    }
    public static function actionHome() {
        return self::render("page", "home");
    }
}
