<?php
// autogenerated file 29.12.2011 14:09
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'RecommendationValidationRulesType.php';

/**
 * Defines details about recommended values for custom Item Specifics. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ValueRecommendationType.html
 *
 */
class ValueRecommendationType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Value;
	/**
	 * @var RecommendationValidationRulesType
	 */
	protected $ValidationRules;

	/**
	 * @return string
	 */
	function getValue()
	{
		return $this->Value;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setValue($value)
	{
		$this->Value = $value;
	}
	/**
	 * @return RecommendationValidationRulesType
	 */
	function getValidationRules()
	{
		return $this->ValidationRules;
	}
	/**
	 * @return void
	 * @param RecommendationValidationRulesType $value 
	 */
	function setValidationRules($value)
	{
		$this->ValidationRules = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ValueRecommendationType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Value' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ValidationRules' =>
					array(
						'required' => false,
						'type' => 'RecommendationValidationRulesType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
