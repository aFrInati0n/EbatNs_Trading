<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Adds a new product folder to a user's Selling Manager account.This call is 
 * subject to change without notice; the deprecation process isinapplicable to this 
 * call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddSellingManagerInventoryFolderRequestType.html
 *
 */
class AddSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $FolderName;
	/**
	 * @var long
	 */
	protected $ParentFolderID;
	/**
	 * @var string
	 */
	protected $Comment;

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
	 * @return long
	 */
	function getParentFolderID()
	{
		return $this->ParentFolderID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setParentFolderID($value)
	{
		$this->ParentFolderID = $value;
	}
	/**
	 * @return string
	 */
	function getComment()
	{
		return $this->Comment;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setComment($value)
	{
		$this->Comment = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddSellingManagerInventoryFolderRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FolderName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ParentFolderID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Comment' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
