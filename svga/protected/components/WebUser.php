<?php

class WebUser extends CWebUser {
	
	public function getUser() {
		if(Yii::app()->isGuest) {
			return false;
		} else {	
			if(Yii::app()->user->getState('login_type') == 'kapo') {
				return false;
			} else {
				return User::model()->findByPk(Yii::app()->user->getID());
			}
		}
	}
	
	public function checkSeccio($seccio) {
		if(Yii::app()->user->getState('login_type') == 'kapo') {
			return in_array($seccio, $this->getState('seccions'));
		} else {
			return false;
		}
	}
	
    public function checkIsKapo() {
        if(Yii::app()->user->getState('login_type') == 'kapo') {
            return true;
        } else {
            return false;
        }
    }

    //funció que retorna error a les pàgines on el login sigui requerit
    public function loginRequired()
	{
		$app=Yii::app();
		$request=$app->getRequest();

		if(!$request->getIsAjaxRequest())
		{
			$this->setFlash('warning', '<h4><b>Error!</b></h4>' . Yii::t('SVGA', 'Per poder accedir a aquesta funcionalitat has d\'haver inciat sessió'));
			$this->setReturnUrl($request->getUrl());
			if(($url=$this->loginUrl)!==null)
			{
				if(is_array($url))
				{
					$route=isset($url[0]) ? $url[0] : $app->defaultController;
					$url=$app->createUrl($route,array_splice($url,1));
				}
				$request->redirect($url);
			}
		}
		elseif(isset($this->loginRequiredAjaxResponse))
		{
			echo $this->loginRequiredAjaxResponse;
			Yii::app()->end();
		}
		if(($url=$this->loginUrl)!==null)
		{
			if(is_array($url))
			{
				$route=isset($url[0]) ? $url[0] : $app->defaultController;
				$url=$app->createUrl($route,array_splice($url,1));
			}
			$request->redirect($url);
		}
		else
			throw new CHttpException(403,Yii::t('yii','Login Required'));
		throw new CHttpException(403,Yii::t('yii','Login Required'));
	}
}
