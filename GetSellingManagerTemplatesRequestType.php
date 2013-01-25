<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves Selling Manager templates.This call is subject to change without 
 * notice; thedeprecation process is inapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellingManagerTemplatesRequestType.html
 *
 */
class GetSellingManagerTemplatesRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $SaleTemplateID;

	/**
	 * @return long
	 * @param integer $index 
	 */
	function getSaleTemplateID($index = null)
	{
		if ($index !== null) {
			return $this->SaleTemplateID[$index];
		} else {
			return $this->SaleTemplateID;
		}
	}
	/**
	 * @return void
	 * @param long $value 
	 * @param  $index 
	 */
	function setSaleTemplateID($value, $index = null)
	{
		if ($index !== null) {
			$this->SaleTemplateID[$index] = $value;
		} else {
			$this->SaleTemplateID = $value;
		}
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function addSaleTemplateID($value)
	{
		$this->SaleTemplateID[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellingManagerTemplatesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SaleTemplateID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
