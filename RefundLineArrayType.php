<?php
// autogenerated file 10.09.2012 12:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'RefundLineType.php';

/**
 * Container consisting of one or more RefundLine fields. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RefundLineArrayType.html
 *
 */
class RefundLineArrayType extends EbatNs_ComplexType
{
	/**
	 * @var RefundLineType
	 */
	protected $RefundLine;

	/**
	 * @return RefundLineType
	 * @param integer $index 
	 */
	function getRefundLine($index = null)
	{
		if ($index !== null) {
			return $this->RefundLine[$index];
		} else {
			return $this->RefundLine;
		}
	}
	/**
	 * @return void
	 * @param RefundLineType $value 
	 * @param  $index 
	 */
	function setRefundLine($value, $index = null)
	{
		if ($index !== null) {
			$this->RefundLine[$index] = $value;
		} else {
			$this->RefundLine = $value;
		}
	}
	/**
	 * @return void
	 * @param RefundLineType $value 
	 */
	function addRefundLine($value)
	{
		$this->RefundLine[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RefundLineArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'RefundLine' =>
					array(
						'required' => false,
						'type' => 'RefundLineType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
