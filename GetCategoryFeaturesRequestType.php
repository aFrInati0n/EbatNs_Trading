<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'FeatureIDCodeType.php';
require_once 'AbstractRequestType.php';

/**
 * Returns information about the features that are applicable to different 
 * categories,such as listing durations, shipping term requirements, and Best Offer 
 * support. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategoryFeaturesRequestType.html
 *
 */
class GetCategoryFeaturesRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var int
	 */
	protected $LevelLimit;
	/**
	 * @var boolean
	 */
	protected $ViewAllNodes;
	/**
	 * @var FeatureIDCodeType
	 */
	protected $FeatureID;
	/**
	 * @var boolean
	 */
	protected $AllFeaturesForCategory;

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
	 * @return FeatureIDCodeType
	 * @param integer $index 
	 */
	function getFeatureID($index = null)
	{
		if ($index !== null) {
			return $this->FeatureID[$index];
		} else {
			return $this->FeatureID;
		}
	}
	/**
	 * @return void
	 * @param FeatureIDCodeType $value 
	 * @param  $index 
	 */
	function setFeatureID($value, $index = null)
	{
		if ($index !== null) {
			$this->FeatureID[$index] = $value;
		} else {
			$this->FeatureID = $value;
		}
	}
	/**
	 * @return void
	 * @param FeatureIDCodeType $value 
	 */
	function addFeatureID($value)
	{
		$this->FeatureID[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getAllFeaturesForCategory()
	{
		return $this->AllFeaturesForCategory;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAllFeaturesForCategory($value)
	{
		$this->AllFeaturesForCategory = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategoryFeaturesRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					),
					'FeatureID' =>
					array(
						'required' => false,
						'type' => 'FeatureIDCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'AllFeaturesForCategory' =>
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
