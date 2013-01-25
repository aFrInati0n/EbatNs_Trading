<?php
// autogenerated file 15.11.2010 08:32
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerFolderDetailsType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns the status of a revise folder operation. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ReviseSellingManagerInventoryFolderResponseType.html
 *
 */
class ReviseSellingManagerInventoryFolderResponseType extends AbstractResponseType
{
	/**
	 * @var SellingManagerFolderDetailsType
	 */
	protected $Folder;

	/**
	 * @return SellingManagerFolderDetailsType
	 */
	function getFolder()
	{
		return $this->Folder;
	}
	/**
	 * @return void
	 * @param SellingManagerFolderDetailsType $value 
	 */
	function setFolder($value)
	{
		$this->Folder = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ReviseSellingManagerInventoryFolderResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Folder' =>
					array(
						'required' => false,
						'type' => 'SellingManagerFolderDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
