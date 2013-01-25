<?php
// autogenerated file 22.07.2011 08:50
// $Id: $
// $Log: $
//
//
require_once 'PaginationResultType.php';
require_once 'AbstractResponseType.php';
require_once 'DisputeFilterCountType.php';
require_once 'DisputeIDType.php';
require_once 'DisputeArrayType.php';

/**
 * Returns a list of disputes that involve the calling useras buyer or seller, in 
 * response to a GetUserDisputesRequest. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetUserDisputesResponseType.html
 *
 */
class GetUserDisputesResponseType extends AbstractResponseType
{
	/**
	 * @var DisputeIDType
	 */
	protected $StartingDisputeID;
	/**
	 * @var DisputeIDType
	 */
	protected $EndingDisputeID;
	/**
	 * @var DisputeArrayType
	 */
	protected $DisputeArray;
	/**
	 * @var int
	 */
	protected $ItemsPerPage;
	/**
	 * @var int
	 */
	protected $PageNumber;
	/**
	 * @var DisputeFilterCountType
	 */
	protected $DisputeFilterCount;
	/**
	 * @var PaginationResultType
	 */
	protected $PaginationResult;

	/**
	 * @return DisputeIDType
	 */
	function getStartingDisputeID()
	{
		return $this->StartingDisputeID;
	}
	/**
	 * @return void
	 * @param DisputeIDType $value 
	 */
	function setStartingDisputeID($value)
	{
		$this->StartingDisputeID = $value;
	}
	/**
	 * @return DisputeIDType
	 */
	function getEndingDisputeID()
	{
		return $this->EndingDisputeID;
	}
	/**
	 * @return void
	 * @param DisputeIDType $value 
	 */
	function setEndingDisputeID($value)
	{
		$this->EndingDisputeID = $value;
	}
	/**
	 * @return DisputeArrayType
	 */
	function getDisputeArray()
	{
		return $this->DisputeArray;
	}
	/**
	 * @return void
	 * @param DisputeArrayType $value 
	 */
	function setDisputeArray($value)
	{
		$this->DisputeArray = $value;
	}
	/**
	 * @return int
	 */
	function getItemsPerPage()
	{
		return $this->ItemsPerPage;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setItemsPerPage($value)
	{
		$this->ItemsPerPage = $value;
	}
	/**
	 * @return int
	 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
	/**
	 * @return DisputeFilterCountType
	 * @param integer $index 
	 */
	function getDisputeFilterCount($index = null)
	{
		if ($index !== null) {
			return $this->DisputeFilterCount[$index];
		} else {
			return $this->DisputeFilterCount;
		}
	}
	/**
	 * @return void
	 * @param DisputeFilterCountType $value 
	 * @param  $index 
	 */
	function setDisputeFilterCount($value, $index = null)
	{
		if ($index !== null) {
			$this->DisputeFilterCount[$index] = $value;
		} else {
			$this->DisputeFilterCount = $value;
		}
	}
	/**
	 * @return void
	 * @param DisputeFilterCountType $value 
	 */
	function addDisputeFilterCount($value)
	{
		$this->DisputeFilterCount[] = $value;
	}
	/**
	 * @return PaginationResultType
	 */
	function getPaginationResult()
	{
		return $this->PaginationResult;
	}
	/**
	 * @return void
	 * @param PaginationResultType $value 
	 */
	function setPaginationResult($value)
	{
		$this->PaginationResult = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetUserDisputesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'StartingDisputeID' =>
					array(
						'required' => false,
						'type' => 'DisputeIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndingDisputeID' =>
					array(
						'required' => false,
						'type' => 'DisputeIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisputeArray' =>
					array(
						'required' => false,
						'type' => 'DisputeArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemsPerPage' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PageNumber' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisputeFilterCount' =>
					array(
						'required' => false,
						'type' => 'DisputeFilterCountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'PaginationResult' =>
					array(
						'required' => false,
						'type' => 'PaginationResultType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
