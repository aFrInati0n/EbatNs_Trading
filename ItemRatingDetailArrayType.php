<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ItemRatingDetailsType.php';

/**
 * Container for a set of detailed seller ratings about an order line item.If a 
 * seller has detailed ratings, they are displayedin the Feedback Profile of the 
 * seller. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemRatingDetailArrayType.html
 *
 */
class ItemRatingDetailArrayType extends EbatNs_ComplexType
{
	/**
	 * @var ItemRatingDetailsType
	 */
	protected $ItemRatingDetails;

	/**
	 * @return ItemRatingDetailsType
	 * @param integer $index 
	 */
	function getItemRatingDetails($index = null)
	{
		if ($index !== null) {
			return $this->ItemRatingDetails[$index];
		} else {
			return $this->ItemRatingDetails;
		}
	}
	/**
	 * @return void
	 * @param ItemRatingDetailsType $value 
	 * @param  $index 
	 */
	function setItemRatingDetails($value, $index = null)
	{
		if ($index !== null) {
			$this->ItemRatingDetails[$index] = $value;
		} else {
			$this->ItemRatingDetails = $value;
		}
	}
	/**
	 * @return void
	 * @param ItemRatingDetailsType $value 
	 */
	function addItemRatingDetails($value)
	{
		$this->ItemRatingDetails[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemRatingDetailArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemRatingDetails' =>
					array(
						'required' => false,
						'type' => 'ItemRatingDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
