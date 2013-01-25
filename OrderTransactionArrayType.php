<?php
// autogenerated file 15.11.2010 08:29
// $Id: $
// $Log: $
//
//
require_once 'OrderTransactionType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Contains a list of orders, transactions, or both, each of OrderTransactionType. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/OrderTransactionArrayType.html
 *
 */
class OrderTransactionArrayType extends EbatNs_ComplexType
{
	/**
	 * @var OrderTransactionType
	 */
	protected $OrderTransaction;

	/**
	 * @return OrderTransactionType
	 * @param integer $index 
	 */
	function getOrderTransaction($index = null)
	{
		if ($index !== null) {
			return $this->OrderTransaction[$index];
		} else {
			return $this->OrderTransaction;
		}
	}
	/**
	 * @return void
	 * @param OrderTransactionType $value 
	 * @param  $index 
	 */
	function setOrderTransaction($value, $index = null)
	{
		if ($index !== null) {
			$this->OrderTransaction[$index] = $value;
		} else {
			$this->OrderTransaction = $value;
		}
	}
	/**
	 * @return void
	 * @param OrderTransactionType $value 
	 */
	function addOrderTransaction($value)
	{
		$this->OrderTransaction[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('OrderTransactionArrayType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'OrderTransaction' =>
					array(
						'required' => false,
						'type' => 'OrderTransactionType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
