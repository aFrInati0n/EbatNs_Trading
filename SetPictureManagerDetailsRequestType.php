<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
//
require_once 'PictureManagerDetailsType.php';
require_once 'PictureManagerActionCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * <table><tr><td class="notebox"><b>Note:</b> This call will soon be deprecated. 
 * Use accordingly.</td></tr></table><br> Creates, updates, or deletes Picture 
 * Manager account settings, folders, or pictures. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetPictureManagerDetailsRequestType.html
 *
 */
class SetPictureManagerDetailsRequestType extends AbstractRequestType
{
	/**
	 * @var PictureManagerDetailsType
	 */
	protected $PictureManagerDetails;
	/**
	 * @var PictureManagerActionCodeType
	 */
	protected $Action;

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
	 * @return PictureManagerActionCodeType
	 */
	function getAction()
	{
		return $this->Action;
	}
	/**
	 * @return void
	 * @param PictureManagerActionCodeType $value 
	 */
	function setAction($value)
	{
		$this->Action = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetPictureManagerDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					),
					'Action' =>
					array(
						'required' => false,
						'type' => 'PictureManagerActionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
