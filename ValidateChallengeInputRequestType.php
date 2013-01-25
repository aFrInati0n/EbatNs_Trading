<?php
// autogenerated file 29.12.2011 14:50
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Validates the user response to a <b class="con">GetChallengeToken</b>botblock 
 * challenge. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ValidateChallengeInputRequestType.html
 *
 */
class ValidateChallengeInputRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $ChallengeToken;
	/**
	 * @var string
	 */
	protected $UserInput;
	/**
	 * @var boolean
	 */
	protected $KeepTokenValid;

	/**
	 * @return string
	 */
	function getChallengeToken()
	{
		return $this->ChallengeToken;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setChallengeToken($value)
	{
		$this->ChallengeToken = $value;
	}
	/**
	 * @return string
	 */
	function getUserInput()
	{
		return $this->UserInput;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setUserInput($value)
	{
		$this->UserInput = $value;
	}
	/**
	 * @return boolean
	 */
	function getKeepTokenValid()
	{
		return $this->KeepTokenValid;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setKeepTokenValid($value)
	{
		$this->KeepTokenValid = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ValidateChallengeInputRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ChallengeToken' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'UserInput' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'KeepTokenValid' =>
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
