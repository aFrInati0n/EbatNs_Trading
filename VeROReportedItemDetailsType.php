<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'VeROReportedItemType.php';

/**
 * Container for a list of reported items. Can contain zero, one, or 
 * multipleVeROReportedItemType objects, each of which conveys the data for one 
 * item listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VeROReportedItemDetailsType.html
 *
 */
class VeROReportedItemDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var VeROReportedItemType
	 */
	protected $ReportedItem;

	/**
	 * @return VeROReportedItemType
	 * @param integer $index 
	 */
	function getReportedItem($index = null)
	{
		if ($index !== null) {
			return $this->ReportedItem[$index];
		} else {
			return $this->ReportedItem;
		}
	}
	/**
	 * @return void
	 * @param VeROReportedItemType $value 
	 * @param  $index 
	 */
	function setReportedItem($value, $index = null)
	{
		if ($index !== null) {
			$this->ReportedItem[$index] = $value;
		} else {
			$this->ReportedItem = $value;
		}
	}
	/**
	 * @return void
	 * @param VeROReportedItemType $value 
	 */
	function addReportedItem($value)
	{
		$this->ReportedItem[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VeROReportedItemDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ReportedItem' =>
					array(
						'required' => false,
						'type' => 'VeROReportedItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
