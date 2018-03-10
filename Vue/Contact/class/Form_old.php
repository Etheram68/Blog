<?php
class Form {

    private $datas = [];

    public function __construct($datas = []){
        $this->datas = $datas;
    }

    private function getValue($name){
        if(isset($this->datas[$name])) {
            return $this->datas[$name];
        }else{
            return '';
        }
    }

    private function input($type, $name, $label){
        $value = $this->getValue($name);
        if($type == 'textarea'){
            $input = "<div><textarea name=\"$name\" class=\"form-control bords-arrondis\" id=\"input$name\">$value</textarea></div>";
        }else{
            $input = "<input type=\"$type\" name=\"$name\" class=\"form-control\" id=\"input$name\" value=\"$value\">";
        }
        return "<label for=\"input$name\">$label</label>
        <div>
            $input
            </div>";
    }

    public function text($name, $label){
        return $this->input('text', $name, $label);
    }

    public function email($name, $label){
        return $this->input('email', $name, $label);
    }

    
    public function textarea($name, $label){
        return $this->input('textarea', $name, $label);
    }

} 