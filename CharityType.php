<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
//
require_once 'CharityStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Identifies a Giving Works listing and benefiting nonprofit charity 
 * organization.Currently supported through the US and eBay Motors sites only. The 
 * Ad Format andMature Audiences categories are not supported.Not applicable for US 
 * eBay Motors, international, Real Estate, and Tickets. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CharityType.html
 *
 */
class CharityType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $CharityName;
	/**
	 * @var int
	 */
	protected $CharityNumber;
	/**
	 * @var float
	 */
	protected $DonationPercent;
	/**
	 * @var string
	 */
	protected $CharityID;
	/**
	 * @var string
	 */
	protected $Mission;
	/**
	 * @var string
	 */
	protected $LogoURL;
	/**
	 * @var CharityStatusCodeType
	 */
	protected $Status;
	/**
	 * @var boolean
	 */
	protected $CharityListing;

	/**
	 * @return string
	 */
	function getCharityName()
	{
		return $this->CharityName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCharityName($value)
	{
		$this->CharityName = $value;
	}
	/**
	 * @return int
	 */
	function getCharityNumber()
	{
		return $this->CharityNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setCharityNumber($value)
	{
		$this->CharityNumber = $value;
	}
	/**
	 * @return float
	 */
	function getDonationPercent()
	{
		return $this->DonationPercent;
	}
	/**
	 * @return void
	 * @param float $value 
	 */
	function setDonationPercent($value)
	{
		$this->DonationPercent = $value;
	}
	/**
	 * @return string
	 */
	function getCharityID()
	{
		return $this->CharityID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCharityID($value)
	{
		$this->CharityID = $value;
	}
	/**
	 * @return string
	 */
	function getMission()
	{
		return $this->Mission;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMission($value)
	{
		$this->Mission = $value;
	}
	/**
	 * @return string
	 */
	function getLogoURL()
	{
		return $this->LogoURL;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setLogoURL($value)
	{
		$this->LogoURL = $value;
	}
	/**
	 * @return CharityStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param CharityStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return boolean
	 */
	function getCharityListing()
	{
		return $this->CharityListing;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCharityListing($value)
	{
		$this->CharityListing = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CharityType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CharityName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CharityNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DonationPercent' =>
					array(
						'required' => false,
						'type' => 'float',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CharityID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Mission' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LogoURL' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'CharityStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CharityListing' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
