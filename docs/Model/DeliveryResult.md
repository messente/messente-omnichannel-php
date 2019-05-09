# # DeliveryResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\Messente\Omnichannel\Model\Status**](Status.md) |  | [optional] 
**channel** | [**\Messente\Omnichannel\Model\Channel**](Channel.md) |  | [optional] 
**messageId** | **string** | Unique identifier for the message | [optional] 
**error** | **string** | Human-readable description of what went wrong, *null* in case of success or if the messages has not been processed yet | [optional] 
**err** | [**\Messente\Omnichannel\Model\Err**](Err.md) |  | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | When this status was received by Omnichannel API | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


