<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
//
require_once 'ApiAccessRuleType.php';
require_once 'AbstractResponseType.php';

/**
 * Responds to a call to GetApiAccessRules. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetApiAccessRulesResponseType.html
 *
 */
class GetApiAccessRulesResponseType extends AbstractResponseType
{
	/**
	 * @var ApiAccessRuleType
	 */
	protected $ApiAccessRule;

	/**
	 * @return ApiAccessRuleType
	 * @param integer $index 
	 */
	function getApiAccessRule($index = null)
	{
		if ($index !== null) {
			return $this->ApiAccessRule[$index];
		} else {
			return $this->ApiAccessRule;
		}
	}
	/**
	 * @return void
	 * @param ApiAccessRuleType $value 
	 * @param  $index 
	 */
	function setApiAccessRule($value, $index = null)
	{
		if ($index !== null) {
			$this->ApiAccessRule[$index] = $value;
		} else {
			$this->ApiAccessRule = $value;
		}
	}
	/**
	 * @return void
	 * @param ApiAccessRuleType $value 
	 */
	function addApiAccessRule($value)
	{
		$this->ApiAccessRule[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetApiAccessRulesResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ApiAccessRule' =>
					array(
						'required' => false,
						'type' => 'ApiAccessRuleType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
