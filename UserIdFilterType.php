<?php
// autogenerated file 18.03.2011 12:48
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * One of the data filters used when searching for items usingGetSearchResults. 
 * Allows filtering based on the eBay user IDs ofsellers. May be used to limit the 
 * list of found items to just thoselisted by one or more specified sellers. Or may 
 * be used to limit thelist to those items NOT listed by specified excluded 
 * sellers. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UserIdFilterType.html
 *
 */
class UserIdFilterType extends EbatNs_ComplexType
{
	/**
	 * @var UserIDType
	 */
	protected $ExcludeSellers;
	/**
	 * @var UserIDType
	 */
	protected $IncludeSellers;

	/**
	 * @return UserIDType
	 * @param integer $index 
	 */
	function getExcludeSellers($index = null)
	{
		if ($index !== null) {
			return $this->ExcludeSellers[$index];
		} else {
			return $this->ExcludeSellers;
		}
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 * @param  $index 
	 */
	function setExcludeSellers($value, $index = null)
	{
		if ($index !== null) {
			$this->ExcludeSellers[$index] = $value;
		} else {
			$this->ExcludeSellers = $value;
		}
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function addExcludeSellers($value)
	{
		$this->ExcludeSellers[] = $value;
	}
	/**
	 * @return UserIDType
	 * @param integer $index 
	 */
	function getIncludeSellers($index = null)
	{
		if ($index !== null) {
			return $this->IncludeSellers[$index];
		} else {
			return $this->IncludeSellers;
		}
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 * @param  $index 
	 */
	function setIncludeSellers($value, $index = null)
	{
		if ($index !== null) {
			$this->IncludeSellers[$index] = $value;
		} else {
			$this->IncludeSellers = $value;
		}
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function addIncludeSellers($value)
	{
		$this->IncludeSellers[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UserIdFilterType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ExcludeSellers' =>
					array(
						'required' => false,
						'type' => 'UserIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..100'
					),
					'IncludeSellers' =>
					array(
						'required' => false,
						'type' => 'UserIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..100'
					)
				));
	}
}
?>
