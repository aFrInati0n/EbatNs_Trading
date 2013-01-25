<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'MyMessagesExternalMessageIDType.php';

/**
 * Contains a list of up to 10 external message IDs. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyMessagesExternalMessageIDArrayType.html
 *
 */
class MyMessagesExternalMessageIDArrayType extends EbatNs_ComplexType
{
	/**
	 * @var MyMessagesExternalMessageIDType
	 */
	protected $ExternalMessageID;

	/**
	 * @return MyMessagesExternalMessageIDType
	 * @param integer $index 
	 */
	function getExternalMessageID($index = null)
	{
		if ($index !== null) {
			return $this->ExternalMessageID[$index];
		} else {
			return $this->ExternalMessageID;
		}
	}
	/**
	 * @return void
	 * @param MyMessagesExternalMessageIDType $value 
	 * @param  $index 
	 */
	function setExternalMessageID($value, $index = null)
	{
		if ($index !== null) {
			$this->ExternalMessageID[$index] = $value;
		} else {
			$this->ExternalMessageID = $value;
		}
	}
	/**
	 * @return void
	 * @param MyMessagesExternalMessageIDType $value 
	 */
	function addExternalMessageID($value)
	{
		$this->ExternalMessageID[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyMessagesExternalMessageIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ExternalMessageID' =>
					array(
						'required' => false,
						'type' => 'MyMessagesExternalMessageIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
