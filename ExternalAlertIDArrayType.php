<?php
// autogenerated file 15.11.2010 08:29
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExternalAlertIDArrayType.html
 *
 */
class ExternalAlertIDArrayType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ExternalAlertID;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getExternalAlertID($index = null)
	{
		if ($index !== null) {
			return $this->ExternalAlertID[$index];
		} else {
			return $this->ExternalAlertID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setExternalAlertID($value, $index = null)
	{
		if ($index !== null) {
			$this->ExternalAlertID[$index] = $value;
		} else {
			$this->ExternalAlertID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addExternalAlertID($value)
	{
		$this->ExternalAlertID[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExternalAlertIDArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ExternalAlertID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
