<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
//
require_once 'StoreCustomPageArrayType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains the custom page or pages for the user's Store. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetStoreCustomPageResponseType.html
 *
 */
class GetStoreCustomPageResponseType extends AbstractResponseType
{
	/**
	 * @var StoreCustomPageArrayType
	 */
	protected $CustomPageArray;

	/**
	 * @return StoreCustomPageArrayType
	 */
	function getCustomPageArray()
	{
		return $this->CustomPageArray;
	}
	/**
	 * @return void
	 * @param StoreCustomPageArrayType $value 
	 */
	function setCustomPageArray($value)
	{
		$this->CustomPageArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetStoreCustomPageResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CustomPageArray' =>
					array(
						'required' => false,
						'type' => 'StoreCustomPageArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
