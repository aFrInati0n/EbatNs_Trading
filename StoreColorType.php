<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Store color set. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreColorType.html
 *
 */
class StoreColorType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Primary;
	/**
	 * @var string
	 */
	protected $Secondary;
	/**
	 * @var string
	 */
	protected $Accent;

	/**
	 * @return string
	 */
	function getPrimary()
	{
		return $this->Primary;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPrimary($value)
	{
		$this->Primary = $value;
	}
	/**
	 * @return string
	 */
	function getSecondary()
	{
		return $this->Secondary;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSecondary($value)
	{
		$this->Secondary = $value;
	}
	/**
	 * @return string
	 */
	function getAccent()
	{
		return $this->Accent;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setAccent($value)
	{
		$this->Accent = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreColorType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Primary' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Secondary' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Accent' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
