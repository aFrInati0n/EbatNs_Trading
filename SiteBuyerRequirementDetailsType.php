<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'MinimumFeedbackScoreDetailsType.php';
require_once 'MaximumItemRequirementsDetailsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'VerifiedUserRequirementsDetailsType.php';
require_once 'MaximumBuyerPolicyViolationsDetailsType.php';
require_once 'MaximumUnpaidItemStrikesInfoDetailsType.php';

/**
 * New container for site-specific buyer requirements. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SiteBuyerRequirementDetailsType.html
 *
 */
class SiteBuyerRequirementDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $LinkedPayPalAccount;
	/**
	 * @var MaximumBuyerPolicyViolationsDetailsType
	 */
	protected $MaximumBuyerPolicyViolations;
	/**
	 * @var MaximumItemRequirementsDetailsType
	 */
	protected $MaximumItemRequirements;
	/**
	 * @var MaximumUnpaidItemStrikesInfoDetailsType
	 */
	protected $MaximumUnpaidItemStrikesInfo;
	/**
	 * @var MinimumFeedbackScoreDetailsType
	 */
	protected $MinimumFeedbackScore;
	/**
	 * @var boolean
	 */
	protected $ShipToRegistrationCountry;
	/**
	 * @var VerifiedUserRequirementsDetailsType
	 */
	protected $VerifiedUserRequirements;
	/**
	 * @var string
	 */
	protected $DetailVersion;
	/**
	 * @var dateTime
	 */
	protected $UpdateTime;

	/**
	 * @return boolean
	 */
	function getLinkedPayPalAccount()
	{
		return $this->LinkedPayPalAccount;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setLinkedPayPalAccount($value)
	{
		$this->LinkedPayPalAccount = $value;
	}
	/**
	 * @return MaximumBuyerPolicyViolationsDetailsType
	 */
	function getMaximumBuyerPolicyViolations()
	{
		return $this->MaximumBuyerPolicyViolations;
	}
	/**
	 * @return void
	 * @param MaximumBuyerPolicyViolationsDetailsType $value 
	 */
	function setMaximumBuyerPolicyViolations($value)
	{
		$this->MaximumBuyerPolicyViolations = $value;
	}
	/**
	 * @return MaximumItemRequirementsDetailsType
	 */
	function getMaximumItemRequirements()
	{
		return $this->MaximumItemRequirements;
	}
	/**
	 * @return void
	 * @param MaximumItemRequirementsDetailsType $value 
	 */
	function setMaximumItemRequirements($value)
	{
		$this->MaximumItemRequirements = $value;
	}
	/**
	 * @return MaximumUnpaidItemStrikesInfoDetailsType
	 */
	function getMaximumUnpaidItemStrikesInfo()
	{
		return $this->MaximumUnpaidItemStrikesInfo;
	}
	/**
	 * @return void
	 * @param MaximumUnpaidItemStrikesInfoDetailsType $value 
	 */
	function setMaximumUnpaidItemStrikesInfo($value)
	{
		$this->MaximumUnpaidItemStrikesInfo = $value;
	}
	/**
	 * @return MinimumFeedbackScoreDetailsType
	 */
	function getMinimumFeedbackScore()
	{
		return $this->MinimumFeedbackScore;
	}
	/**
	 * @return void
	 * @param MinimumFeedbackScoreDetailsType $value 
	 */
	function setMinimumFeedbackScore($value)
	{
		$this->MinimumFeedbackScore = $value;
	}
	/**
	 * @return boolean
	 */
	function getShipToRegistrationCountry()
	{
		return $this->ShipToRegistrationCountry;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShipToRegistrationCountry($value)
	{
		$this->ShipToRegistrationCountry = $value;
	}
	/**
	 * @return VerifiedUserRequirementsDetailsType
	 */
	function getVerifiedUserRequirements()
	{
		return $this->VerifiedUserRequirements;
	}
	/**
	 * @return void
	 * @param VerifiedUserRequirementsDetailsType $value 
	 */
	function setVerifiedUserRequirements($value)
	{
		$this->VerifiedUserRequirements = $value;
	}
	/**
	 * @return string
	 */
	function getDetailVersion()
	{
		return $this->DetailVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDetailVersion($value)
	{
		$this->DetailVersion = $value;
	}
	/**
	 * @return dateTime
	 */
	function getUpdateTime()
	{
		return $this->UpdateTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setUpdateTime($value)
	{
		$this->UpdateTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SiteBuyerRequirementDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'LinkedPayPalAccount' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaximumBuyerPolicyViolations' =>
					array(
						'required' => false,
						'type' => 'MaximumBuyerPolicyViolationsDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaximumItemRequirements' =>
					array(
						'required' => false,
						'type' => 'MaximumItemRequirementsDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaximumUnpaidItemStrikesInfo' =>
					array(
						'required' => false,
						'type' => 'MaximumUnpaidItemStrikesInfoDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MinimumFeedbackScore' =>
					array(
						'required' => false,
						'type' => 'MinimumFeedbackScoreDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShipToRegistrationCountry' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'VerifiedUserRequirements' =>
					array(
						'required' => false,
						'type' => 'VerifiedUserRequirementsDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UpdateTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
