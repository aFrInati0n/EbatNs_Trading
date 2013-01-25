<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Deletes a Selling Manager template.This call is subject to change without 
 * notice; thedeprecation process is inapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DeleteSellingManagerTemplateRequestType.html
 *
 */
class DeleteSellingManagerTemplateRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $SaleTemplateID;

	/**
	 * @return long
	 */
	function getSaleTemplateID()
	{
		return $this->SaleTemplateID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setSaleTemplateID($value)
	{
		$this->SaleTemplateID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DeleteSellingManagerTemplateRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SaleTemplateID' =>
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
