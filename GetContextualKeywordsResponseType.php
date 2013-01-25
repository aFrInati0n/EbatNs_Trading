<?php
// autogenerated file 15.11.2010 08:36
// $Id: $
// $Log: $
//
//
require_once 'ContextSearchAssetType.php';
require_once 'AbstractResponseType.php';

/**
 * Response to a GetContextualKeywords request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetContextualKeywordsResponseType.html
 *
 */
class GetContextualKeywordsResponseType extends AbstractResponseType
{
	/**
	 * @var ContextSearchAssetType
	 */
	protected $ContextSearchAsset;

	/**
	 * @return ContextSearchAssetType
	 * @param integer $index 
	 */
	function getContextSearchAsset($index = null)
	{
		if ($index !== null) {
			return $this->ContextSearchAsset[$index];
		} else {
			return $this->ContextSearchAsset;
		}
	}
	/**
	 * @return void
	 * @param ContextSearchAssetType $value 
	 * @param  $index 
	 */
	function setContextSearchAsset($value, $index = null)
	{
		if ($index !== null) {
			$this->ContextSearchAsset[$index] = $value;
		} else {
			$this->ContextSearchAsset = $value;
		}
	}
	/**
	 * @return void
	 * @param ContextSearchAssetType $value 
	 */
	function addContextSearchAsset($value)
	{
		$this->ContextSearchAsset[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetContextualKeywordsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ContextSearchAsset' =>
					array(
						'required' => false,
						'type' => 'ContextSearchAssetType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
