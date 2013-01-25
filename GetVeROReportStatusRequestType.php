<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
//
require_once 'PaginationType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Retrieves status information about VeRO reported items you have submitted. You 
 * can receive the status of individual items you have reported or, by specifying 
 * VeROReportPacketID, you can retrieve status for all items reported with a given 
 * VeROReportItems request. You can also retrieve items that were reported during a 
 * given time period. If no input parameters are specified, status is returned on 
 * all items you have reported in the last two years.You must be a member of the 
 * Verified Rights Owner (VeRO) Program to use this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetVeROReportStatusRequestType.html
 *
 */
class GetVeROReportStatusRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $VeROReportPacketID;
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var boolean
	 */
	protected $IncludeReportedItemDetails;
	/**
	 * @var dateTime
	 */
	protected $TimeFrom;
	/**
	 * @var dateTime
	 */
	protected $TimeTo;
	/**
	 * @var PaginationType
	 */
	protected $Pagination;

	/**
	 * @return long
	 */
	function getVeROReportPacketID()
	{
		return $this->VeROReportPacketID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setVeROReportPacketID($value)
	{
		$this->VeROReportPacketID = $value;
	}
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
	 * @return boolean
	 */
	function getIncludeReportedItemDetails()
	{
		return $this->IncludeReportedItemDetails;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeReportedItemDetails($value)
	{
		$this->IncludeReportedItemDetails = $value;
	}
	/**
	 * @return dateTime
	 */
	function getTimeFrom()
	{
		return $this->TimeFrom;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setTimeFrom($value)
	{
		$this->TimeFrom = $value;
	}
	/**
	 * @return dateTime
	 */
	function getTimeTo()
	{
		return $this->TimeTo;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setTimeTo($value)
	{
		$this->TimeTo = $value;
	}
	/**
	 * @return PaginationType
	 */
	function getPagination()
	{
		return $this->Pagination;
	}
	/**
	 * @return void
	 * @param PaginationType $value 
	 */
	function setPagination($value)
	{
		$this->Pagination = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetVeROReportStatusRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'VeROReportPacketID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeReportedItemDetails' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TimeFrom' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TimeTo' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Pagination' =>
					array(
						'required' => false,
						'type' => 'PaginationType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
