<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'NameValueListArrayType.php';

/**
 * Defines details about recommended names and values for custom Item Specifics. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CategoryItemSpecificsType.html
 *
 */
class CategoryItemSpecificsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var NameValueListArrayType
	 */
	protected $ItemSpecifics;

	/**
	 * @return string
	 */
	function getCategoryID()
	{
		return $this->CategoryID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategoryID($value)
	{
		$this->CategoryID = $value;
	}
	/**
	 * @return NameValueListArrayType
	 */
	function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}
	/**
	 * @return void
	 * @param NameValueListArrayType $value 
	 */
	function setItemSpecifics($value)
	{
		$this->ItemSpecifics = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CategoryItemSpecificsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemSpecifics' =>
					array(
						'required' => false,
						'type' => 'NameValueListArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
