<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'MyMessagesFolderSummaryType.php';

/**
 * Summary data for a given user's alerts and messages.This includes the numbers of 
 * new alerts and messages,unresolved alerts, flagged messages, and total alertsand 
 * messages. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyMessagesSummaryType.html
 *
 */
class MyMessagesSummaryType extends EbatNs_ComplexType
{
	/**
	 * @var MyMessagesFolderSummaryType
	 */
	protected $FolderSummary;
	/**
	 * @var int
	 */
	protected $NewAlertCount;
	/**
	 * @var int
	 */
	protected $NewMessageCount;
	/**
	 * @var int
	 */
	protected $UnresolvedAlertCount;
	/**
	 * @var int
	 */
	protected $FlaggedMessageCount;
	/**
	 * @var int
	 */
	protected $TotalAlertCount;
	/**
	 * @var int
	 */
	protected $TotalMessageCount;
	/**
	 * @var int
	 */
	protected $NewHighPriorityCount;
	/**
	 * @var int
	 */
	protected $TotalHighPriorityCount;

	/**
	 * @return MyMessagesFolderSummaryType
	 * @param integer $index 
	 */
	function getFolderSummary($index = null)
	{
		if ($index !== null) {
			return $this->FolderSummary[$index];
		} else {
			return $this->FolderSummary;
		}
	}
	/**
	 * @return void
	 * @param MyMessagesFolderSummaryType $value 
	 * @param  $index 
	 */
	function setFolderSummary($value, $index = null)
	{
		if ($index !== null) {
			$this->FolderSummary[$index] = $value;
		} else {
			$this->FolderSummary = $value;
		}
	}
	/**
	 * @return void
	 * @param MyMessagesFolderSummaryType $value 
	 */
	function addFolderSummary($value)
	{
		$this->FolderSummary[] = $value;
	}
	/**
	 * @return int
	 */
	function getNewAlertCount()
	{
		return $this->NewAlertCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setNewAlertCount($value)
	{
		$this->NewAlertCount = $value;
	}
	/**
	 * @return int
	 */
	function getNewMessageCount()
	{
		return $this->NewMessageCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setNewMessageCount($value)
	{
		$this->NewMessageCount = $value;
	}
	/**
	 * @return int
	 */
	function getUnresolvedAlertCount()
	{
		return $this->UnresolvedAlertCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setUnresolvedAlertCount($value)
	{
		$this->UnresolvedAlertCount = $value;
	}
	/**
	 * @return int
	 */
	function getFlaggedMessageCount()
	{
		return $this->FlaggedMessageCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setFlaggedMessageCount($value)
	{
		$this->FlaggedMessageCount = $value;
	}
	/**
	 * @return int
	 */
	function getTotalAlertCount()
	{
		return $this->TotalAlertCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalAlertCount($value)
	{
		$this->TotalAlertCount = $value;
	}
	/**
	 * @return int
	 */
	function getTotalMessageCount()
	{
		return $this->TotalMessageCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalMessageCount($value)
	{
		$this->TotalMessageCount = $value;
	}
	/**
	 * @return int
	 */
	function getNewHighPriorityCount()
	{
		return $this->NewHighPriorityCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setNewHighPriorityCount($value)
	{
		$this->NewHighPriorityCount = $value;
	}
	/**
	 * @return int
	 */
	function getTotalHighPriorityCount()
	{
		return $this->TotalHighPriorityCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setTotalHighPriorityCount($value)
	{
		$this->TotalHighPriorityCount = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MyMessagesSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FolderSummary' =>
					array(
						'required' => false,
						'type' => 'MyMessagesFolderSummaryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'NewAlertCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NewMessageCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UnresolvedAlertCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FlaggedMessageCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalAlertCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalMessageCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NewHighPriorityCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TotalHighPriorityCount' =>
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
