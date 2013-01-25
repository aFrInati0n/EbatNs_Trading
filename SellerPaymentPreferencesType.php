<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'DisplayPayNowButtonCodeType.php';
require_once 'AddressType.php';
require_once 'UPSRateOptionCodeType.php';

/**
 * Defines the values that make up the seller's preferences. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellerPaymentPreferencesType.html
 *
 */
class SellerPaymentPreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $AlwaysUseThisPaymentAddress;
	/**
	 * @var DisplayPayNowButtonCodeType
	 */
	protected $DisplayPayNowButton;
	/**
	 * @var boolean
	 */
	protected $PayPalPreferred;
	/**
	 * @var string
	 */
	protected $DefaultPayPalEmailAddress;
	/**
	 * @var boolean
	 */
	protected $PayPalAlwaysOn;
	/**
	 * @var AddressType
	 */
	protected $SellerPaymentAddress;
	/**
	 * @var UPSRateOptionCodeType
	 */
	protected $UPSRateOption;

	/**
	 * @return boolean
	 */
	function getAlwaysUseThisPaymentAddress()
	{
		return $this->AlwaysUseThisPaymentAddress;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAlwaysUseThisPaymentAddress($value)
	{
		$this->AlwaysUseThisPaymentAddress = $value;
	}
	/**
	 * @return DisplayPayNowButtonCodeType
	 */
	function getDisplayPayNowButton()
	{
		return $this->DisplayPayNowButton;
	}
	/**
	 * @return void
	 * @param DisplayPayNowButtonCodeType $value 
	 */
	function setDisplayPayNowButton($value)
	{
		$this->DisplayPayNowButton = $value;
	}
	/**
	 * @return boolean
	 */
	function getPayPalPreferred()
	{
		return $this->PayPalPreferred;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPayPalPreferred($value)
	{
		$this->PayPalPreferred = $value;
	}
	/**
	 * @return string
	 */
	function getDefaultPayPalEmailAddress()
	{
		return $this->DefaultPayPalEmailAddress;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDefaultPayPalEmailAddress($value)
	{
		$this->DefaultPayPalEmailAddress = $value;
	}
	/**
	 * @return boolean
	 */
	function getPayPalAlwaysOn()
	{
		return $this->PayPalAlwaysOn;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPayPalAlwaysOn($value)
	{
		$this->PayPalAlwaysOn = $value;
	}
	/**
	 * @return AddressType
	 */
	function getSellerPaymentAddress()
	{
		return $this->SellerPaymentAddress;
	}
	/**
	 * @return void
	 * @param AddressType $value 
	 */
	function setSellerPaymentAddress($value)
	{
		$this->SellerPaymentAddress = $value;
	}
	/**
	 * @return UPSRateOptionCodeType
	 */
	function getUPSRateOption()
	{
		return $this->UPSRateOption;
	}
	/**
	 * @return void
	 * @param UPSRateOptionCodeType $value 
	 */
	function setUPSRateOption($value)
	{
		$this->UPSRateOption = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellerPaymentPreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AlwaysUseThisPaymentAddress' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayPayNowButton' =>
					array(
						'required' => false,
						'type' => 'DisplayPayNowButtonCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PayPalPreferred' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DefaultPayPalEmailAddress' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PayPalAlwaysOn' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerPaymentAddress' =>
					array(
						'required' => false,
						'type' => 'AddressType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UPSRateOption' =>
					array(
						'required' => false,
						'type' => 'UPSRateOptionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
