<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ItemBestOffersType.php';

/**
 * A collection of details about the best offers received for a specific item. 
 * Empty if there are no best offers. Includes the buyer and seller messages only 
 * ifthe ReturnAll detail level is used. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemBestOffersArrayType.html
 *
 */
class ItemBestOffersArrayType extends EbatNs_ComplexType
{
	/**
	 * @var ItemBestOffersType
	 */
	protected $ItemBestOffers;

	/**
	 * @return ItemBestOffersType
	 * @param integer $index 
	 */
	function getItemBestOffers($index = null)
	{
		if ($index !== null) {
			return $this->ItemBestOffers[$index];
		} else {
			return $this->ItemBestOffers;
		}
	}
	/**
	 * @return void
	 * @param ItemBestOffersType $value 
	 * @param  $index 
	 */
	function setItemBestOffers($value, $index = null)
	{
		if ($index !== null) {
			$this->ItemBestOffers[$index] = $value;
		} else {
			$this->ItemBestOffers = $value;
		}
	}
	/**
	 * @return void
	 * @param ItemBestOffersType $value 
	 */
	function addItemBestOffers($value)
	{
		$this->ItemBestOffers[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemBestOffersArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemBestOffers' =>
					array(
						'required' => false,
						'type' => 'ItemBestOffersType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
