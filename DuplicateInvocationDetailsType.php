<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'InvocationStatusType.php';
require_once 'UUIDType.php';

/**
 * Contains properties that provide information on duplicate uses of InvocationIDs. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DuplicateInvocationDetailsType.html
 *
 */
class DuplicateInvocationDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var UUIDType
	 */
	protected $DuplicateInvocationID;
	/**
	 * @var InvocationStatusType
	 */
	protected $Status;
	/**
	 * @var string
	 */
	protected $InvocationTrackingID;

	/**
	 * @return UUIDType
	 */
	function getDuplicateInvocationID()
	{
		return $this->DuplicateInvocationID;
	}
	/**
	 * @return void
	 * @param UUIDType $value 
	 */
	function setDuplicateInvocationID($value)
	{
		$this->DuplicateInvocationID = $value;
	}
	/**
	 * @return InvocationStatusType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param InvocationStatusType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return string
	 */
	function getInvocationTrackingID()
	{
		return $this->InvocationTrackingID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setInvocationTrackingID($value)
	{
		$this->InvocationTrackingID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DuplicateInvocationDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DuplicateInvocationID' =>
					array(
						'required' => false,
						'type' => 'UUIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'InvocationStatusType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InvocationTrackingID' =>
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
