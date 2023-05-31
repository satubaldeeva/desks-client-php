# Satubaldeeva\DesksClient\DesksApi

All URIs are relative to http://localhost/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addDesks()**](DesksApi.md#addDesks) | **POST** /desks | Create a new desk |
| [**deleteDeskById()**](DesksApi.md#deleteDeskById) | **DELETE** /desks/{id} | Delete a desks by ID |
| [**getDesks()**](DesksApi.md#getDesks) | **GET** /desks | Get all existing desks |
| [**getDesksById()**](DesksApi.md#getDesksById) | **GET** /desks/{id} | Get a desk by ID |
| [**replaceDeskById()**](DesksApi.md#replaceDeskById) | **PUT** /desks/{id} | Replace a desk by ID |
| [**searchDesks()**](DesksApi.md#searchDesks) | **POST** /desks:search | Search Desks |
| [**updateDeskById()**](DesksApi.md#updateDeskById) | **PATCH** /desks/{id} | Update a desk by ID |


## `addDesks()`

```php
addDesks($create_desk_request): \Satubaldeeva\DesksClient\Dto\DeskResponse
```

Create a new desk

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\DesksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_desk_request = new \Satubaldeeva\DesksClient\Dto\CreateDeskRequest(); // \Satubaldeeva\DesksClient\Dto\CreateDeskRequest | Create a new desks

try {
    $result = $apiInstance->addDesks($create_desk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesksApi->addDesks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_desk_request** | [**\Satubaldeeva\DesksClient\Dto\CreateDeskRequest**](../Model/CreateDeskRequest.md)| Create a new desks | |

### Return type

[**\Satubaldeeva\DesksClient\Dto\DeskResponse**](../Model/DeskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDeskById()`

```php
deleteDeskById($id)
```

Delete a desks by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\DesksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the desk to delete

try {
    $apiInstance->deleteDeskById($id);
} catch (Exception $e) {
    echo 'Exception when calling DesksApi->deleteDeskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the desk to delete | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDesks()`

```php
getDesks(): \Satubaldeeva\DesksClient\Dto\DeskResponse[]
```

Get all existing desks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\DesksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDesks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesksApi->getDesks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Satubaldeeva\DesksClient\Dto\DeskResponse[]**](../Model/DeskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDesksById()`

```php
getDesksById($id): \Satubaldeeva\DesksClient\Dto\DeskResponse
```

Get a desk by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\DesksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the desk to return

try {
    $result = $apiInstance->getDesksById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesksApi->getDesksById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the desk to return | |

### Return type

[**\Satubaldeeva\DesksClient\Dto\DeskResponse**](../Model/DeskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceDeskById()`

```php
replaceDeskById($id, $replace_desk_request): \Satubaldeeva\DesksClient\Dto\DeskResponse
```

Replace a desk by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\DesksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the desk to replace
$replace_desk_request = new \Satubaldeeva\DesksClient\Dto\ReplaceDeskRequest(); // \Satubaldeeva\DesksClient\Dto\ReplaceDeskRequest | Updated desk  data

try {
    $result = $apiInstance->replaceDeskById($id, $replace_desk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesksApi->replaceDeskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the desk to replace | |
| **replace_desk_request** | [**\Satubaldeeva\DesksClient\Dto\ReplaceDeskRequest**](../Model/ReplaceDeskRequest.md)| Updated desk  data | |

### Return type

[**\Satubaldeeva\DesksClient\Dto\DeskResponse**](../Model/DeskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchDesks()`

```php
searchDesks($search_desks_request): \Satubaldeeva\DesksClient\Dto\SearchDesksResponse
```

Search Desks

Search Desks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\DesksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_desks_request = new \Satubaldeeva\DesksClient\Dto\SearchDesksRequest(); // \Satubaldeeva\DesksClient\Dto\SearchDesksRequest

try {
    $result = $apiInstance->searchDesks($search_desks_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesksApi->searchDesks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_desks_request** | [**\Satubaldeeva\DesksClient\Dto\SearchDesksRequest**](../Model/SearchDesksRequest.md)|  | |

### Return type

[**\Satubaldeeva\DesksClient\Dto\SearchDesksResponse**](../Model/SearchDesksResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeskById()`

```php
updateDeskById($id, $patch_desk_request): \Satubaldeeva\DesksClient\Dto\DeskResponse
```

Update a desk by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\DesksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the desk to update
$patch_desk_request = new \Satubaldeeva\DesksClient\Dto\PatchDeskRequest(); // \Satubaldeeva\DesksClient\Dto\PatchDeskRequest | Updated desk data

try {
    $result = $apiInstance->updateDeskById($id, $patch_desk_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DesksApi->updateDeskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the desk to update | |
| **patch_desk_request** | [**\Satubaldeeva\DesksClient\Dto\PatchDeskRequest**](../Model/PatchDeskRequest.md)| Updated desk data | |

### Return type

[**\Satubaldeeva\DesksClient\Dto\DeskResponse**](../Model/DeskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
