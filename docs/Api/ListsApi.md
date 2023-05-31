# Satubaldeeva\DesksClient\ListsApi

All URIs are relative to http://localhost/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addLists()**](ListsApi.md#addLists) | **POST** /lists | Create a new list |
| [**deleteListById()**](ListsApi.md#deleteListById) | **DELETE** /lists/{id} | Delete a list by ID |
| [**getListById()**](ListsApi.md#getListById) | **GET** /lists/{id} | Get a list by ID |
| [**getLists()**](ListsApi.md#getLists) | **GET** /lists | Get all existing lists |
| [**replaceListById()**](ListsApi.md#replaceListById) | **PUT** /lists/{id} | Replace a list by ID |
| [**updateListById()**](ListsApi.md#updateListById) | **PATCH** /lists/{id} | Update a list by ID |


## `addLists()`

```php
addLists($create_list_request): \Satubaldeeva\DesksClient\Dto\ListResponse
```

Create a new list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_list_request = new \Satubaldeeva\DesksClient\Dto\CreateListRequest(); // \Satubaldeeva\DesksClient\Dto\CreateListRequest | Create a new list

try {
    $result = $apiInstance->addLists($create_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->addLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_list_request** | [**\Satubaldeeva\DesksClient\Dto\CreateListRequest**](../Model/CreateListRequest.md)| Create a new list | |

### Return type

[**\Satubaldeeva\DesksClient\Dto\ListResponse**](../Model/ListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteListById()`

```php
deleteListById($id)
```

Delete a list by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the list to delete

try {
    $apiInstance->deleteListById($id);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->deleteListById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the list to delete | |

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

## `getListById()`

```php
getListById($id): \Satubaldeeva\DesksClient\Dto\ListResponse
```

Get a list by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the list to return

try {
    $result = $apiInstance->getListById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getListById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the list to return | |

### Return type

[**\Satubaldeeva\DesksClient\Dto\ListResponse**](../Model/ListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLists()`

```php
getLists(): \Satubaldeeva\DesksClient\Dto\ListResponse[]
```

Get all existing lists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLists();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->getLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Satubaldeeva\DesksClient\Dto\ListResponse[]**](../Model/ListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceListById()`

```php
replaceListById($id, $replace_list_request): \Satubaldeeva\DesksClient\Dto\ListResponse
```

Replace a list by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the list to replace
$replace_list_request = new \Satubaldeeva\DesksClient\Dto\ReplaceListRequest(); // \Satubaldeeva\DesksClient\Dto\ReplaceListRequest | Updated list data

try {
    $result = $apiInstance->replaceListById($id, $replace_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->replaceListById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the list to replace | |
| **replace_list_request** | [**\Satubaldeeva\DesksClient\Dto\ReplaceListRequest**](../Model/ReplaceListRequest.md)| Updated list data | |

### Return type

[**\Satubaldeeva\DesksClient\Dto\ListResponse**](../Model/ListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateListById()`

```php
updateListById($id, $patch_list_request): \Satubaldeeva\DesksClient\Dto\ListResponse
```

Update a list by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Satubaldeeva\DesksClient\Api\ListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | ID of the list to update
$patch_list_request = new \Satubaldeeva\DesksClient\Dto\PatchListRequest(); // \Satubaldeeva\DesksClient\Dto\PatchListRequest | Updated list data

try {
    $result = $apiInstance->updateListById($id, $patch_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListsApi->updateListById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the list to update | |
| **patch_list_request** | [**\Satubaldeeva\DesksClient\Dto\PatchListRequest**](../Model/PatchListRequest.md)| Updated list data | |

### Return type

[**\Satubaldeeva\DesksClient\Dto\ListResponse**](../Model/ListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
