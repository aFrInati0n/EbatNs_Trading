<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'DisputeMessageSourceCodeType.php';

/**
 * Contains a message posted to a dispute. The message can be postedby the buyer, 
 * the seller, or an eBay representative. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeMessageType.html
 *
 */
class DisputeMessageType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $MessageID;
	/**
	 * @var DisputeMessageSourceCodeType
	 */
	protected $MessageSource;
	/**
	 * @var dateTime
	 */
	protected $MessageCreationTime;
	/**
	 * @var string
	 */
	protected $MessageText;

	/**
	 * @return int
	 */
	function getMessageID()
	{
		return $this->MessageID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMessageID($value)
	{
		$this->MessageID = $value;
	}
	/**
	 * @return DisputeMessageSourceCodeType
	 */
	function getMessageSource()
	{
		return $this->MessageSource;
	}
	/**
	 * @return void
	 * @param DisputeMessageSourceCodeType $value 
	 */
	function setMessageSource($value)
	{
		$this->MessageSource = $value;
	}
	/**
	 * @return dateTime
	 */
	function getMessageCreationTime()
	{
		return $this->MessageCreationTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setMessageCreationTime($value)
	{
		$this->MessageCreationTime = $value;
	}
	/**
	 * @return string
	 */
	function getMessageText()
	{
		return $this->MessageText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setMessageText($value)
	{
		$this->MessageText = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeMessageType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'MessageID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageSource' =>
					array(
						'required' => false,
						'type' => 'DisputeMessageSourceCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageCreationTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MessageText' =>
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
