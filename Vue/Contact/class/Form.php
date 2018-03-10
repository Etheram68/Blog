<?php

class Form{

		private $datas = [];

		public function __construct($datas = []){
			$this->datas = $datas;
		}

		private function getValue($name){
			$value = "";
			if(isset($this->datas[$name])){
				return $this->datas[$name];
			}
			else{
				return '';
			}
		}

		private function input($type, $name, $label){

			$value = $this->getValue($name);
			if(isset($this->datas[$name])){
				$value = $this->datas[$name];
			}

			if($type == 'textarea'){
				$input = "<textarea  name=\"$name\" class=\"largeur-totale bords-arrondis\" rows=\"8\" id=\"input$name\" >$value</textarea>";
			}
			else{
			$input = "<input type=\"$type\" name=\"$name\" class=\"largeur-totale bords-arrondis\" id=\"input$name\" value=\"$value\" >";
			}

			return "<label for=\"input$name\">$label</label>
            $input ";
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