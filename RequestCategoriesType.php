<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * A set of parameters that control the retrieval of categories (not items)that 
 * match a search query. In GetSearchResults, at least one child elementmust be 
 * specified in order to retrieve matching categories. If empty ornot present, no 
 * matching category information is returned. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RequestCategoriesType.html
 *
 */
class RequestCategoriesType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $CategoriesOnly;
	/**
	 * @var int
	 */
	protected $MaxCategories;
	/**
	 * @var int
	 */
	protected $MaxSubcategories;
	/**
	 * @var int
	 */
	protected $Levels;
	/**
	 * @var boolean
	 */
	protected $DemandData;

	/**
	 * @return boolean
	 */
	function getCategoriesOnly()
	{
		return $this->CategoriesOnly;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCategoriesOnly($value)
	{
		$this->CategoriesOnly = $value;
	}
	/**
	 * @return int
	 */
	function getMaxCategories()
	{
		return $this->MaxCategories;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxCategories($value)
	{
		$this->MaxCategories = $value;
	}
	/**
	 * @return int
	 */
	function getMaxSubcategories()
	{
		return $this->MaxSubcategories;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxSubcategories($value)
	{
		$this->MaxSubcategories = $value;
	}
	/**
	 * @return int
	 */
	function getLevels()
	{
		return $this->Levels;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setLevels($value)
	{
		$this->Levels = $value;
	}
	/**
	 * @return boolean
	 */
	function getDemandData()
	{
		return $this->DemandData;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDemandData($value)
	{
		$this->DemandData = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RequestCategoriesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoriesOnly' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxCategories' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxSubcategories' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Levels' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DemandData' =>
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
