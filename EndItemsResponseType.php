<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'EndItemResponseContainerType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains a response of the resulting status of ending each item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EndItemsResponseType.html
 *
 */
class EndItemsResponseType extends AbstractResponseType
{
	/**
	 * @var EndItemResponseContainerType
	 */
	protected $EndItemResponseContainer;

	/**
	 * @return EndItemResponseContainerType
	 * @param integer $index 
	 */
	function getEndItemResponseContainer($index = null)
	{
		if ($index !== null) {
			return $this->EndItemResponseContainer[$index];
		} else {
			return $this->EndItemResponseContainer;
		}
	}
	/**
	 * @return void
	 * @param EndItemResponseContainerType $value 
	 * @param  $index 
	 */
	function setEndItemResponseContainer($value, $index = null)
	{
		if ($index !== null) {
			$this->EndItemResponseContainer[$index] = $value;
		} else {
			$this->EndItemResponseContainer = $value;
		}
	}
	/**
	 * @return void
	 * @param EndItemResponseContainerType $value 
	 */
	function addEndItemResponseContainer($value)
	{
		$this->EndItemResponseContainer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EndItemsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EndItemResponseContainer' =>
					array(
						'required' => false,
						'type' => 'EndItemResponseContainerType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
