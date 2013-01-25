<?php
// autogenerated file 29.12.2011 14:15
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * Contains a seller's preferences for automated Unpaid Item Assistance. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/UnpaidItemAssistancePreferencesType.html
 *
 */
class UnpaidItemAssistancePreferencesType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $DelayBeforeOpeningDispute;
	/**
	 * @var boolean
	 */
	protected $OptInStatus;
	/**
	 * @var boolean
	 */
	protected $AutoRelist;
	/**
	 * @var boolean
	 */
	protected $RemoveAllExcludedUsers;
	/**
	 * @var string
	 */
	protected $ExcludedUser;

	/**
	 * @return int
	 */
	function getDelayBeforeOpeningDispute()
	{
		return $this->DelayBeforeOpeningDispute;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setDelayBeforeOpeningDispute($value)
	{
		$this->DelayBeforeOpeningDispute = $value;
	}
	/**
	 * @return boolean
	 */
	function getOptInStatus()
	{
		return $this->OptInStatus;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setOptInStatus($value)
	{
		$this->OptInStatus = $value;
	}
	/**
	 * @return boolean
	 */
	function getAutoRelist()
	{
		return $this->AutoRelist;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setAutoRelist($value)
	{
		$this->AutoRelist = $value;
	}
	/**
	 * @return boolean
	 */
	function getRemoveAllExcludedUsers()
	{
		return $this->RemoveAllExcludedUsers;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setRemoveAllExcludedUsers($value)
	{
		$this->RemoveAllExcludedUsers = $value;
	}
	/**
	 * @return string
	 * @param integer $index 
	 */
	function getExcludedUser($index = null)
	{
		if ($index !== null) {
			return $this->ExcludedUser[$index];
		} else {
			return $this->ExcludedUser;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 * @param  $index 
	 */
	function setExcludedUser($value, $index = null)
	{
		if ($index !== null) {
			$this->ExcludedUser[$index] = $value;
		} else {
			$this->ExcludedUser = $value;
		}
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function addExcludedUser($value)
	{
		$this->ExcludedUser[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('UnpaidItemAssistancePreferencesType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'DelayBeforeOpeningDispute' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'OptInStatus' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'AutoRelist' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RemoveAllExcludedUsers' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExcludedUser' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
