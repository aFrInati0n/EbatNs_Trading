<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'MyMessagesAlertIDType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Contains a list of up to 10 AlertID values. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyMessagesAlertIDArrayType.html
 *
 */
class MyMessagesAlertIDArrayType extends EbatNs_ComplexType
{
	/**
	 * @var MyMessagesAlertIDType
	 */
	protected $AlertID;

	/**
	 * @return MyMessagesAlertIDType
	 * @param integer $index 
	 */
	function getAlertID($index = null)
	{
		if ($index !== null) {
			return $this->AlertID[$index];
		} else {
			return $this->AlertID;
		}
	}
	/**
	 * @return void
	 * @param MyMessagesAlertIDType $value 
	 * @param  $index 
	 */
	function setAlertID($value, $index = null)
	{
		if ($index !== null) {
			$this->AlertID[$index] = $value;
		} else {
			$this->AlertID = $value;
		}
	}
	/**
	 * @return void
	 * @param MyMessagesAlertIDType $value 
	 */
	function addAlertID($value)
	{
		$this->AlertID[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyMessagesAlertIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AlertID' =>
					array(
						'required' => false,
						'type' => 'MyMessagesAlertIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
