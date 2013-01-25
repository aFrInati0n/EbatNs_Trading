<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'DisputeExplanationCodeType.php';
require_once 'DisputeReasonCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Enables a seller to create a new Unpaid Item dispute or to cancel a single line 
 * itemorder. Item Not Received and Significantly Not as Described buyer 
 * disputescan only be created through the Resolution Center, or through PayPal or 
 * other eBaysite where a Resolution Center is not available. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddDisputeRequestType.html
 *
 */
class AddDisputeRequestType extends AbstractRequestType
{
	/**
	 * @var DisputeExplanationCodeType
	 */
	protected $DisputeExplanation;
	/**
	 * @var DisputeReasonCodeType
	 */
	protected $DisputeReason;
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var string
	 */
	protected $OrderLineItemID;

	/**
	 * @return DisputeExplanationCodeType
	 */
	function getDisputeExplanation()
	{
		return $this->DisputeExplanation;
	}
	/**
	 * @return void
	 * @param DisputeExplanationCodeType $value 
	 */
	function setDisputeExplanation($value)
	{
		$this->DisputeExplanation = $value;
	}
	/**
	 * @return DisputeReasonCodeType
	 */
	function getDisputeReason()
	{
		return $this->DisputeReason;
	}
	/**
	 * @return void
	 * @param DisputeReasonCodeType $value 
	 */
	function setDisputeReason($value)
	{
		$this->DisputeReason = $value;
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
		parent::__construct('AddDisputeRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DisputeExplanation' =>
					array(
						'required' => false,
						'type' => 'DisputeExplanationCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisputeReason' =>
					array(
						'required' => false,
						'type' => 'DisputeReasonCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
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
