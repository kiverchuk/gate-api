# # CrossMarginCurrency

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Currency name | [optional] 
**rate** | **string** | Minimum lending rate (hourly rate) | [optional] 
**prec** | **string** | Currency precision | [optional] 
**discount** | **string** | Currency value discount, which is used in total value calculation | [optional] 
**min_borrow_amount** | **string** | Minimum currency borrow amount. Unit is currency itself | [optional] 
**user_max_borrow_amount** | **string** | Maximum borrow value allowed per user, in USDT | [optional] 
**total_max_borrow_amount** | **string** | Maximum borrow value allowed for this currency, in USDT | [optional] 
**price** | **string** | Price change between this currency and USDT | [optional] 
**loanable** | **bool** | Whether currency is borrowed | [optional] 
**status** | **int** | status  - &#x60;0&#x60; : disable  - &#x60;1&#x60; : enable | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
