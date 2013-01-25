<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
//
require_once 'InventoryStatusType.php';
require_once 'AbstractRequestType.php';

/**
 * Enables a seller to change the price and quantity of a currently-active, 
 * fixed-price listing. Using ReviseInventoryStatus to modifydata qualifies as 
 * revising the listing.<br><br>Inputs are the item IDs or SKUs of the listings 
 * being revised,and the price and quantity that arebeing changed for each 
 * revision. Only applicable to fixed-price listings.<br><br>Changing the price or 
 * quantity of a currently-active, fixed-price listing does not reset the Best 
 * Match performance score.For Best Match information related to multi-variation 
 * listings, see the BestMatch information at the following topic:<a 
 * href="http://pages.ebay.com/sell/variation/">Multi-quantity Fixed Pricelistings 
 * with variations</a>.<br><br>As with all listing calls, the site you specify in 
 * the request URL(for SOAP) or the X-EBAY-API-SITEID HTTP header (for XML)should 
 * match the original listing's <b>Item.Site</b> value.In particular, this is a 
 * best practice when you submit new andrevised listings.<br><br><b>For Large 
 * Merchant Services users:</b> When you use ReviseInventoryStatus within a 
 * Merchant Data file,it must be enclosed within two BulkDataExchangeRequest 
 * tags.After release 637, a namespace is returned in the 
 * BulkDataExchangeResponseType(top level) of the response. The BulkDataExchange 
 * tags are not shown in the call input/output descriptions. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviseInventoryStatusRequestType.html
 *
 */
class ReviseInventoryStatusRequestType extends AbstractRequestType
{
	/**
	 * @var InventoryStatusType
	 */
	protected $InventoryStatus;

	/**
	 * @return InventoryStatusType
	 * @param integer $index 
	 */
	function getInventoryStatus($index = null)
	{
		if ($index !== null) {
			return $this->InventoryStatus[$index];
		} else {
			return $this->InventoryStatus;
		}
	}
	/**
	 * @return void
	 * @param InventoryStatusType $value 
	 * @param  $index 
	 */
	function setInventoryStatus($value, $index = null)
	{
		if ($index !== null) {
			$this->InventoryStatus[$index] = $value;
		} else {
			$this->InventoryStatus = $value;
		}
	}
	/**
	 * @return void
	 * @param InventoryStatusType $value 
	 */
	function addInventoryStatus($value)
	{
		$this->InventoryStatus[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviseInventoryStatusRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'InventoryStatus' =>
					array(
						'required' => false,
						'type' => 'InventoryStatusType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
