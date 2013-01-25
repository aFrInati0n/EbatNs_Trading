<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Type defining the <b>SellerPaymentProfile</b> container, which is used in an 
 * Add/Revise/Relist Trading API call to reference a Business Policies payment 
 * profile.<br/><br/><span class="tablenote"><b>Note:</b>Beginning with Version 
 * 763, the new Business Policies Management API and relatedTrading API 
 * containers/fields became available for testing in the Sandboxenvironment. The 
 * eBay Business Policies Management API and associated Trading APIchanges will go 
 * live to production in Version 775. A small percentage of sellerscan start using 
 * Business Policies beginning on June 11, 2012, with 100 percent ofsellers 
 * scheduled to be ramped up by July 2012.<span/> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerPaymentProfileType.html
 *
 */
class SellerPaymentProfileType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $PaymentProfileID;
	/**
	 * @var string
	 */
	protected $PaymentProfileName;

	/**
	 * @return long
	 */
	function getPaymentProfileID()
	{
		return $this->PaymentProfileID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setPaymentProfileID($value)
	{
		$this->PaymentProfileID = $value;
	}
	/**
	 * @return string
	 */
	function getPaymentProfileName()
	{
		return $this->PaymentProfileName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPaymentProfileName($value)
	{
		$this->PaymentProfileName = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerPaymentProfileType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PaymentProfileID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentProfileName' =>
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
