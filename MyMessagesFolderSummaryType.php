<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Summary details for a specified My Messages folder. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MyMessagesFolderSummaryType.html
 *
 */
class MyMessagesFolderSummaryType extends EbatNs_ComplexType
{
	/**
	 * @var long
	 */
	protected $FolderID;
	/**
	 * @var string
	 */
	protected $FolderName;
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
	 * @return long
	 */
	function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}
	/**
	 * @return string
	 */
	function getFolderName()
	{
		return $this->FolderName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFolderName($value)
	{
		$this->FolderName = $value;
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
		parent::__construct('MyMessagesFolderSummaryType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FolderID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FolderName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
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
