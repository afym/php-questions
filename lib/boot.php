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

class CheckAnswer {

    const SUCCESS = '<span class="label label-success">Correct answer</span>';
    const DANGER = '<span class="label label-danger">Wrong answer</span>';

    private static $answers;
    private static $score;

    public static function setAnswers($answers) {
        static::$answers = $answers;
    }

    public static function showAnswer($questionNumber) {
        if (isset($_POST) && isset($_POST["p{$questionNumber}"])) {
            $value = $_POST["p{$questionNumber}"];
            // Si la pregunta tiene una sola respuesta

            if (is_string($value) && $value != '') {
                return $value == static::$answers[$questionNumber] ? self::SUCCESS : self::DANGER;
            } else if (is_array($value) && count($value) > 0) {
                $diff = array_diff($value, static::$answers[$questionNumber]);
                return empty($diff) ? self::SUCCESS : self::DANGER;
            }
        } 

        return '';
    }

    public function getScore() {
        
    }
}
