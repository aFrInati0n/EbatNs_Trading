<?php
// autogenerated file 29.12.2011 14:15
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'SellingManagerTemplateDetailsArrayType.php';

/**
 * Contains the templates requested on input. Each SellingManagerTemplateType 
 * object in the response contains the data for oneSelling Manager template. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellingManagerTemplatesResponseType.html
 *
 */
class GetSellingManagerTemplatesResponseType extends AbstractResponseType
{
	/**
	 * @var SellingManagerTemplateDetailsArrayType
	 */
	protected $SellingManagerTemplateDetailsArray;

	/**
	 * @return SellingManagerTemplateDetailsArrayType
	 */
	function getSellingManagerTemplateDetailsArray()
	{
		return $this->SellingManagerTemplateDetailsArray;
	}
	/**
	 * @return void
	 * @param SellingManagerTemplateDetailsArrayType $value 
	 */
	function setSellingManagerTemplateDetailsArray($value)
	{
		$this->SellingManagerTemplateDetailsArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellingManagerTemplatesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SellingManagerTemplateDetailsArray' =>
					array(
						'required' => false,
						'type' => 'SellingManagerTemplateDetailsArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
