<?php

class EUtils {
	
	//path per guardar els fitxers pujats
	const UPLOAD_PATH = '/../upload/';
    const UPLOAD_PATH_NAME = 'upload';
	//nom de la carpeta temporal
	const UPLOAD_TEMP = 'tmp/';
	
	public static function checkPage($controller, $action = null, $type = null) {
		if(Yii::app()->controller->id != $controller) {
			return false;
		}
		if($action != null && Yii::app()->controller->action->id != $action) {
			return false;
		}
		if($type != null && isset($_GET['type']) && $type != $_GET['type']) {
			return false;
		}
		return true;
	}
	
	public static function returnActive($controller, $action = null, $type = null) {
		if(self::checkPage($controller, $action, $type)) {
			return 'class="active"';
		}
	}
	
	public static function getRandomTempFilename($extension) {
		do {
			$name = Yii::app()->token->create(10,false);
			$filename = Yii::app()->getBasePath() . EUtils::UPLOAD_PATH . EUtils::UPLOAD_TEMP . $name . '.' . $extension;
		} while(file_exists($filename));
		return $name; 
	}
	
	public static function getRandomFilename($path, $extension) {
		do {
			$name = Yii::app()->token->create(10,false);
			$filename = $path . $name . '.' . $extension;
		} while(file_exists($filename));
		return $name; 
	}
    
    public static function getDestacadosIcon($data, $dit = true) {
        if($data->destacado) {
            echo '<input type="checkbox" value="1" class="customChList"/><label for="chk1"</label>';
        } 
        else {
            echo '<i class="icon-star-empty"></i>';
        }
    }
}