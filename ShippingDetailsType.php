<?php
// autogenerated file 15.11.2010 08:29
// $Id: $
// $Log: $
//
//
require_once 'TaxTableType.php';
require_once 'InsuranceDetailsType.php';
require_once 'PromotionalShippingDiscountDetailsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ShipmentTrackingDetailsType.php';
require_once 'RateTableDetailsType.php';
require_once 'CalculatedShippingDiscountType.php';
require_once 'ShippingServiceOptionsType.php';
require_once 'SalesTaxType.php';
require_once 'ShippingTypeCodeType.php';
require_once 'AmountType.php';
require_once 'InternationalShippingServiceOptionsType.php';
require_once 'ShippingRateTypeCodeType.php';
require_once 'FlatShippingDiscountType.php';
require_once 'InsuranceOptionCodeType.php';
require_once 'CalculatedShippingRateType.php';

/**
 * Type for the shipping-related details for an item or transaction,including flat 
 * and calculated shipping costs. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingDetailsType.html
 *
 */
class ShippingDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $AllowPaymentEdit;
	/**
	 * @var boolean
	 */
	protected $ApplyShippingDiscount;
	/**
	 * @var CalculatedShippingRateType
	 */
	protected $CalculatedShippingRate;
	/**
	 * @var boolean
	 */
	protected $ChangePaymentInstructions;
	/**
	 * @var AmountType
	 */
	protected $InsuranceFee;
	/**
	 * @var InsuranceOptionCodeType
	 */
	protected $InsuranceOption;
	/**
	 * @var boolean
	 */
	protected $InsuranceWanted;
	/**
	 * @var boolean
	 */
	protected $PaymentEdited;
	/**
	 * @var string
	 */
	protected $PaymentInstructions;
	/**
	 * @var SalesTaxType
	 */
	protected $SalesTax;
	/**
	 * @var string
	 */
	protected $ShippingRateErrorMessage;
	/**
	 * @var ShippingRateTypeCodeType
	 */
	protected $ShippingRateType;
	/**
	 * @var ShippingServiceOptionsType
	 */
	protected $ShippingServiceOptions;
	/**
	 * @var InternationalShippingServiceOptionsType
	 */
	protected $InternationalShippingServiceOption;
	/**
	 * @var ShippingTypeCodeType
	 */
	protected $ShippingType;
	/**
	 * @var int
	 */
	protected $SellingManagerSalesRecordNumber;
	/**
	 * @var boolean
	 */
	protected $ThirdPartyCheckout;
	/**
	 * @var TaxTableType
	 */
	protected $TaxTable;
	/**
	 * @var boolean
	 */
	protected $GetItFast;
	/**
	 * @var token
	 */
	protected $ShippingServiceUsed;
	/**
	 * @var AmountType
	 */
	protected $DefaultShippingCost;
	/**
	 * @var InsuranceDetailsType
	 */
	protected $InsuranceDetails;
	/**
	 * @var InsuranceDetailsType
	 */
	protected $InternationalInsuranceDetails;
	/**
	 * @var string
	 */
	protected $ShippingDiscountProfileID;
	/**
	 * @var FlatShippingDiscountType
	 */
	protected $FlatShippingDiscount;
	/**
	 * @var CalculatedShippingDiscountType
	 */
	protected $CalculatedShippingDiscount;
	/**
	 * @var boolean
	 */
	protected $PromotionalShippingDiscount;
	/**
	 * @var string
	 */
	protected $InternationalShippingDiscountProfileID;
	/**
	 * @var FlatShippingDiscountType
	 */
	protected $InternationalFlatShippingDiscount;
	/**
	 * @var CalculatedShippingDiscountType
	 */
	protected $InternationalCalculatedShippingDiscount;
	/**
	 * @var boolean
	 */
	protected $InternationalPromotionalShippingDiscount;
	/**
	 * @var PromotionalShippingDiscountDetailsType
	 */
	protected $PromotionalShippingDiscountDetails;
	/**
	 * @var AmountType
	 */
	protected $CODCost;
	/**
	 * @var string
	 */
	protected $ExcludeShipToLocation;
	/**
	 * @var boolean
	 */
	protected $SellerExcludeShipToLocationsPreference;
	/**
	 * @var ShipmentTrackingDetailsType
	 */
	protected $ShipmentTrackingDetails;
	/**
	 * @var RateTableDetailsType
	 */
	protected $RateTableDetails;

	/**
	 * @return boolean
	 */
	function getAllowPaymentEdit()
	{
		return $this->AllowPaymentEdit;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAllowPaymentEdit($value)
	{
		$this->AllowPaymentEdit = $value;
	}
	/**
	 * @return boolean
	 */
	function getApplyShippingDiscount()
	{
		return $this->ApplyShippingDiscount;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setApplyShippingDiscount($value)
	{
		$this->ApplyShippingDiscount = $value;
	}
	/**
	 * @return CalculatedShippingRateType
	 */
	function getCalculatedShippingRate()
	{
		return $this->CalculatedShippingRate;
	}
	/**
	 * @return void
	 * @param CalculatedShippingRateType $value 
	 */
	function setCalculatedShippingRate($value)
	{
		$this->CalculatedShippingRate = $value;
	}
	/**
	 * @return boolean
	 */
	function getChangePaymentInstructions()
	{
		return $this->ChangePaymentInstructions;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setChangePaymentInstructions($value)
	{
		$this->ChangePaymentInstructions = $value;
	}
	/**
	 * @return AmountType
	 */
	function getInsuranceFee()
	{
		return $this->InsuranceFee;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setInsuranceFee($value)
	{
		$this->InsuranceFee = $value;
	}
	/**
	 * @return InsuranceOptionCodeType
	 */
	function getInsuranceOption()
	{
		return $this->InsuranceOption;
	}
	/**
	 * @return void
	 * @param InsuranceOptionCodeType $value 
	 */
	function setInsuranceOption($value)
	{
		$this->InsuranceOption = $value;
	}
	/**
	 * @return boolean
	 */
	function getInsuranceWanted()
	{
		return $this->InsuranceWanted;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setInsuranceWanted($value)
	{
		$this->InsuranceWanted = $value;
	}
	/**
	 * @return boolean
	 */
	function getPaymentEdited()
	{
		return $this->PaymentEdited;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPaymentEdited($value)
	{
		$this->PaymentEdited = $value;
	}
	/**
	 * @return string
	 */
	function getPaymentInstructions()
	{
		return $this->PaymentInstructions;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPaymentInstructions($value)
	{
		$this->PaymentInstructions = $value;
	}
	/**
	 * @return SalesTaxType
	 */
	function getSalesTax()
	{
		return $this->SalesTax;
	}
	/**
	 * @return void
	 * @param SalesTaxType $value 
	 */
	function setSalesTax($value)
	{
		$this->SalesTax = $value;
	}
	/**
	 * @return string
	 */
	function getShippingRateErrorMessage()
	{
		return $this->ShippingRateErrorMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShippingRateErrorMessage($value)
	{
		$this->ShippingRateErrorMessage = $value;
	}
	/**
	 * @return ShippingRateTypeCodeType
	 */
	function getShippingRateType()
	{
		return $this->ShippingRateType;
	}
	/**
	 * @return void
	 * @param ShippingRateTypeCodeType $value 
	 */
	function setShippingRateType($value)
	{
		$this->ShippingRateType = $value;
	}
	/**
	 * @return ShippingServiceOptionsType
	 * @param integer $index 
	 */
	function getShippingServiceOptions($index = null)
	{
		if ($index !== null) {
			return $this->ShippingServiceOptions[$index];
		} else {
			return $this->ShippingServiceOptions;
		}
	}
	/**
	 * @return void
	 * @param ShippingServiceOptionsType $value 
	 * @param  $index 
	 */
	function setShippingServiceOptions($value, $index = null)
	{
		if ($index !== null) {
			$this->ShippingServiceOptions[$index] = $value;
		} else {
			$this->ShippingServiceOptions = $value;
		}
	}
	/**
	 * @return void
	 * @param ShippingServiceOptionsType $value 
	 */
	function addShippingServiceOptions($value)
	{
		$this->ShippingServiceOptions[] = $value;
	}
	/**
	 * @return InternationalShippingServiceOptionsType
	 * @param integer $index 
	 */
	function getInternationalShippingServiceOption($index = null)
	{
		if ($index !== null) {
			return $this->InternationalShippingServiceOption[$index];
		} else {
			return $this->InternationalShippingServiceOption;
		}
	}
	/**
	 * @return void
	 * @param InternationalShippingServiceOptionsType $value 
	 * @param  $index 
	 */
	function setInternationalShippingServiceOption($value, $index = null)
	{
		if ($index !== null) {
			$this->InternationalShippingServiceOption[$index] = $value;
		} else {
			$this->InternationalShippingServiceOption = $value;
		}
	}
	/**
	 * @return void
	 * @param InternationalShippingServiceOptionsType $value 
	 */
	function addInternationalShippingServiceOption($value)
	{
		$this->InternationalShippingServiceOption[] = $value;
	}
	/**
	 * @return ShippingTypeCodeType
	 */
	function getShippingType()
	{
		return $this->ShippingType;
	}
	/**
	 * @return void
	 * @param ShippingTypeCodeType $value 
	 */
	function setShippingType($value)
	{
		$this->ShippingType = $value;
	}
	/**
	 * @return int
	 */
	function getSellingManagerSalesRecordNumber()
	{
		return $this->SellingManagerSalesRecordNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setSellingManagerSalesRecordNumber($value)
	{
		$this->SellingManagerSalesRecordNumber = $value;
	}
	/**
	 * @return boolean
	 */
	function getThirdPartyCheckout()
	{
		return $this->ThirdPartyCheckout;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setThirdPartyCheckout($value)
	{
		$this->ThirdPartyCheckout = $value;
	}
	/**
	 * @return TaxTableType
	 */
	function getTaxTable()
	{
		return $this->TaxTable;
	}
	/**
	 * @return void
	 * @param TaxTableType $value 
	 */
	function setTaxTable($value)
	{
		$this->TaxTable = $value;
	}
	/**
	 * @return boolean
	 */
	function getGetItFast()
	{
		return $this->GetItFast;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setGetItFast($value)
	{
		$this->GetItFast = $value;
	}
	/**
	 * @return token
	 */
	function getShippingServiceUsed()
	{
		return $this->ShippingServiceUsed;
	}
	/**
	 * @return void
	 * @param token $value 
	 */
	function setShippingServiceUsed($value)
	{
		$this->ShippingServiceUsed = $value;
	}
	/**
	 * @return AmountType
	 */
	function getDefaultShippingCost()
	{
		return $this->DefaultShippingCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setDefaultShippingCost($value)
	{
		$this->DefaultShippingCost = $value;
	}
	/**
	 * @return InsuranceDetailsType
	 */
	function getInsuranceDetails()
	{
		return $this->InsuranceDetails;
	}
	/**
	 * @return void
	 * @param InsuranceDetailsType $value 
	 */
	function setInsuranceDetails($value)
	{
		$this->InsuranceDetails = $value;
	}
	/**
	 * @return InsuranceDetailsType
	 */
	function getInternationalInsuranceDetails()
	{
		return $this->InternationalInsuranceDetails;
	}
	/**
	 * @return void
	 * @param InsuranceDetailsType $value 
	 */
	function setInternationalInsuranceDetails($value)
	{
		$this->InternationalInsuranceDetails = $value;
	}
	/**
	 * @return string
	 */
	function getShippingDiscountProfileID()
	{
		return $this->ShippingDiscountProfileID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShippingDiscountProfileID($value)
	{
		$this->ShippingDiscountProfileID = $value;
	}
	/**
	 * @return FlatShippingDiscountType
	 */
	function getFlatShippingDiscount()
	{
		return $this->FlatShippingDiscount;
	}
	/**
	 * @return void
	 * @param FlatShippingDiscountType $value 
	 */
	function setFlatShippingDiscount($value)
	{
		$this->FlatShippingDiscount = $value;
	}
	/**
	 * @return CalculatedShippingDiscountType
	 */
	function getCalculatedShippingDiscount()
	{
		return $this->CalculatedShippingDiscount;
	}
	/**
	 * @return void
	 * @param CalculatedShippingDiscountType $value 
	 */
	function setCalculatedShippingDiscount($value)
	{
		$this->CalculatedShippingDiscount = $value;
	}
	/**
	 * @return boolean
	 */
	function getPromotionalShippingDiscount()
	{
		return $this->PromotionalShippingDiscount;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPromotionalShippingDiscount($value)
	{
		$this->PromotionalShippingDiscount = $value;
	}
	/**
	 * @return string
	 */
	function getInternationalShippingDiscountProfileID()
	{
		return $this->InternationalShippingDiscountProfileID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setInternationalShippingDiscountProfileID($value)
	{
		$this->InternationalShippingDiscountProfileID = $value;
	}
	/**
	 * @return FlatShippingDiscountType
	 */
	function getInternationalFlatShippingDiscount()
	{
		return $this->InternationalFlatShippingDiscount;
	}
	/**
	 * @return void
	 * @param FlatShippingDiscountType $value 
	 */
	function setInternationalFlatShippingDiscount($value)
	{
		$this->InternationalFlatShippingDiscount = $value;
	}
	/**
	 * @return CalculatedShippingDiscountType
	 */
	function getInternationalCalculatedShippingDiscount()
	{
		return $this->InternationalCalculatedShippingDiscount;
	}
	/**
	 * @return void
	 * @param CalculatedShippingDiscountType $value 
	 */
	function setInternationalCalculatedShippingDiscount($value)
	{
		$this->InternationalCalculatedShippingDiscount = $value;
	}
	/**
	 * @return boolean
	 */
	function getInternationalPromotionalShippingDiscount()
	{
		return $this->InternationalPromotionalShippingDiscount;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setInternationalPromotionalShippingDiscount($value)
	{
		$this->InternationalPromotionalShippingDiscount = $value;
	}
	/**
	 * @return PromotionalShippingDiscountDetailsType
	 */
	function getPromotionalShippingDiscountDetails()
	{
		return $this->PromotionalShippingDiscountDetails;
	}
	/**
	 * @return void
	 * @param PromotionalShippingDiscountDetailsType $value 
	 */
	function setPromotionalShippingDiscountDetails($value)
	{
		$this->PromotionalShippingDiscountDetails = $value;
	}
	/**
	 * @return AmountType
	 */
	function getCODCost()
	{
		return $this->CODCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setCODCost($value)
	{
		$this->CODCost = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getExcludeShipToLocation($index = null)
	{
		if ($index !== null) {
			return $this->ExcludeShipToLocation[$index];
		} else {
			return $this->ExcludeShipToLocation;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setExcludeShipToLocation($value, $index = null)
	{
		if ($index !== null) {
			$this->ExcludeShipToLocation[$index] = $value;
		} else {
			$this->ExcludeShipToLocation = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addExcludeShipToLocation($value)
	{
		$this->ExcludeShipToLocation[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getSellerExcludeShipToLocationsPreference()
	{
		return $this->SellerExcludeShipToLocationsPreference;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSellerExcludeShipToLocationsPreference($value)
	{
		$this->SellerExcludeShipToLocationsPreference = $value;
	}
	/**
	 * @return ShipmentTrackingDetailsType
	 * @param integer $index 
	 */
	function getShipmentTrackingDetails($index = null)
	{
		if ($index !== null) {
			return $this->ShipmentTrackingDetails[$index];
		} else {
			return $this->ShipmentTrackingDetails;
		}
	}
	/**
	 * @return void
	 * @param ShipmentTrackingDetailsType $value 
	 * @param  $index 
	 */
	function setShipmentTrackingDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->ShipmentTrackingDetails[$index] = $value;
		} else {
			$this->ShipmentTrackingDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param ShipmentTrackingDetailsType $value 
	 */
	function addShipmentTrackingDetails($value)
	{
		$this->ShipmentTrackingDetails[] = $value;
	}
	/**
	 * @return RateTableDetailsType
	 */
	function getRateTableDetails()
	{
		return $this->RateTableDetails;
	}
	/**
	 * @return void
	 * @param RateTableDetailsType $value 
	 */
	function setRateTableDetails($value)
	{
		$this->RateTableDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AllowPaymentEdit' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ApplyShippingDiscount' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CalculatedShippingRate' =>
					array(
						'required' => false,
						'type' => 'CalculatedShippingRateType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ChangePaymentInstructions' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceFee' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceOption' =>
					array(
						'required' => false,
						'type' => 'InsuranceOptionCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceWanted' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentEdited' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentInstructions' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SalesTax' =>
					array(
						'required' => false,
						'type' => 'SalesTaxType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingRateErrorMessage' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingRateType' =>
					array(
						'required' => false,
						'type' => 'ShippingRateTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceOptions' =>
					array(
						'required' => false,
						'type' => 'ShippingServiceOptionsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'InternationalShippingServiceOption' =>
					array(
						'required' => false,
						'type' => 'InternationalShippingServiceOptionsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ShippingType' =>
					array(
						'required' => false,
						'type' => 'ShippingTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellingManagerSalesRecordNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ThirdPartyCheckout' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TaxTable' =>
					array(
						'required' => false,
						'type' => 'TaxTableType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'GetItFast' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceUsed' =>
					array(
						'required' => false,
						'type' => 'token',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DefaultShippingCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuranceDetails' =>
					array(
						'required' => false,
						'type' => 'InsuranceDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InternationalInsuranceDetails' =>
					array(
						'required' => false,
						'type' => 'InsuranceDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingDiscountProfileID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FlatShippingDiscount' =>
					array(
						'required' => false,
						'type' => 'FlatShippingDiscountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CalculatedShippingDiscount' =>
					array(
						'required' => false,
						'type' => 'CalculatedShippingDiscountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotionalShippingDiscount' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InternationalShippingDiscountProfileID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InternationalFlatShippingDiscount' =>
					array(
						'required' => false,
						'type' => 'FlatShippingDiscountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InternationalCalculatedShippingDiscount' =>
					array(
						'required' => false,
						'type' => 'CalculatedShippingDiscountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InternationalPromotionalShippingDiscount' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PromotionalShippingDiscountDetails' =>
					array(
						'required' => false,
						'type' => 'PromotionalShippingDiscountDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CODCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExcludeShipToLocation' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'SellerExcludeShipToLocationsPreference' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShipmentTrackingDetails' =>
					array(
						'required' => false,
						'type' => 'ShipmentTrackingDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'RateTableDetails' =>
					array(
						'required' => false,
						'type' => 'RateTableDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
