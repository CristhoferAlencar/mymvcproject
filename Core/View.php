<?php
namespace Core;

/* 
 * View
 */
class View{
    /**
     * Render a view file
     * 
     * @param string $view The view file
     * 
     * @return void
     */
    public static function render($view, $args = []){
        extract($args, EXTR_SKIP);
        
        $file = "../App/Views/$view"; // relative to Core directory
        
        if(is_readable($file)){
            require $file;
        }else{
            throw new \Exception("$file not found");
        }
    }
}