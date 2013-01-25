<?php
// autogenerated file 15.11.2010 08:29
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ContactHoursDetailsType.php';

/**
 * Contains extended contact information for an eBay user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExtendedContactDetailsType.html
 *
 */
class ExtendedContactDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var ContactHoursDetailsType
	 */
	protected $ContactHoursDetails;
	/**
	 * @var boolean
	 */
	protected $ClassifiedAdContactByEmailEnabled;
	/**
	 * @var string
	 */
	protected $PayPerLeadPhoneNumber;

	/**
	 * @return ContactHoursDetailsType
	 */
	function getContactHoursDetails()
	{
		return $this->ContactHoursDetails;
	}
	/**
	 * @return void
	 * @param ContactHoursDetailsType $value 
	 */
	function setContactHoursDetails($value)
	{
		$this->ContactHoursDetails = $value;
	}
	/**
	 * @return boolean
	 */
	function getClassifiedAdContactByEmailEnabled()
	{
		return $this->ClassifiedAdContactByEmailEnabled;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setClassifiedAdContactByEmailEnabled($value)
	{
		$this->ClassifiedAdContactByEmailEnabled = $value;
	}
	/**
	 * @return string
	 */
	function getPayPerLeadPhoneNumber()
	{
		return $this->PayPerLeadPhoneNumber;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPayPerLeadPhoneNumber($value)
	{
		$this->PayPerLeadPhoneNumber = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExtendedContactDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ContactHoursDetails' =>
					array(
						'required' => false,
						'type' => 'ContactHoursDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ClassifiedAdContactByEmailEnabled' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PayPerLeadPhoneNumber' =>
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
