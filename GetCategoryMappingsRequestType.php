<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves a map of old category IDs and corresponding activecategory IDs defined 
 * for the site to which the request is sent. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategoryMappingsRequestType.html
 *
 */
class GetCategoryMappingsRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryVersion;

	/**
	 * @return string
	 */
	function getCategoryVersion()
	{
		return $this->CategoryVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryVersion($value)
	{
		$this->CategoryVersion = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategoryMappingsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
