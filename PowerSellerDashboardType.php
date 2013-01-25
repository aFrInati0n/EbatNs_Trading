<?php
// autogenerated file 24.02.2011 11:36
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'SellerLevelCodeType.php';
require_once 'SellerDashboardAlertType.php';

/**
 * Provides information about your PowerSeller status. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/PowerSellerDashboardType.html
 *
 */
class PowerSellerDashboardType extends EbatNs_ComplexType
{
	/**
	 * @var SellerLevelCodeType
	 */
	protected $Level;
	/**
	 * @var SellerDashboardAlertType
	 */
	protected $Alert;

	/**
	 * @return SellerLevelCodeType
	 */
	function getLevel()
	{
		return $this->Level;
	}
	/**
	 * @return void
	 * @param SellerLevelCodeType $value 
	 */
	function setLevel($value)
	{
		$this->Level = $value;
	}
	/**
	 * @return SellerDashboardAlertType
	 * @param integer $index 
	 */
	function getAlert($index = null)
	{
		if ($index !== null) {
			return $this->Alert[$index];
		} else {
			return $this->Alert;
		}
	}
	/**
	 * @return void
	 * @param SellerDashboardAlertType $value 
	 * @param  $index 
	 */
	function setAlert($value, $index = null)
	{
		if ($index !== null) {
			$this->Alert[$index] = $value;
		} else {
			$this->Alert = $value;
		}
	}
	/**
	 * @return void
	 * @param SellerDashboardAlertType $value 
	 */
	function addAlert($value)
	{
		$this->Alert[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('PowerSellerDashboardType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Level' =>
					array(
						'required' => false,
						'type' => 'SellerLevelCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Alert' =>
					array(
						'required' => false,
						'type' => 'SellerDashboardAlertType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
