<?php
// autogenerated file 22.07.2011 09:21
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Moves a Selling Manager inventory folder.<br><br>This call is subject to change 
 * without notice; the deprecation process isinapplicable to this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/MoveSellingManagerInventoryFolderRequestType.html
 *
 */
class MoveSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $FolderID;
	/**
	 * @var long
	 */
	protected $NewParentFolderID;

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
	 * @return long
	 */
	function getNewParentFolderID()
	{
		return $this->NewParentFolderID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setNewParentFolderID($value)
	{
		$this->NewParentFolderID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('MoveSellingManagerInventoryFolderRequestType', 'urn:ebay:apis:eBLBaseComponents');
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
					'NewParentFolderID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
