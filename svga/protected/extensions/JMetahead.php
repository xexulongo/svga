<?php 
class JMetahead extends CApplicationComponent
{
	public function construir($data){
		 	echo '<header class="masthead subhead""><container><h1>';
		 	echo $data['title'] . '</h1></container></header>';
	}
	/*public function noticias($dataprov){
		echo '<div class="featured-covers"><div class="featured-covers-inner">';
		for($i = 0; $i <= count($dataprov->data); ++$i){
			echo '<article class="post type-post status-publish format-standard hentry category-news cover-left">';
			echo '<a title=' . $dataprov->data[$i]->title . 'href=' . $dataprov->data[$i]->url . '>';
		  	if($dataprov->data[$i]->image != NULL and $dataprov->data[$i]->image != 'blanks') echo CHtml::image(Yii::app()->baseUrl . '/images/' . $dataprov->data[$i]->image, $dataprov->data[$i]->image);	
			echo '</a><header class="shadow">'
			echo '<p class ="meta">' . CHtml::link('News', array('index')) . ' - <time datetime"2013-09-18" pubdate="">' . Yii::app()->dateFormatter->formatDateTime($dataprov->data[$i]->create_time, 'long', 'short') . '></time></p>';		
			echo '<h1 class="h2">' . CHtml::link(CHtml::encode($dataprov->data[$i]->title), array('view', 'id'=>$datapov->$data[$i]->id)) . '</h1>';			
			echo '</header></article>';
		}
		echo '</div></div>';
	}
	*/
}