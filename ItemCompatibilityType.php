<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'NameValueListType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * All information corresponding to an individual compatibility by 
 * application.<br><br>Parts Compatibility is supported in limited Parts & 
 * Accessoriescategories for the eBay Motors (US) site (site ID 100) only. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ItemCompatibilityType.html
 *
 */
class ItemCompatibilityType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $Delete;
	/**
	 * @var NameValueListType
	 */
	protected $NameValueList;
	/**
	 * @var string
	 */
	protected $CompatibilityNotes;

	/**
	 * @return boolean
	 */
	function getDelete()
	{
		return $this->Delete;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDelete($value)
	{
		$this->Delete = $value;
	}
	/**
	 * @return NameValueListType
	 * @param integer $index 
	 */
	function getNameValueList($index = null)
	{
		if ($index !== null) {
			return $this->NameValueList[$index];
		} else {
			return $this->NameValueList;
		}
	}
	/**
	 * @return void
	 * @param NameValueListType $value 
	 * @param  $index 
	 */
	function setNameValueList($value, $index = null)
	{
		if ($index !== null) {
			$this->NameValueList[$index] = $value;
		} else {
			$this->NameValueList = $value;
		}
	}
	/**
	 * @return void
	 * @param NameValueListType $value 
	 */
	function addNameValueList($value)
	{
		$this->NameValueList[] = $value;
	}
	/**
	 * @return string
	 */
	function getCompatibilityNotes()
	{
		return $this->CompatibilityNotes;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCompatibilityNotes($value)
	{
		$this->CompatibilityNotes = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ItemCompatibilityType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Delete' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NameValueList' =>
					array(
						'required' => false,
						'type' => 'NameValueListType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'CompatibilityNotes' =>
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
