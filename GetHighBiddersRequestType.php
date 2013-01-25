<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Retrieves a list of high bidders for the Dutch auction specified in the 
 * ItemIdproperty of the request. A seller specifies a unique item ID in this call 
 * todetermine which buyers are winning bidders and how many items each buyer 
 * canpurchase. Note that bidder information is anonymous to everyone except the 
 * bidder andthe seller during an active auction. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetHighBiddersRequestType.html
 *
 */
class GetHighBiddersRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;

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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetHighBiddersRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					)
				));
	}
}
?>
