<?php
// autogenerated file 10.09.2012 12:30
// $Id: $
// $Log: $
//
//
require_once 'AbstractResponseType.php';
require_once 'UserType.php';

/**
 * Contains the data retrieved by the call. User data is returned in a User object. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetUserResponseType.html
 *
 */
class GetUserResponseType extends AbstractResponseType
{
	/**
	 * @var UserType
	 */
	protected $User;

	/**
	 * @return UserType
	 */
	function getUser()
	{
		return $this->User;
	}
	/**
	 * @return void
	 * @param UserType $value 
	 */
	function setUser($value)
	{
		$this->User = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetUserResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'User' =>
					array(
						'required' => false,
						'type' => 'UserType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
