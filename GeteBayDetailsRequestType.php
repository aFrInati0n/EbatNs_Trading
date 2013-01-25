<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'DetailNameCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Retrieves eBay IDs and codes (e.g., site IDs and shipping servicecodes), 
 * enumerated data (e.g., payment methods), and other common eBaymeta-data. This 
 * call enables you to keep certain data up to date in yourapplications without 
 * referring to the schema, the documentation, or theeBay online help. Other data 
 * is returned for your reference, but you mayneed to refer to the schema or the 
 * documentation for information aboutvalid values and usage.<br><br>In some cases, 
 * the data returned in the response will vary according tothe site that you use 
 * for the request.<br><br>If you use GeteBayDetails in preparation for listing in 
 * the US Motors Partsand Accessories categories, use site ID 0 (which is the site 
 * ID of the USsite) when you call GeteBayDetails.<br><br>Sellers who engage in 
 * cross-border trade on sites that require a recoupment agreement, must agree to 
 * therecoupment terms before adding items to the site. This agreement allows eBay 
 * to reimbursea buyer during a dispute and then recoup the cost from the seller. 
 * Information about whether a site is a recoupment site is returned in the 
 * GeteBayDetailsResponse.RecoupmentPolicyDetails container. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GeteBayDetailsRequestType.html
 *
 */
class GeteBayDetailsRequestType extends AbstractRequestType
{
	/**
	 * @var DetailNameCodeType
	 */
	protected $DetailName;

	/**
	 * @return DetailNameCodeType
	 * @param integer $index 
	 */
	function getDetailName($index = null)
	{
		if ($index !== null) {
			return $this->DetailName[$index];
		} else {
			return $this->DetailName;
		}
	}
	/**
	 * @return void
	 * @param DetailNameCodeType $value 
	 * @param  $index 
	 */
	function setDetailName($value, $index = null)
	{
		if ($index !== null) {
			$this->DetailName[$index] = $value;
		} else {
			$this->DetailName = $value;
		}
	}
	/**
	 * @return void
	 * @param DetailNameCodeType $value 
	 */
	function addDetailName($value)
	{
		$this->DetailName[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GeteBayDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DetailName' =>
					array(
						'required' => false,
						'type' => 'DetailNameCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
