<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
//
require_once 'StoreCustomListingHeaderLinkType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'StoreCustomListingHeaderDisplayCodeType.php';

/**
 * Configuration of a Store custom listing header. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/StoreCustomListingHeaderType.html
 *
 */
class StoreCustomListingHeaderType extends EbatNs_ComplexType
{
	/**
	 * @var StoreCustomListingHeaderDisplayCodeType
	 */
	protected $DisplayType;
	/**
	 * @var boolean
	 */
	protected $Logo;
	/**
	 * @var boolean
	 */
	protected $SearchBox;
	/**
	 * @var StoreCustomListingHeaderLinkType
	 */
	protected $LinkToInclude;
	/**
	 * @var boolean
	 */
	protected $AddToFavoriteStores;
	/**
	 * @var boolean
	 */
	protected $SignUpForStoreNewsletter;

	/**
	 * @return StoreCustomListingHeaderDisplayCodeType
	 */
	function getDisplayType()
	{
		return $this->DisplayType;
	}
	/**
	 * @return void
	 * @param StoreCustomListingHeaderDisplayCodeType $value 
	 */
	function setDisplayType($value)
	{
		$this->DisplayType = $value;
	}
	/**
	 * @return boolean
	 */
	function getLogo()
	{
		return $this->Logo;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setLogo($value)
	{
		$this->Logo = $value;
	}
	/**
	 * @return boolean
	 */
	function getSearchBox()
	{
		return $this->SearchBox;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSearchBox($value)
	{
		$this->SearchBox = $value;
	}
	/**
	 * @return StoreCustomListingHeaderLinkType
	 * @param integer $index 
	 */
	function getLinkToInclude($index = null)
	{
		if ($index !== null) {
			return $this->LinkToInclude[$index];
		} else {
			return $this->LinkToInclude;
		}
	}
	/**
	 * @return void
	 * @param StoreCustomListingHeaderLinkType $value 
	 * @param  $index 
	 */
	function setLinkToInclude($value, $index = null)
	{
		if ($index !== null) {
			$this->LinkToInclude[$index] = $value;
		} else {
			$this->LinkToInclude = $value;
		}
	}
	/**
	 * @return void
	 * @param StoreCustomListingHeaderLinkType $value 
	 */
	function addLinkToInclude($value)
	{
		$this->LinkToInclude[] = $value;
	}
	/**
	 * @return boolean
	 */
	function getAddToFavoriteStores()
	{
		return $this->AddToFavoriteStores;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAddToFavoriteStores($value)
	{
		$this->AddToFavoriteStores = $value;
	}
	/**
	 * @return boolean
	 */
	function getSignUpForStoreNewsletter()
	{
		return $this->SignUpForStoreNewsletter;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setSignUpForStoreNewsletter($value)
	{
		$this->SignUpForStoreNewsletter = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('StoreCustomListingHeaderType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DisplayType' =>
					array(
						'required' => false,
						'type' => 'StoreCustomListingHeaderDisplayCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Logo' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SearchBox' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'LinkToInclude' =>
					array(
						'required' => false,
						'type' => 'StoreCustomListingHeaderLinkType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'AddToFavoriteStores' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SignUpForStoreNewsletter' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
