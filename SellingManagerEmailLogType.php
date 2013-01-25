<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerEmailSentStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'SellingManagerEmailTypeCodeType.php';

/**
 * Contains list of Email log. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/SellingManagerEmailLogType.html
 *
 */
class SellingManagerEmailLogType extends EbatNs_ComplexType
{
	/**
	 * @var SellingManagerEmailTypeCodeType
	 */
	protected $EmailType;
	/**
	 * @var string
	 */
	protected $CustomEmailName;
	/**
	 * @var SellingManagerEmailSentStatusCodeType
	 */
	protected $EmailState;
	/**
	 * @var dateTime
	 */
	protected $EventTime;

	/**
	 * @return SellingManagerEmailTypeCodeType
	 */
	function getEmailType()
	{
		return $this->EmailType;
	}
	/**
	 * @return void
	 * @param SellingManagerEmailTypeCodeType $value 
	 */
	function setEmailType($value)
	{
		$this->EmailType = $value;
	}
	/**
	 * @return string
	 */
	function getCustomEmailName()
	{
		return $this->CustomEmailName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCustomEmailName($value)
	{
		$this->CustomEmailName = $value;
	}
	/**
	 * @return SellingManagerEmailSentStatusCodeType
	 */
	function getEmailState()
	{
		return $this->EmailState;
	}
	/**
	 * @return void
	 * @param SellingManagerEmailSentStatusCodeType $value 
	 */
	function setEmailState($value)
	{
		$this->EmailState = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEventTime()
	{
		return $this->EventTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEventTime($value)
	{
		$this->EventTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('SellingManagerEmailLogType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EmailType' =>
					array(
						'required' => false,
						'type' => 'SellingManagerEmailTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CustomEmailName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EmailState' =>
					array(
						'required' => false,
						'type' => 'SellingManagerEmailSentStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EventTime' =>
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
