<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * [Selling] The number of policy violation(s) that are allowed by the site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/NumberOfPolicyViolationsDetailsType.html
 *
 */
class NumberOfPolicyViolationsDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $Count;

	/**
	 * @return int
	 * @param integer $index 
	 */
	function getCount($index = null)
	{
		if ($index !== null) {
			return $this->Count[$index];
		} else {
			return $this->Count;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 * @param  $index 
	 */
	function setCount($value, $index = null)
	{
		if ($index !== null) {
			$this->Count[$index] = $value;
		} else {
			$this->Count = $value;
		}
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function addCount($value)
	{
		$this->Count[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('NumberOfPolicyViolationsDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Count' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
