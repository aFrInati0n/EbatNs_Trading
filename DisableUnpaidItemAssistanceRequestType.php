<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
//
require_once 'DisputeIDType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Enables a seller to disable the Unpaid Item Assistant mechanism for a specific 
 * orderline item. This call can be made regardless of whether an Unpaid Item 
 * dispute existsfor the order line item. If a dispute has already been created by 
 * the Unpaid ItemAssistant, the dispute is converted to a "manual" dispute for the 
 * seller to managelike any other manually-created dispute. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisableUnpaidItemAssistanceRequestType.html
 *
 */
class DisableUnpaidItemAssistanceRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var DisputeIDType
	 */
	protected $DisputeID;
	/**
	 * @var string
	 */
	protected $OrderLineItemID;

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
	 * @return DisputeIDType
	 */
	function getDisputeID()
	{
		return $this->DisputeID;
	}
	/**
	 * @return void
	 * @param DisputeIDType $value 
	 */
	function setDisputeID($value)
	{
		$this->DisputeID = $value;
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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisableUnpaidItemAssistanceRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisputeID' =>
					array(
						'required' => false,
						'type' => 'DisputeIDType',
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
					)
				));
	}
}
?>
