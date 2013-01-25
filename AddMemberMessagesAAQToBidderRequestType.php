<?php
// autogenerated file 10.09.2012 12:26
// $Id: $
// $Log: $
//
//
require_once 'AddMemberMessagesAAQToBidderRequestContainerType.php';
require_once 'AbstractRequestType.php';

/**
 * Enables a seller to send up to 10 messages to bidders, or to users who havemade 
 * offers via Best Offer, regarding an active item listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddMemberMessagesAAQToBidderRequestType.html
 *
 */
class AddMemberMessagesAAQToBidderRequestType extends AbstractRequestType
{
	/**
	 * @var AddMemberMessagesAAQToBidderRequestContainerType
	 */
	protected $AddMemberMessagesAAQToBidderRequestContainer;

	/**
	 * @return AddMemberMessagesAAQToBidderRequestContainerType
	 * @param integer $index 
	 */
	function getAddMemberMessagesAAQToBidderRequestContainer($index = null)
	{
		if ($index !== null) {
			return $this->AddMemberMessagesAAQToBidderRequestContainer[$index];
		} else {
			return $this->AddMemberMessagesAAQToBidderRequestContainer;
		}
	}
	/**
	 * @return void
	 * @param AddMemberMessagesAAQToBidderRequestContainerType $value 
	 * @param  $index 
	 */
	function setAddMemberMessagesAAQToBidderRequestContainer($value, $index = null)
	{
		if ($index !== null) {
			$this->AddMemberMessagesAAQToBidderRequestContainer[$index] = $value;
		} else {
			$this->AddMemberMessagesAAQToBidderRequestContainer = $value;
		}
	}
	/**
	 * @return void
	 * @param AddMemberMessagesAAQToBidderRequestContainerType $value 
	 */
	function addAddMemberMessagesAAQToBidderRequestContainer($value)
	{
		$this->AddMemberMessagesAAQToBidderRequestContainer[] = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddMemberMessagesAAQToBidderRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'AddMemberMessagesAAQToBidderRequestContainer' =>
					array(
						'required' => false,
						'type' => 'AddMemberMessagesAAQToBidderRequestContainerType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					)
				));
	}
}
?>
