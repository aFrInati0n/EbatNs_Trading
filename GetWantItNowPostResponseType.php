<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
//
require_once 'WantItNowPostType.php';
require_once 'AbstractResponseType.php';

/**
 * Contains the Want It Now post data returned by the call. The data for 
 * thespecified post listing is returned in a WantItNowPostType object. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetWantItNowPostResponseType.html
 *
 */
class GetWantItNowPostResponseType extends AbstractResponseType
{
	/**
	 * @var WantItNowPostType
	 */
	protected $WantItNowPost;

	/**
	 * @return WantItNowPostType
	 */
	function getWantItNowPost()
	{
		return $this->WantItNowPost;
	}
	/**
	 * @return void
	 * @param WantItNowPostType $value 
	 */
	function setWantItNowPost($value)
	{
		$this->WantItNowPost = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetWantItNowPostResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'WantItNowPost' =>
					array(
						'required' => false,
						'type' => 'WantItNowPostType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
