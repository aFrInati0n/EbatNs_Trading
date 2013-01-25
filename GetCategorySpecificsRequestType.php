<?php
// autogenerated file 18.03.2011 12:43
// $Id: $
// $Log: $
//
//
require_once 'CategoryItemSpecificsType.php';
require_once 'AbstractRequestType.php';

/**
 * Returns the most popular custom Item Specific names and values for eachleaf 
 * category you request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetCategorySpecificsRequestType.html
 *
 */
class GetCategorySpecificsRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $CategoryID;
	/**
	 * @var dateTime
	 */
	protected $LastUpdateTime;
	/**
	 * @var int
	 */
	protected $MaxNames;
	/**
	 * @var int
	 */
	protected $MaxValuesPerName;
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var CategoryItemSpecificsType
	 */
	protected $CategorySpecific;
	/**
	 * @var boolean
	 */
	protected $ExcludeRelationships;
	/**
	 * @var boolean
	 */
	protected $IncludeConfidence;
	/**
	 * @var boolean
	 */
	protected $CategorySpecificsFileInfo;

	/**
	 * @return string
	 * @param integer $index 
	 */
	function getCategoryID($index = null)
	{
		if ($index !== null) {
			return $this->CategoryID[$index];
		} else {
			return $this->CategoryID;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setCategoryID($value, $index = null)
	{
		if ($index !== null) {
			$this->CategoryID[$index] = $value;
		} else {
			$this->CategoryID = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addCategoryID($value)
	{
		$this->CategoryID[] = $value;
	}
	/**
	 * @return dateTime
	 */
	function getLastUpdateTime()
	{
		return $this->LastUpdateTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setLastUpdateTime($value)
	{
		$this->LastUpdateTime = $value;
	}
	/**
	 * @return int
	 */
	function getMaxNames()
	{
		return $this->MaxNames;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxNames($value)
	{
		$this->MaxNames = $value;
	}
	/**
	 * @return int
	 */
	function getMaxValuesPerName()
	{
		return $this->MaxValuesPerName;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxValuesPerName($value)
	{
		$this->MaxValuesPerName = $value;
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
	 * @return CategoryItemSpecificsType
	 * @param integer $index 
	 */
	function getCategorySpecific($index = null)
	{
		if ($index !== null) {
			return $this->CategorySpecific[$index];
		} else {
			return $this->CategorySpecific;
		}
	}
	/**
	 * @return void
	 * @param CategoryItemSpecificsType $value 
	 * @param  $index 
	 */
	function setCategorySpecific($value, $index = null)
	{
		if ($index !== null) {
			$this->CategorySpecific[$index] = $value;
		} else {
			$this->CategorySpecific = $value;
		}
	}
	/**
	 * @return void
	 * @param CategoryItemSpecificsType $value 
	 */
	function addCategorySpecific($value)
	{
		$this->CategorySpecific[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getExcludeRelationships()
	{
		return $this->ExcludeRelationships;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setExcludeRelationships($value)
	{
		$this->ExcludeRelationships = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeConfidence()
	{
		return $this->IncludeConfidence;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeConfidence($value)
	{
		$this->IncludeConfidence = $value;
	}
	/**
	 * @return boolean
	 */
	function getCategorySpecificsFileInfo()
	{
		return $this->CategorySpecificsFileInfo;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCategorySpecificsFileInfo($value)
	{
		$this->CategorySpecificsFileInfo = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetCategorySpecificsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'CategoryID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					),
					'LastUpdateTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxNames' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxValuesPerName' =>
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
					'CategorySpecific' =>
					array(
						'required' => false,
						'type' => 'CategoryItemSpecificsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ExcludeRelationships' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeConfidence' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CategorySpecificsFileInfo' =>
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
