<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'StoreCustomPageType.php';

/**
 * Returned after calling SetStoreCustomPageRequest. This serves as confirmation 
 * that the custom page was successfully submitted. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SetStoreCustomPageResponseType.html
 *
 */
class SetStoreCustomPageResponseType extends AbstractResponseType
{
	/**
	 * @var StoreCustomPageType
	 */
	protected $CustomPage;

	/**
	 * @return StoreCustomPageType
	 */
	function getCustomPage()
	{
		return $this->CustomPage;
	}
	/**
	 * @return void
	 * @param StoreCustomPageType $value 
	 */
	function setCustomPage($value)
	{
		$this->CustomPage = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SetStoreCustomPageResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CustomPage' =>
					array(
						'required' => false,
						'type' => 'StoreCustomPageType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
