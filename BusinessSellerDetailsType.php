<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'VATDetailsType.php';
require_once 'AddressType.php';

/**
 * Displays the seller's information (in a business card format) as part of the 
 * data returned in the GetItem call if the seller's SellerBusinessCodeType is set 
 * to 'Commercial'. Note that this option is only available for sites that have 
 * Business Seller options enabled. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BusinessSellerDetailsType.html
 *
 */
class BusinessSellerDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var AddressType
	 */
	protected $Address;
	/**
	 * @var string
	 */
	protected $Fax;
	/**
	 * @var string
	 */
	protected $Email;
	/**
	 * @var string
	 */
	protected $AdditionalContactInformation;
	/**
	 * @var string
	 */
	protected $TradeRegistrationNumber;
	/**
	 * @var boolean
	 */
	protected $LegalInvoice;
	/**
	 * @var string
	 */
	protected $TermsAndConditions;
	/**
	 * @var VATDetailsType
	 */
	protected $VATDetails;

	/**
	 * @return AddressType
	 */
	function getAddress()
	{
		return $this->Address;
	}
	/**
	 * @return void
	 * @param AddressType $value 
	 */
	function setAddress($value)
	{
		$this->Address = $value;
	}
	/**
	 * @return string
	 */
	function getFax()
	{
		return $this->Fax;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFax($value)
	{
		$this->Fax = $value;
	}
	/**
	 * @return string
	 */
	function getEmail()
	{
		return $this->Email;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setEmail($value)
	{
		$this->Email = $value;
	}
	/**
	 * @return string
	 */
	function getAdditionalContactInformation()
	{
		return $this->AdditionalContactInformation;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAdditionalContactInformation($value)
	{
		$this->AdditionalContactInformation = $value;
	}
	/**
	 * @return string
	 */
	function getTradeRegistrationNumber()
	{
		return $this->TradeRegistrationNumber;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTradeRegistrationNumber($value)
	{
		$this->TradeRegistrationNumber = $value;
	}
	/**
	 * @return boolean
	 */
	function getLegalInvoice()
	{
		return $this->LegalInvoice;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setLegalInvoice($value)
	{
		$this->LegalInvoice = $value;
	}
	/**
	 * @return string
	 */
	function getTermsAndConditions()
	{
		return $this->TermsAndConditions;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTermsAndConditions($value)
	{
		$this->TermsAndConditions = $value;
	}
	/**
	 * @return VATDetailsType
	 */
	function getVATDetails()
	{
		return $this->VATDetails;
	}
	/**
	 * @return void
	 * @param VATDetailsType $value 
	 */
	function setVATDetails($value)
	{
		$this->VATDetails = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BusinessSellerDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Address' =>
					array(
						'required' => false,
						'type' => 'AddressType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Fax' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Email' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AdditionalContactInformation' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TradeRegistrationNumber' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LegalInvoice' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TermsAndConditions' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VATDetails' =>
					array(
						'required' => false,
						'type' => 'VATDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
