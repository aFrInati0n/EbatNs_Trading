<?php
// autogenerated file 29.12.2011 14:05
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'BestOfferType.php';

/**
 * A collection of Best Offers. Empty if there are no best offers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/BestOfferArrayType.html
 *
 */
class BestOfferArrayType extends EbatNs_ComplexType
{
	/**
	 * @var BestOfferType
	 */
	protected $BestOffer;

	/**
	 * @return BestOfferType
	 * @param integer $index 
	 */
	function getBestOffer($index = null)
	{
		if ($index !== null) {
			return $this->BestOffer[$index];
		} else {
			return $this->BestOffer;
		}
	}
	/**
	 * @return void
	 * @param BestOfferType $value 
	 * @param  $index 
	 */
	function setBestOffer($value, $index = null)
	{
		if ($index !== null) {
			$this->BestOffer[$index] = $value;
		} else {
			$this->BestOffer = $value;
		}
	}
	/**
	 * @return void
	 * @param BestOfferType $value 
	 */
	function addBestOffer($value)
	{
		$this->BestOffer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('BestOfferArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'BestOffer' =>
					array(
						'required' => false,
						'type' => 'BestOfferType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
