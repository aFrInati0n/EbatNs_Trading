<?php
// autogenerated file 22.07.2011 09:06
// $Id: $
// $Log: $
//
//
require_once 'MarkUpMarkDownHistoryType.php';
require_once 'NotificationDetailsArrayType.php';
require_once 'NotificationStatisticsType.php';
require_once 'AbstractResponseType.php';

/**
 * Returns an array of notifications sent to a given application identified by the 
 * appID(comes in the credentials). The result can be used by third-party 
 * developers troubleshootissues with notifications.Zero, one or many notifications 
 * can be returned in the array. The set of notificationsreturned is limited to 
 * those that were sent between the StartTime and EndTime specifiedin the request. 
 * If StartTime or EndTime filters were not found in the request, thenthe response 
 * will contain the data for only one day (Now-1day). By default, maximumduration 
 * is limited to 3 days (Now-3days). These min (1day) and max(3days) appliesto 
 * Notifications,MarkDownMarkUpHistory and NotificationStatistics.Notifications are 
 * sent only if the ItemID is included in the request. If there is noItemID, then 
 * only Statistics and MarkDownMarkUpHistory information is included. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetNotificationsUsageResponseType.html
 *
 */
class GetNotificationsUsageResponseType extends AbstractResponseType
{
	/**
	 * @var dateTime
	 */
	protected $StartTime;
	/**
	 * @var dateTime
	 */
	protected $EndTime;
	/**
	 * @var NotificationDetailsArrayType
	 */
	protected $NotificationDetailsArray;
	/**
	 * @var MarkUpMarkDownHistoryType
	 */
	protected $MarkUpMarkDownHistory;
	/**
	 * @var NotificationStatisticsType
	 */
	protected $NotificationStatistics;

	/**
	 * @return dateTime
	 */
	function getStartTime()
	{
		return $this->StartTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setStartTime($value)
	{
		$this->StartTime = $value;
	}
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
	 * @return NotificationDetailsArrayType
	 */
	function getNotificationDetailsArray()
	{
		return $this->NotificationDetailsArray;
	}
	/**
	 * @return void
	 * @param NotificationDetailsArrayType $value 
	 */
	function setNotificationDetailsArray($value)
	{
		$this->NotificationDetailsArray = $value;
	}
	/**
	 * @return MarkUpMarkDownHistoryType
	 */
	function getMarkUpMarkDownHistory()
	{
		return $this->MarkUpMarkDownHistory;
	}
	/**
	 * @return void
	 * @param MarkUpMarkDownHistoryType $value 
	 */
	function setMarkUpMarkDownHistory($value)
	{
		$this->MarkUpMarkDownHistory = $value;
	}
	/**
	 * @return NotificationStatisticsType
	 */
	function getNotificationStatistics()
	{
		return $this->NotificationStatistics;
	}
	/**
	 * @return void
	 * @param NotificationStatisticsType $value 
	 */
	function setNotificationStatistics($value)
	{
		$this->NotificationStatistics = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetNotificationsUsageResponseType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'StartTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EndTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NotificationDetailsArray' =>
					array(
						'required' => false,
						'type' => 'NotificationDetailsArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MarkUpMarkDownHistory' =>
					array(
						'required' => false,
						'type' => 'MarkUpMarkDownHistoryType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'NotificationStatistics' =>
					array(
						'required' => false,
						'type' => 'NotificationStatisticsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
