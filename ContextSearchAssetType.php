<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'CategoryType.php';

/**
 * Score and rank for a keyword identified for a web page. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ContextSearchAssetType.html
 *
 */
class ContextSearchAssetType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Keyword;
	/**
	 * @var CategoryType
	 */
	protected $Category;
	/**
	 * @var int
	 */
	protected $Ranking;

	/**
	 * @return string
	 */
	function getKeyword()
	{
		return $this->Keyword;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setKeyword($value)
	{
		$this->Keyword = $value;
	}
	/**
	 * @return CategoryType
	 */
	function getCategory()
	{
		return $this->Category;
	}
	/**
	 * @return void
	 * @param CategoryType $value 
	 */
	function setCategory($value)
	{
		$this->Category = $value;
	}
	/**
	 * @return int
	 */
	function getRanking()
	{
		return $this->Ranking;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setRanking($value)
	{
		$this->Ranking = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ContextSearchAssetType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Keyword' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Category' =>
					array(
						'required' => false,
						'type' => 'CategoryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Ranking' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
