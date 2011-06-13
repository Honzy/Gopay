<?php

/**
 * Gopay Helper with Happy API
 * 
 * @author Vojtech Dobes
 */

namespace Gopay;

use Nette\Forms\ImageButton;

/**
 * Payment button
 *
 * @property-read   $channel
 */
class ImagePaymentButton extends ImageButton
{
	
	/** @var string */
	private $channel;
	
	public function setChannel($channel)
	{
		$this->channel = $channel;
	}
	
	public function getChannel()
	{
		return $this->channel;
	}


}
