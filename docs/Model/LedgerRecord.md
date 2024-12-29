# # LedgerRecord

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Record ID | [optional] [readonly] 
**txid** | **string** | Hash record of the withdrawal | [optional] [readonly] 
**withdraw_order_id** | **string** | Client order id, up to 32 length and can only include 0-9, A-Z, a-z, underscore(_), hyphen(-) or dot(.) | [optional] 
**timestamp** | **string** | Operation time | [optional] [readonly] 
**amount** | **string** | Currency amount | 
**currency** | **string** | Currency name | 
**address** | **string** | Withdrawal address. Required for withdrawals | [optional] 
**memo** | **string** | Additional remarks with regards to the withdrawal | [optional] 
**status** | **string** | Record status.  - DONE: done - CANCEL: cancelled - REQUEST: requesting - MANUAL: pending manual approval - BCODE: GateCode operation - EXTPEND: pending confirm after sending - FAIL: pending confirm when fail - INVALID: invalid order - VERIFY: verifying - PROCES: processing - PEND: pending - DMOVE: required manual approval - SPLITPEND: the order is automatically split due to large amount | [optional] [readonly] 
**chain** | **string** | Name of the chain used in withdrawals | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
