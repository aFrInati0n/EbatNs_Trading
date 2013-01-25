<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Retrieves data for a specific, active Want It Now post identified by a post 
 * ID.The response includes the following fields: CategoryID, Description, 
 * PostID,Site, StartTime, ResponseCount, and Title. Although 
 * GetWantItNowSearchResultsreturns most of this information, only GetWantItNowPost 
 * returns Description fora post. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetWantItNowPostRequestType.html
 *
 */
class GetWantItNowPostRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $PostID;

	/**
	 * @return ItemIDType
	 */
	function getPostID()
	{
		return $this->PostID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setPostID($value)
	{
		$this->PostID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetWantItNowPostRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'PostID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
