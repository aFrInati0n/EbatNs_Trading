<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'StoreColorType.php';
require_once 'StoreFontType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Store color scheme. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreColorSchemeType.html
 *
 */
class StoreColorSchemeType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $ColorSchemeID;
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var StoreColorType
	 */
	protected $Color;
	/**
	 * @var StoreFontType
	 */
	protected $Font;

	/**
	 * @return int
	 */
	function getColorSchemeID()
	{
		return $this->ColorSchemeID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setColorSchemeID($value)
	{
		$this->ColorSchemeID = $value;
	}
	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return StoreColorType
	 */
	function getColor()
	{
		return $this->Color;
	}
	/**
	 * @return void
	 * @param StoreColorType $value 
	 */
	function setColor($value)
	{
		$this->Color = $value;
	}
	/**
	 * @return StoreFontType
	 */
	function getFont()
	{
		return $this->Font;
	}
	/**
	 * @return void
	 * @param StoreFontType $value 
	 */
	function setFont($value)
	{
		$this->Font = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreColorSchemeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ColorSchemeID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Color' =>
					array(
						'required' => false,
						'type' => 'StoreColorType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Font' =>
					array(
						'required' => false,
						'type' => 'StoreFontType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
