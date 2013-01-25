<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
//
require_once 'MessageStatusTypeCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Retrieves sales lead information for a lead generation listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetAdFormatLeadsRequestType.html
 *
 */
class GetAdFormatLeadsRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var MessageStatusTypeCodeType
	 */
	protected $Status;
	/**
	 * @var boolean
	 */
	protected $IncludeMemberMessages;
	/**
	 * @var dateTime
	 */
	protected $StartCreationTime;
	/**
	 * @var dateTime
	 */
	protected $EndCreationTime;

	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return MessageStatusTypeCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param MessageStatusTypeCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeMemberMessages()
	{
		return $this->IncludeMemberMessages;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeMemberMessages($value)
	{
		$this->IncludeMemberMessages = $value;
	}
	/**
	 * @return dateTime
	 */
	function getStartCreationTime()
	{
		return $this->StartCreationTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setStartCreationTime($value)
	{
		$this->StartCreationTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getEndCreationTime()
	{
		return $this->EndCreationTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndCreationTime($value)
	{
		$this->EndCreationTime = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetAdFormatLeadsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'MessageStatusTypeCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeMemberMessages' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StartCreationTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndCreationTime' =>
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
