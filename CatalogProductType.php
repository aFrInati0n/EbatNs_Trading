<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'ReviewDetailsType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ProductStateCodeType.php';
require_once 'NameValueListArrayType.php';
require_once 'ExternalProductIDType.php';

/**
 * Information about an eBay catalog product. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CatalogProductType.html
 *
 */
class CatalogProductType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Title;
	/**
	 * @var anyURI
	 */
	protected $DetailsURL;
	/**
	 * @var anyURI
	 */
	protected $StockPhotoURL;
	/**
	 * @var boolean
	 */
	protected $DisplayStockPhotos;
	/**
	 * @var int
	 */
	protected $ItemCount;
	/**
	 * @var ExternalProductIDType
	 */
	protected $ExternalProductID;
	/**
	 * @var long
	 */
	protected $ProductReferenceID;
	/**
	 * @var int
	 */
	protected $AttributeSetID;
	/**
	 * @var NameValueListArrayType
	 */
	protected $ItemSpecifics;
	/**
	 * @var int
	 */
	protected $ReviewCount;
	/**
	 * @var ReviewDetailsType
	 */
	protected $ReviewDetails;
	/**
	 * @var ProductStateCodeType
	 */
	protected $ProductState;

	/**
	 * @return string
	 */
	function getTitle()
	{
		return $this->Title;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTitle($value)
	{
		$this->Title = $value;
	}
	/**
	 * @return anyURI
	 */
	function getDetailsURL()
	{
		return $this->DetailsURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setDetailsURL($value)
	{
		$this->DetailsURL = $value;
	}
	/**
	 * @return anyURI
	 */
	function getStockPhotoURL()
	{
		return $this->StockPhotoURL;
	}
	/**
	 * @return void
	 * @param anyURI $value 
	 */
	function setStockPhotoURL($value)
	{
		$this->StockPhotoURL = $value;
	}
	/**
	 * @return boolean
	 */
	function getDisplayStockPhotos()
	{
		return $this->DisplayStockPhotos;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setDisplayStockPhotos($value)
	{
		$this->DisplayStockPhotos = $value;
	}
	/**
	 * @return int
	 */
	function getItemCount()
	{
		return $this->ItemCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setItemCount($value)
	{
		$this->ItemCount = $value;
	}
	/**
	 * @return ExternalProductIDType
	 */
	function getExternalProductID()
	{
		return $this->ExternalProductID;
	}
	/**
	 * @return void
	 * @param ExternalProductIDType $value 
	 */
	function setExternalProductID($value)
	{
		$this->ExternalProductID = $value;
	}
	/**
	 * @return long
	 */
	function getProductReferenceID()
	{
		return $this->ProductReferenceID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setProductReferenceID($value)
	{
		$this->ProductReferenceID = $value;
	}
	/**
	 * @return int
	 */
	function getAttributeSetID()
	{
		return $this->AttributeSetID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setAttributeSetID($value)
	{
		$this->AttributeSetID = $value;
	}
	/**
	 * @return NameValueListArrayType
	 */
	function getItemSpecifics()
	{
		return $this->ItemSpecifics;
	}
	/**
	 * @return void
	 * @param NameValueListArrayType $value 
	 */
	function setItemSpecifics($value)
	{
		$this->ItemSpecifics = $value;
	}
	/**
	 * @return int
	 */
	function getReviewCount()
	{
		return $this->ReviewCount;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setReviewCount($value)
	{
		$this->ReviewCount = $value;
	}
	/**
	 * @return ReviewDetailsType
	 */
	function getReviewDetails()
	{
		return $this->ReviewDetails;
	}
	/**
	 * @return void
	 * @param ReviewDetailsType $value 
	 */
	function setReviewDetails($value)
	{
		$this->ReviewDetails = $value;
	}
	/**
	 * @return ProductStateCodeType
	 */
	function getProductState()
	{
		return $this->ProductState;
	}
	/**
	 * @return void
	 * @param ProductStateCodeType $value 
	 */
	function setProductState($value)
	{
		$this->ProductState = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CatalogProductType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Title' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailsURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'StockPhotoURL' =>
					array(
						'required' => false,
						'type' => 'anyURI',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DisplayStockPhotos' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExternalProductID' =>
					array(
						'required' => false,
						'type' => 'ExternalProductIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductReferenceID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AttributeSetID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemSpecifics' =>
					array(
						'required' => false,
						'type' => 'NameValueListArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReviewCount' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReviewDetails' =>
					array(
						'required' => false,
						'type' => 'ReviewDetailsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ProductState' =>
					array(
						'required' => false,
						'type' => 'ProductStateCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
