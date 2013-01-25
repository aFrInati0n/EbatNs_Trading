<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';

/**
 * Returns information about the user's My eBay watch list. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RemoveFromWatchListResponseType.html
 *
 */
class RemoveFromWatchListResponseType extends AbstractResponseType
{
	/**
	 * @var int
	 */
	protected $WatchListCount;
	/**
	 * @var int
	 */
	protected $WatchListMaximum;

	/**
	 * @return int
	 */
	function getWatchListCount()
	{
		return $this->WatchListCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWatchListCount($value)
	{
		$this->WatchListCount = $value;
	}
	/**
	 * @return int
	 */
	function getWatchListMaximum()
	{
		return $this->WatchListMaximum;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setWatchListMaximum($value)
	{
		$this->WatchListMaximum = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RemoveFromWatchListResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'WatchListCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WatchListMaximum' =>
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
