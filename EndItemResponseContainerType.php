<?php
// autogenerated file 10.09.2012 12:38
// $Id: $
// $Log: $
//
//
require_once 'ErrorType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Includes the acknowledgement of date and time the auction wasended due to the 
 * call to EndItem. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/EndItemResponseContainerType.html
 *
 */
class EndItemResponseContainerType extends EbatNs_ComplexType
{
	/**
	 * @var dateTime
	 */
	protected $EndTime;
	/**
	 * @var string
	 */
	protected $CorrelationID;
	/**
	 * @var ErrorType
	 */
	protected $Errors;

	/**
	 * @return dateTime
	 */
	function getEndTime()
	{
		return $this->EndTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEndTime($value)
	{
		$this->EndTime = $value;
	}
	/**
	 * @return string
	 */
	function getCorrelationID()
	{
		return $this->CorrelationID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCorrelationID($value)
	{
		$this->CorrelationID = $value;
	}
	/**
	 * @return ErrorType
	 * @param integer $index 
	 */
	function getErrors($index = null)
	{
		if ($index !== null) {
			return $this->Errors[$index];
		} else {
			return $this->Errors;
		}
	}
	/**
	 * @return void
	 * @param ErrorType $value 
	 * @param  $index 
	 */
	function setErrors($value, $index = null)
	{
		if ($index !== null) {
			$this->Errors[$index] = $value;
		} else {
			$this->Errors = $value;
		}
	}
	/**
	 * @return void
	 * @param ErrorType $value 
	 */
	function addErrors($value)
	{
		$this->Errors[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('EndItemResponseContainerType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EndTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CorrelationID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Errors' =>
					array(
						'required' => false,
						'type' => 'ErrorType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
