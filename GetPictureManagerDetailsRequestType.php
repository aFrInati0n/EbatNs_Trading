<?php
// autogenerated file 29.12.2011 14:39
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';
require_once 'PictureManagerDetailLevelCodeType.php';

/**
 * <table><tr><td class="notebox"><b>Note:</b> This call will soon be deprecated. 
 * Use accordingly.</td></tr></table><br>Requests information about folders or 
 * pictures in a Picture Manager accountor the account settings. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPictureManagerDetailsRequestType.html
 *
 */
class GetPictureManagerDetailsRequestType extends AbstractRequestType
{
	/**
	 * @var int
	 */
	protected $FolderID;
	/**
	 * @var string
	 */
	protected $PictureURL;
	/**
	 * @var PictureManagerDetailLevelCodeType
	 */
	protected $PictureManagerDetailLevel;

	/**
	 * @return int
	 */
	function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}
	/**
	 * @return string
	 */
	function getPictureURL()
	{
		return $this->PictureURL;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPictureURL($value)
	{
		$this->PictureURL = $value;
	}
	/**
	 * @return PictureManagerDetailLevelCodeType
	 */
	function getPictureManagerDetailLevel()
	{
		return $this->PictureManagerDetailLevel;
	}
	/**
	 * @return void
	 * @param PictureManagerDetailLevelCodeType $value 
	 */
	function setPictureManagerDetailLevel($value)
	{
		$this->PictureManagerDetailLevel = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPictureManagerDetailsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FolderID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureURL' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PictureManagerDetailLevel' =>
					array(
						'required' => false,
						'type' => 'PictureManagerDetailLevelCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
