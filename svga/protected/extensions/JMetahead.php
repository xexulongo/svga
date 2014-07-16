<?php 
class JMetahead extends CApplicationComponent
{
	public function construir($data){
		 	echo '<header class="masthead subhead"">';
		 	echo '<container><h1>' . $data['title'] . '</h1></container></header>';
	}
}