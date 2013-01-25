<?php
// autogenerated file 10.09.2012 12:53
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines the reason a dispute was resolved. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/DisputeResolutionReasonCodeType.html
 *
 * @property string Unresolved
 * @property string ProofOfPayment
 * @property string ComputerTechnicalProblem
 * @property string NoContact
 * @property string FamilyEmergency
 * @property string ProofGivenInFeedback
 * @property string FirstInfraction
 * @property string CameToAgreement
 * @property string ItemReturned
 * @property string BuyerPaidAuctionFees
 * @property string SellerReceivedPayment
 * @property string OtherResolution
 * @property string ClaimPaid
 * @property string CustomCode
 */
class DisputeResolutionReasonCodeType extends EbatNs_FacetType
{
	const CodeType_Unresolved = 'Unresolved';
	const CodeType_ProofOfPayment = 'ProofOfPayment';
	const CodeType_ComputerTechnicalProblem = 'ComputerTechnicalProblem';
	const CodeType_NoContact = 'NoContact';
	const CodeType_FamilyEmergency = 'FamilyEmergency';
	const CodeType_ProofGivenInFeedback = 'ProofGivenInFeedback';
	const CodeType_FirstInfraction = 'FirstInfraction';
	const CodeType_CameToAgreement = 'CameToAgreement';
	const CodeType_ItemReturned = 'ItemReturned';
	const CodeType_BuyerPaidAuctionFees = 'BuyerPaidAuctionFees';
	const CodeType_SellerReceivedPayment = 'SellerReceivedPayment';
	const CodeType_OtherResolution = 'OtherResolution';
	const CodeType_ClaimPaid = 'ClaimPaid';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('DisputeResolutionReasonCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_DisputeResolutionReasonCodeType = new DisputeResolutionReasonCodeType();

?>
