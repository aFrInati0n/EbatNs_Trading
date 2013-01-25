<?php
// autogenerated file 24.02.2011 11:33
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * SOAP faults are used to indicate that an infrastructure error has occurred,such 
 * as a problem on eBay's side with database or server going down, or aproblem with 
 * the client or server-side SOAP framework. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FaultDetailsType.html
 *
 */
class FaultDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $ErrorCode;
	/**
	 * @var string
	 */
	protected $Severity;
	/**
	 * @var string
	 */
	protected $DetailedMessage;

	/**
	 * @return string
	 */
	function getErrorCode()
	{
		return $this->ErrorCode;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setErrorCode($value)
	{
		$this->ErrorCode = $value;
	}
	/**
	 * @return string
	 */
	function getSeverity()
	{
		return $this->Severity;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSeverity($value)
	{
		$this->Severity = $value;
	}
	/**
	 * @return string
	 */
	function getDetailedMessage()
	{
		return $this->DetailedMessage;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDetailedMessage($value)
	{
		$this->DetailedMessage = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FaultDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ErrorCode' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Severity' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DetailedMessage' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
