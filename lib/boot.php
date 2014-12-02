<?php

class View {

    private $render;

    public function __construct() {
        $this->render = new Render();
    }

    public function getLayout() {
        return $this->layout;
    }

    public function getRender() {
        return $this->render;
    }

    public static function show($view, $layout = 'layout') {
        $instance = new View();
        $layoutRender = $instance->getRender()->getLayout($layout);
        $viewRender = $instance->getRender()->getView($view);
        return $instance->getRender()->start($viewRender, $layoutRender);
    }

}

class Render {

    const BODY = '{body}';

    public function getLayout($layout) {
        ob_start();
        $filename = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR . "$layout.php";
        $this->validateFile($filename);
        include $filename;
        $render = ob_get_contents();
        ob_end_clean();
        return $render;
    }

    public function getView($view) {
        ob_start();
        $filename = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . "$view.php";
        $this->validateFile($filename);
        include $filename;
        $render = ob_get_contents();
        ob_end_clean();
        return $render;
    }

    public function start($view, $layout) {
        return str_replace(self::BODY, $view, $layout);
    }

    private function validateFile($filename) {
        if (!file_exists($filename)) {
            throw new Exception('File not found');
        }
    }

}
