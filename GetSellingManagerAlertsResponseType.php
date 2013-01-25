<?php
// autogenerated file 15.11.2010 08:29
// $Id: $
// $Log: $
//
//
require_once 'SellingManagerAlertType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns alerts for a Selling Manager user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellingManagerAlertsResponseType.html
 *
 */
class GetSellingManagerAlertsResponseType extends AbstractResponseType
{
	/**
	 * @var SellingManagerAlertType
	 */
	protected $Alert;

	/**
	 * @return SellingManagerAlertType
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
	 * @param SellingManagerAlertType $value 
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
	 * @param SellingManagerAlertType $value 
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
		parent::__construct('GetSellingManagerAlertsResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Alert' =>
					array(
						'required' => false,
						'type' => 'SellingManagerAlertType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
