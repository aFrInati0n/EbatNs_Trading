<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'TransactionPlatformCodeType.php';
require_once 'FeedbackInfoType.php';
require_once 'RefundArrayType.php';
require_once 'ShippingServiceOptionsType.php';
require_once 'ListingCheckoutRedirectPreferenceType.php';
require_once 'OrderType.php';
require_once 'ShippingDetailsType.php';
require_once 'VariationType.php';
require_once 'SellingManagerProductDetailsType.php';
require_once 'SellerDiscountsType.php';
require_once 'TaxesType.php';
require_once 'TransactionStatusType.php';
require_once 'SiteCodeType.php';
require_once 'UserType.php';
require_once 'PaidStatusCodeType.php';
require_once 'PaymentHoldDetailType.php';
require_once 'AmountType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ExternalTransactionType.php';
require_once 'ItemType.php';
require_once 'DepositTypeCodeType.php';

/**
 * This type defines the Transaction container, which consists of detailed 
 * informationabout a single line item in an order. The eBay system creates an 
 * order line itemwhen a buyer has committed to make a purchase in an auction or 
 * fixed-price listing.A multiple-quantity, fixed-priced listing can spawn one or 
 * more order line items.Auction listings and single-quantity, fixed-price listings 
 * can only spawn one orderline item.<br> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/TransactionType.html
 *
 */
class TransactionType extends EbatNs_ComplexType
{
	/**
	 * @var AmountType
	 */
	protected $AmountPaid;
	/**
	 * @var AmountType
	 */
	protected $AdjustmentAmount;
	/**
	 * @var AmountType
	 */
	protected $ConvertedAdjustmentAmount;
	/**
	 * @var UserType
	 */
	protected $Buyer;
	/**
	 * @var ShippingDetailsType
	 */
	protected $ShippingDetails;
	/**
	 * @var AmountType
	 */
	protected $ConvertedAmountPaid;
	/**
	 * @var AmountType
	 */
	protected $ConvertedTransactionPrice;
	/**
	 * @var dateTime
	 */
	protected $CreatedDate;
	/**
	 * @var DepositTypeCodeType
	 */
	protected $DepositType;
	/**
	 * @var ItemType
	 */
	protected $Item;
	/**
	 * @var int
	 */
	protected $QuantityPurchased;
	/**
	 * @var TransactionStatusType
	 */
	protected $Status;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var AmountType
	 */
	protected $TransactionPrice;
	/**
	 * @var boolean
	 */
	protected $BestOfferSale;
	/**
	 * @var decimal
	 */
	protected $VATPercent;
	/**
	 * @var ExternalTransactionType
	 */
	protected $ExternalTransaction;
	/**
	 * @var SellingManagerProductDetailsType
	 */
	protected $SellingManagerProductDetails;
	/**
	 * @var ShippingServiceOptionsType
	 */
	protected $ShippingServiceSelected;
	/**
	 * @var string
	 */
	protected $BuyerMessage;
	/**
	 * @var AmountType
	 */
	protected $DutchAuctionBid;
	/**
	 * @var PaidStatusCodeType
	 */
	protected $BuyerPaidStatus;
	/**
	 * @var PaidStatusCodeType
	 */
	protected $SellerPaidStatus;
	/**
	 * @var dateTime
	 */
	protected $PaidTime;
	/**
	 * @var dateTime
	 */
	protected $ShippedTime;
	/**
	 * @var AmountType
	 */
	protected $TotalPrice;
	/**
	 * @var FeedbackInfoType
	 */
	protected $FeedbackLeft;
	/**
	 * @var FeedbackInfoType
	 */
	protected $FeedbackReceived;
	/**
	 * @var OrderType
	 */
	protected $ContainingOrder;
	/**
	 * @var AmountType
	 */
	protected $FinalValueFee;
	/**
	 * @var ListingCheckoutRedirectPreferenceType
	 */
	protected $ListingCheckoutRedirectPreference;
	/**
	 * @var RefundArrayType
	 */
	protected $RefundArray;
	/**
	 * @var SiteCodeType
	 */
	protected $TransactionSiteID;
	/**
	 * @var TransactionPlatformCodeType
	 */
	protected $Platform;
	/**
	 * @var string
	 */
	protected $CartID;
	/**
	 * @var boolean
	 */
	protected $SellerContactBuyerByEmail;
	/**
	 * @var string
	 */
	protected $PayPalEmailAddress;
	/**
	 * @var string
	 */
	protected $PaisaPayID;
	/**
	 * @var AmountType
	 */
	protected $BuyerGuaranteePrice;
	/**
	 * @var VariationType
	 */
	protected $Variation;
	/**
	 * @var string
	 */
	protected $BuyerCheckoutMessage;
	/**
	 * @var TaxesType
	 */
	protected $Taxes;
	/**
	 * @var boolean
	 */
	protected $BundlePurchase;
	/**
	 * @var AmountType
	 */
	protected $ActualShippingCost;
	/**
	 * @var AmountType
	 */
	protected $ActualHandlingCost;
	/**
	 * @var string
	 */
	protected $OrderLineItemID;
	/**
	 * @var PaymentHoldDetailType
	 */
	protected $PaymentHoldDetails;
	/**
	 * @var SellerDiscountsType
	 */
	protected $SellerDiscounts;
	/**
	 * @var AmountType
	 */
	protected $RefundAmount;
	/**
	 * @var string
	 */
	protected $RefundStatus;
	/**
	 * @var string
	 */
	protected $CodiceFiscale;

