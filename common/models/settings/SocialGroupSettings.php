<?php

namespace common\models\settings;

use Yii;

class SocialGroupSettings extends Settings
{
	public static $SECTION = 'SocialGroupSettings';

	public $social_network;

	public function attributeLabels()
	{
		return [
			'social_network' => 'Социальные сети',
		];
	}

	public function rules()
	{
		return [
			[['social_network'], 'each', 'rule' => ['safe']]
		];
	}

	public function init()
	{
		parent::init();

		$settings = Yii::$app->settings;

		if( ($social_network = unserialize($settings->get('social_network', self::$SECTION))) ) {
			$this->social_network = $social_network;
		} else {
			$this->social_network = [];
		}
	}

	public function save()
	{
		$settings = Yii::$app->settings;

		$settings->set('social_network', serialize($this->social_network), self::$SECTION, 'string');

		return true;
	}
}