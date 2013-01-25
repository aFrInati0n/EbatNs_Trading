<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'PictureManagerDetailsType.php';
require_once 'AbstractResponseType.php';

/**
 * Responds with information about content in a Picture Manager albumor the account 
 * settings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPictureManagerDetailsResponseType.html
 *
 */
class GetPictureManagerDetailsResponseType extends AbstractResponseType
{
	/**
	 * @var PictureManagerDetailsType
	 */
	protected $PictureManagerDetails;

	/**
	 * @return PictureManagerDetailsType
	 */
	function getPictureManagerDetails()
	{
		return $this->PictureManagerDetails;
	}
	/**
	 * @return void
	 * @param PictureManagerDetailsType $value 
	 */
	function setPictureManagerDetails($value)
	{
		$this->PictureManagerDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPictureManagerDetailsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PictureManagerDetails' =>
					array(
						'required' => false,
						'type' => 'PictureManagerDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
