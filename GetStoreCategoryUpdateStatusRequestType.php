<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Returns the status of the processing for category-structure changes 
 * specifiedwith a call to SetStoreCategories. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetStoreCategoryUpdateStatusRequestType.html
 *
 */
class GetStoreCategoryUpdateStatusRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $TaskID;

	/**
	 * @return long
	 */
	function getTaskID()
	{
		return $this->TaskID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setTaskID($value)
	{
		$this->TaskID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetStoreCategoryUpdateStatusRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'TaskID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
