<?php
class HTML {
    public $html;

    function _Write($msg) {
        if ($msg != '') {
            echo $msg;
        }
    }

    function head_top() {
        $text = '
        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="utf-8">

        ';
        $this->_Write($text);
    }

    function title($string){
        $text = '<title>'.$string.'</title>';
        $this->_Write($text);
    }

    function load_js($file) {
        $text = '<script src="' . $file . '"></script>';
        $this->_Write($text);
    }

    function load_css($file) {
        $text = '<link href="' . $file . '" rel="stylesheet" type="text/css">';
        $this->_Write($text);
    }

    function load_jQuery($version) {
        $text = '<script src="../libry/jQuery/jQuery'.$version.'.js"></script>';
        $this->_Write($text);
    }

    function head_food() {
        $text = '
        </head>
        <body>
        ';
        $this->_Write($text);
    }

    function head() {
        $this->head_top();
        $this->head_food();
    }

    function food() {
        $text = '
        </body>
        </html>
        ';
        $this->_Write($text);
    }

    function li($file,$file_name){
        $text = '<li><a href="'.$file.'" target="main_right" >'.$file_name.'</a></li>';
        $this->_Write($text);
    }
}
$html = new HTML($html);
