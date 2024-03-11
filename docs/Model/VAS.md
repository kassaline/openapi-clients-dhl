# # VAS

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**preferredNeighbour** | **string** | Preferred neighbour. Can be specified as text. | [optional]
**preferredLocation** | **string** | Preferred location. Can be specified as text. | [optional]
**visualCheckOfAge** | **string** | if used it will trigger checking the age of recipient | [optional]
**namedPersonOnly** | **bool** | Delivery can only be signed for by yourself personally. | [optional]
**identCheck** | [**\OpenAPI\Client\Dhl\Model\VASIdentCheck**](VASIdentCheck.md) |  | [optional]
**signedForByRecipient** | **bool** | Delivery must be signed for by the recipient and not by DHL staff | [optional]
**endorsement** | **string** | Instructions and endorsement how to treat international undeliverable shipment. By default, shipments are returned if undeliverable. There are country specific rules whether the shipment is returned immediately or after a grace period. | [optional]
**preferredDay** | **\DateTime** | Preferred day of delivery in format YYYY-MM-DD. Shipper can request a preferred day of delivery. The preferred day should be between 2 and 6 working days after handover to DHL. | [optional]
**noNeighbourDelivery** | **bool** | Delivery can only be signed for by yourself personally or by members of your household. | [optional]
**additionalInsurance** | [**\OpenAPI\Client\Dhl\Model\Value**](Value.md) |  | [optional]
**bulkyGoods** | **bool** | Leaving this out is same as setting to false. Sperrgut. | [optional]
**cashOnDelivery** | [**\OpenAPI\Client\Dhl\Model\VASCashOnDelivery**](VASCashOnDelivery.md) |  | [optional]
**individualSenderRequirement** | **string** | Special instructions for delivery. 2 character code, possible values agreed in contract. | [optional]
**premium** | **bool** | Choice of premium vs economy parcel. Availability is country dependent and may be manipulated by DHL if choice is not available. Please review the label. | [optional]
**closestDropPoint** | **bool** | Closest Droppoint Delivery to the droppoint closest to the address of the recipient of the shipment. For this kind of delivery either the phone number and/or the e-mail address of the receiver is mandatory. For shipments using DHL Paket International it is recommended that you choose one of the three delivery types: Economy, Premium, CDP. Otherwise, the current default for the receiver country will be picked. | [optional]
**parcelOutletRouting** | **string** | Undeliverable domestic shipment can be forwarded and held at retail. Notification to email (fallback: consignee email) will be used. | [optional]
**dhlRetoure** | [**\OpenAPI\Client\Dhl\Model\VASDhlRetoure**](VASDhlRetoure.md) |  | [optional]
**postalDeliveryDutyPaid** | **bool** | All import duties are paid by the shipper. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
