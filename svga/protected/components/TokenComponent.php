<?php

class TokenComponent extends CApplicationComponent {
	
	private static $chars = 'abcdefghijklmnopqrstuvwxyz';
	private static $nums = '1234567890';
	private static $char_maj = 'ABCDEFGHIJKLMNOPQRTSUVWXYZ';
	
	public function create($length, $maj = true) {
		$result = '';
		$abc = self::$chars . self::$nums;
		if($maj) {
			$abc .= self::$char_maj;
		}
		$nums = self::$nums;
		for($i = 0; $i < $length; $i++) {
			$result .= $abc[mt_rand(0,strlen($abc) -1)];
		}
		return $result;
	}
	
	public function createUnique($length, CActiveRecord $model, $field, $maj = true) {
		
		do {
			$token = $this->create($length, $maj);
			$record = $model->find($field . '= :field', array(':field' => $token));
		} while(!empty($record));
		
		return $token;
				
	}	
}
