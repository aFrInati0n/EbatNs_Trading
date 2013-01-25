<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves the latest eBay category hierarchy for a given eBay site.Information 
 * returned for each category includes the category nameand the unique ID for the 
 * category (unique within the eBay site for whichcategories are retrieved). A 
 * category ID is a required input when you list most items. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategoriesRequestType.html
 *
 */
class GetCategoriesRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategorySiteID;
	/**
	 * @var string
	 */
	protected $CategoryParent;
	/**
	 * @var int
	 */
	protected $LevelLimit;
	/**
	 * @var boolean
	 */
	protected $ViewAllNodes;

	/**
	 * @return string
	 */
	function getCategorySiteID()
	{
		return $this->CategorySiteID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCategorySiteID($value)
	{
		$this->CategorySiteID = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getCategoryParent($index = null)
	{
		if ($index !== null) {
			return $this->CategoryParent[$index];
		} else {
			return $this->CategoryParent;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setCategoryParent($value, $index = null)
	{
		if ($index !== null) {
			$this->CategoryParent[$index] = $value;
		} else {
			$this->CategoryParent = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addCategoryParent($value)
	{
		$this->CategoryParent[] = $value;
	}
	/**
	 * @return int
	 */
	function getLevelLimit()
	{
		return $this->LevelLimit;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setLevelLimit($value)
	{
		$this->LevelLimit = $value;
	}
	/**
	 * @return boolean
	 */
	function getViewAllNodes()
	{
		return $this->ViewAllNodes;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setViewAllNodes($value)
	{
		$this->ViewAllNodes = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategoriesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategorySiteID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategoryParent' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'LevelLimit' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ViewAllNodes' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