	/**
	 * @return AmountType
	 */
	function getAmountPaid()
	{
		return $this->AmountPaid;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAmountPaid($value)
	{
		$this->AmountPaid = $value;
	}
	/**
	 * @return AmountType
	 */
	function getAdjustmentAmount()
	{
		return $this->AdjustmentAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setAdjustmentAmount($value)
	{
		$this->AdjustmentAmount = $value;
	}
	/**
	 * @return AmountType
	 */
	function getConvertedAdjustmentAmount()
	{
		return $this->ConvertedAdjustmentAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedAdjustmentAmount($value)
	{
		$this->ConvertedAdjustmentAmount = $value;
	}
	/**
	 * @return UserType
	 */
	function getBuyer()
	{
		return $this->Buyer;
	}
	/**
	 * @return void
	 * @param UserType $value 
	 */
	function setBuyer($value)
	{
		$this->Buyer = $value;
	}
	/**
	 * @return ShippingDetailsType
	 */
	function getShippingDetails()
	{
		return $this->ShippingDetails;
	}
	/**
	 * @return void
	 * @param ShippingDetailsType $value 
	 */
	function setShippingDetails($value)
	{
		$this->ShippingDetails = $value;
	}
	/**
	 * @return AmountType
	 */
	function getConvertedAmountPaid()
	{
		return $this->ConvertedAmountPaid;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedAmountPaid($value)
	{
		$this->ConvertedAmountPaid = $value;
	}
	/**
	 * @return AmountType
	 */
	function getConvertedTransactionPrice()
	{
		return $this->ConvertedTransactionPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setConvertedTransactionPrice($value)
	{
		$this->ConvertedTransactionPrice = $value;
	}
	/**
	 * @return dateTime
	 */
	function getCreatedDate()
	{
		return $this->CreatedDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setCreatedDate($value)
	{
		$this->CreatedDate = $value;
	}
	/**
	 * @return DepositTypeCodeType
	 */
	function getDepositType()
	{
		return $this->DepositType;
	}
	/**
	 * @return void
	 * @param DepositTypeCodeType $value 
	 */
	function setDepositType($value)
	{
		$this->DepositType = $value;
	}
	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
	}
	/**
	 * @return int
	 */
	function getQuantityPurchased()
	{
		return $this->QuantityPurchased;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setQuantityPurchased($value)
	{
		$this->QuantityPurchased = $value;
	}
	/**
	 * @return TransactionStatusType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param TransactionStatusType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTransactionPrice()
	{
		return $this->TransactionPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTransactionPrice($value)
	{
		$this->TransactionPrice = $value;
	}
	/**
	 * @return boolean
	 */
	function getBestOfferSale()
	{
		return $this->BestOfferSale;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBestOfferSale($value)
	{
		$this->BestOfferSale = $value;
	}
	/**
	 * @return decimal
	 */
	function getVATPercent()
	{
		return $this->VATPercent;
	}
	/**
	 * @return void
	 * @param decimal $value 
	 */
	function setVATPercent($value)
	{
		$this->VATPercent = $value;
	}
	/**
	 * @return ExternalTransactionType
	 * @param integer $index 
	 */
	function getExternalTransaction($index = null)
	{
		if ($index !== null) {
			return $this->ExternalTransaction[$index];
		} else {
			return $this->ExternalTransaction;
		}
	}
	/**
	 * @return void
	 * @param ExternalTransactionType $value 
	 * @param  $index 
	 */
	function setExternalTransaction($value, $index = null)
	{
		if ($index !== null) {
			$this->ExternalTransaction[$index] = $value;
		} else {
			$this->ExternalTransaction = $value;
		}
	}
	/**
	 * @return void
	 * @param ExternalTransactionType $value 
	 */
	function addExternalTransaction($value)
	{
		$this->ExternalTransaction[] = $value;
	}
	/**
	 * @return SellingManagerProductDetailsType
	 */
	function getSellingManagerProductDetails()
	{
		return $this->SellingManagerProductDetails;
	}
	/**
	 * @return void
	 * @param SellingManagerProductDetailsType $value 
	 */
	function setSellingManagerProductDetails($value)
	{
		$this->SellingManagerProductDetails = $value;
	}
	/**
	 * @return ShippingServiceOptionsType
	 */
	function getShippingServiceSelected()
	{
		return $this->ShippingServiceSelected;
	}
	/**
	 * @return void
	 * @param ShippingServiceOptionsType $value 
	 */
	function setShippingServiceSelected($value)
	{
		$this->ShippingServiceSelected = $value;
	}
	/**
	 * @return string
	 */
	function getBuyerMessage()
	{
		return $this->BuyerMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBuyerMessage($value)
	{
		$this->BuyerMessage = $value;
	}
	/**
	 * @return AmountType
	 */
	function getDutchAuctionBid()
	{
		return $this->DutchAuctionBid;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setDutchAuctionBid($value)
	{
		$this->DutchAuctionBid = $value;
	}
	/**
	 * @return PaidStatusCodeType
	 */
	function getBuyerPaidStatus()
	{
		return $this->BuyerPaidStatus;
	}
	/**
	 * @return void
	 * @param PaidStatusCodeType $value 
	 */
	function setBuyerPaidStatus($value)
	{
		$this->BuyerPaidStatus = $value;
	}
	/**
	 * @return PaidStatusCodeType
	 */
	function getSellerPaidStatus()
	{
		return $this->SellerPaidStatus;
	}
	/**
	 * @return void
	 * @param PaidStatusCodeType $value 
	 */
	function setSellerPaidStatus($value)
	{
		$this->SellerPaidStatus = $value;
	}
	/**
	 * @return dateTime
	 */
	function getPaidTime()
	{
		return $this->PaidTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setPaidTime($value)
	{
		$this->PaidTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getShippedTime()
	{
		return $this->ShippedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setShippedTime($value)
	{
		$this->ShippedTime = $value;
	}
	/**
	 * @return AmountType
	 */
	function getTotalPrice()
	{
		return $this->TotalPrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setTotalPrice($value)
	{
		$this->TotalPrice = $value;
	}
	/**
	 * @return FeedbackInfoType
	 */
	function getFeedbackLeft()
	{
		return $this->FeedbackLeft;
	}
	/**
	 * @return void
	 * @param FeedbackInfoType $value 
	 */
	function setFeedbackLeft($value)
	{
		$this->FeedbackLeft = $value;
	}
	/**
	 * @return FeedbackInfoType
	 */
	function getFeedbackReceived()
	{
		return $this->FeedbackReceived;
	}
	/**
	 * @return void
	 * @param FeedbackInfoType $value 
	 */
	function setFeedbackReceived($value)
	{
		$this->FeedbackReceived = $value;
	}
	/**
	 * @return OrderType
	 */
	function getContainingOrder()
	{
		return $this->ContainingOrder;
	}
	/**
	 * @return void
	 * @param OrderType $value 
	 */
	function setContainingOrder($value)
	{
		$this->ContainingOrder = $value;
	}
	/**
	 * @return AmountType
	 */
	function getFinalValueFee()
	{
		return $this->FinalValueFee;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setFinalValueFee($value)
	{
		$this->FinalValueFee = $value;
	}
	/**
	 * @return ListingCheckoutRedirectPreferenceType
	 */
	function getListingCheckoutRedirectPreference()
	{
		return $this->ListingCheckoutRedirectPreference;
	}
	/**
	 * @return void
	 * @param ListingCheckoutRedirectPreferenceType $value 
	 */
	function setListingCheckoutRedirectPreference($value)
	{
		$this->ListingCheckoutRedirectPreference = $value;
	}
	/**
	 * @return RefundArrayType
	 */
	function getRefundArray()
	{
		return $this->RefundArray;
	}
	/**
	 * @return void
	 * @param RefundArrayType $value 
	 */
	function setRefundArray($value)
	{
		$this->RefundArray = $value;
	}
	/**
	 * @return SiteCodeType
	 */
	function getTransactionSiteID()
	{
		return $this->TransactionSiteID;
	}
	/**
	 * @return void
	 * @param SiteCodeType $value 
	 */
	function setTransactionSiteID($value)
	{
		$this->TransactionSiteID = $value;
	}
	/**
	 * @return TransactionPlatformCodeType
	 */
	function getPlatform()
	{
		return $this->Platform;
	}
	/**
	 * @return void
	 * @param TransactionPlatformCodeType $value 
	 */
	function setPlatform($value)
	{
		$this->Platform = $value;
	}
	/**
	 * @return string
	 */
	function getCartID()
	{
		return $this->CartID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCartID($value)
	{
		$this->CartID = $value;
	}
	/**
	 * @return boolean
	 */
	function getSellerContactBuyerByEmail()
	{
		return $this->SellerContactBuyerByEmail;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSellerContactBuyerByEmail($value)
	{
		$this->SellerContactBuyerByEmail = $value;
	}
	/**
	 * @return string
	 */
	function getPayPalEmailAddress()
	{
		return $this->PayPalEmailAddress;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPayPalEmailAddress($value)
	{
		$this->PayPalEmailAddress = $value;
	}
	/**
	 * @return string
	 */
	function getPaisaPayID()
	{
		return $this->PaisaPayID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPaisaPayID($value)
	{
		$this->PaisaPayID = $value;
	}
	/**
	 * @return AmountType
	 */
	function getBuyerGuaranteePrice()
	{
		return $this->BuyerGuaranteePrice;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setBuyerGuaranteePrice($value)
	{
		$this->BuyerGuaranteePrice = $value;
	}
	/**
	 * @return VariationType
	 */
	function getVariation()
	{
		return $this->Variation;
	}
	/**
	 * @return void
	 * @param VariationType $value 
	 */
	function setVariation($value)
	{
		$this->Variation = $value;
	}
	/**
	 * @return string
	 */
	function getBuyerCheckoutMessage()
	{
		return $this->BuyerCheckoutMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setBuyerCheckoutMessage($value)
	{
		$this->BuyerCheckoutMessage = $value;
	}
	/**
	 * @return TaxesType
	 */
	function getTaxes()
	{
		return $this->Taxes;
	}
	/**
	 * @return void
	 * @param TaxesType $value 
	 */
	function setTaxes($value)
	{
		$this->Taxes = $value;
	}
	/**
	 * @return boolean
	 */
	function getBundlePurchase()
	{
		return $this->BundlePurchase;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBundlePurchase($value)
	{
		$this->BundlePurchase = $value;
	}
	/**
	 * @return AmountType
	 */
	function getActualShippingCost()
	{
		return $this->ActualShippingCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setActualShippingCost($value)
	{
		$this->ActualShippingCost = $value;
	}
	/**
	 * @return AmountType
	 */
	function getActualHandlingCost()
	{
		return $this->ActualHandlingCost;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setActualHandlingCost($value)
	{
		$this->ActualHandlingCost = $value;
	}
	/**
	 * @return string
	 */
	function getOrderLineItemID()
	{
		return $this->OrderLineItemID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setOrderLineItemID($value)
	{
		$this->OrderLineItemID = $value;
	}
	/**
	 * @return PaymentHoldDetailType
	 */
	function getPaymentHoldDetails()
	{
		return $this->PaymentHoldDetails;
	}
	/**
	 * @return void
	 * @param PaymentHoldDetailType $value 
	 */
	function setPaymentHoldDetails($value)
	{
		$this->PaymentHoldDetails = $value;
	}
	/**
	 * @return SellerDiscountsType
	 */
	function getSellerDiscounts()
	{
		return $this->SellerDiscounts;
	}
	/**
	 * @return void
	 * @param SellerDiscountsType $value 
	 */
	function setSellerDiscounts($value)
	{
		$this->SellerDiscounts = $value;
	}
	/**
	 * @return AmountType
	 */
	function getRefundAmount()
	{
		return $this->RefundAmount;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setRefundAmount($value)
	{
		$this->RefundAmount = $value;
	}
	/**
	 * @return string
	 */
	function getRefundStatus()
	{
		return $this->RefundStatus;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setRefundStatus($value)
	{
		$this->RefundStatus = $value;
	}
	/**
	 * @return string
	 */
	function getCodiceFiscale()
	{
		return $this->CodiceFiscale;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCodiceFiscale($value)
	{
		$this->CodiceFiscale = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('TransactionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AmountPaid' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AdjustmentAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConvertedAdjustmentAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Buyer' =>
					array(
						'required' => false,
						'type' => 'UserType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingDetails' =>
					array(
						'required' => false,
						'type' => 'ShippingDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConvertedAmountPaid' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ConvertedTransactionPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CreatedDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DepositType' =>
					array(
						'required' => false,
						'type' => 'DepositTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Item' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'QuantityPurchased' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'TransactionStatusType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BestOfferSale' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VATPercent' =>
					array(
						'required' => false,
						'type' => 'decimal',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExternalTransaction' =>
					array(
						'required' => false,
						'type' => 'ExternalTransactionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'SellingManagerProductDetails' =>
					array(
						'required' => false,
						'type' => 'SellingManagerProductDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceSelected' =>
					array(
						'required' => false,
						'type' => 'ShippingServiceOptionsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyerMessage' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DutchAuctionBid' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyerPaidStatus' =>
					array(
						'required' => false,
						'type' => 'PaidStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerPaidStatus' =>
					array(
						'required' => false,
						'type' => 'PaidStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaidTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippedTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalPrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackLeft' =>
					array(
						'required' => false,
						'type' => 'FeedbackInfoType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackReceived' =>
					array(
						'required' => false,
						'type' => 'FeedbackInfoType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ContainingOrder' =>
					array(
						'required' => false,
						'type' => 'OrderType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FinalValueFee' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ListingCheckoutRedirectPreference' =>
					array(
						'required' => false,
						'type' => 'ListingCheckoutRedirectPreferenceType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefundArray' =>
					array(
						'required' => false,
						'type' => 'RefundArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionSiteID' =>
					array(
						'required' => false,
						'type' => 'SiteCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Platform' =>
					array(
						'required' => false,
						'type' => 'TransactionPlatformCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CartID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerContactBuyerByEmail' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PayPalEmailAddress' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaisaPayID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyerGuaranteePrice' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Variation' =>
					array(
						'required' => false,
						'type' => 'VariationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BuyerCheckoutMessage' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Taxes' =>
					array(
						'required' => false,
						'type' => 'TaxesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BundlePurchase' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ActualShippingCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ActualHandlingCost' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OrderLineItemID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PaymentHoldDetails' =>
					array(
						'required' => false,
						'type' => 'PaymentHoldDetailType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerDiscounts' =>
					array(
						'required' => false,
						'type' => 'SellerDiscountsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefundAmount' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefundStatus' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CodiceFiscale' =>
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
