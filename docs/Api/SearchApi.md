# Staatic\Api\SearchApi

All URIs are relative to https://api.staatic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clearSearchIndexByName()**](SearchApi.md#clearSearchIndexByName) | **POST** /v1/search-indices/{index}/clear | Clears a search index by name |
| [**createSearchIndex()**](SearchApi.md#createSearchIndex) | **POST** /v1/search-indices | Creates a new search index |
| [**deleteSearchIndex()**](SearchApi.md#deleteSearchIndex) | **DELETE** /v1/search-indices/{index} | Deletes an existing search index |
| [**deleteSearchRecord()**](SearchApi.md#deleteSearchRecord) | **DELETE** /v1/search-indices/{index}/{id} | Deletes an existing search record |
| [**deleteSearchRecords()**](SearchApi.md#deleteSearchRecords) | **POST** /v1/search-indices/{index}/delete | Deletes search records from the specified search index |
| [**getSearchIndexByName()**](SearchApi.md#getSearchIndexByName) | **GET** /v1/search-indices/{index} | Gets a search index by name |
| [**getSearchIndices()**](SearchApi.md#getSearchIndices) | **GET** /v1/search-indices | Gets a collection of search indices |
| [**importSearchRecords()**](SearchApi.md#importSearchRecords) | **POST** /v1/search-indices/{index}/import | Imports search records into the specified search index |
| [**search()**](SearchApi.md#search) | **POST** /v1/search/{index} | Performs a search query on the specified search index |
| [**updateSearchIndex()**](SearchApi.md#updateSearchIndex) | **PATCH** /v1/search-indices/{index} | Updates an existing search index |


## `clearSearchIndexByName()`

```php
clearSearchIndexByName($index)
```

Clears a search index by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index = 'index_example'; // string | The search index name

try {
    $apiInstance->clearSearchIndexByName($index);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->clearSearchIndexByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **string**| The search index name | |

### Return type

void (empty response body)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSearchIndex()`

```php
createSearchIndex($create_search_index_request): \Staatic\Api\Model\SearchIndex
```

Creates a new search index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_search_index_request = new \Staatic\Api\Model\CreateSearchIndexRequest(); // \Staatic\Api\Model\CreateSearchIndexRequest | Search index to be created

try {
    $result = $apiInstance->createSearchIndex($create_search_index_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->createSearchIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_search_index_request** | [**\Staatic\Api\Model\CreateSearchIndexRequest**](../Model/CreateSearchIndexRequest.md)| Search index to be created | [optional] |

### Return type

[**\Staatic\Api\Model\SearchIndex**](../Model/SearchIndex.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSearchIndex()`

```php
deleteSearchIndex($index)
```

Deletes an existing search index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index = 'index_example'; // string | The search index name

try {
    $apiInstance->deleteSearchIndex($index);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->deleteSearchIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **string**| The search index name | |

### Return type

void (empty response body)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSearchRecord()`

```php
deleteSearchRecord($index, $id)
```

Deletes an existing search record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index = 'index_example'; // string | The search index name
$id = 'id_example'; // string | The search record ID

try {
    $apiInstance->deleteSearchRecord($index, $id);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->deleteSearchRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **string**| The search index name | |
| **id** | **string**| The search record ID | |

### Return type

void (empty response body)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSearchRecords()`

```php
deleteSearchRecords($index, $delete_search_records_request)
```

Deletes search records from the specified search index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index = 'index_example'; // string | The search index name
$delete_search_records_request = new \Staatic\Api\Model\DeleteSearchRecordsRequest(); // \Staatic\Api\Model\DeleteSearchRecordsRequest | Search records to be deleted

try {
    $apiInstance->deleteSearchRecords($index, $delete_search_records_request);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->deleteSearchRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **string**| The search index name | |
| **delete_search_records_request** | [**\Staatic\Api\Model\DeleteSearchRecordsRequest**](../Model/DeleteSearchRecordsRequest.md)| Search records to be deleted | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchIndexByName()`

```php
getSearchIndexByName($index): \Staatic\Api\Model\SearchIndex
```

Gets a search index by name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index = 'index_example'; // string | The search index name

try {
    $result = $apiInstance->getSearchIndexByName($index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSearchIndexByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **string**| The search index name | |

### Return type

[**\Staatic\Api\Model\SearchIndex**](../Model/SearchIndex.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchIndices()`

```php
getSearchIndices($page, $per_page, $sort, $direction, $site_id, $name): \Staatic\Api\Model\SearchIndexCollection
```

Gets a collection of search indices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page of items to return
$per_page = 56; // int | The number of items to return per page
$sort = 'sort_example'; // string | The field to sort the results by
$direction = 'direction_example'; // string | The direction to sort the results by
$site_id = 'site_id_example'; // string | The site ID to filter the result
$name = 'name_example'; // string | The search index name to filter the result

try {
    $result = $apiInstance->getSearchIndices($page, $per_page, $sort, $direction, $site_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->getSearchIndices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page of items to return | [optional] |
| **per_page** | **int**| The number of items to return per page | [optional] |
| **sort** | **string**| The field to sort the results by | [optional] |
| **direction** | **string**| The direction to sort the results by | [optional] |
| **site_id** | **string**| The site ID to filter the result | [optional] |
| **name** | **string**| The search index name to filter the result | [optional] |

### Return type

[**\Staatic\Api\Model\SearchIndexCollection**](../Model/SearchIndexCollection.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `importSearchRecords()`

```php
importSearchRecords($index, $import_search_records_request)
```

Imports search records into the specified search index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index = 'index_example'; // string | The search index name
$import_search_records_request = new \Staatic\Api\Model\ImportSearchRecordsRequest(); // \Staatic\Api\Model\ImportSearchRecordsRequest | Search records to be imported

try {
    $apiInstance->importSearchRecords($index, $import_search_records_request);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->importSearchRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **string**| The search index name | |
| **import_search_records_request** | [**\Staatic\Api\Model\ImportSearchRecordsRequest**](../Model/ImportSearchRecordsRequest.md)| Search records to be imported | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($index, $search_request): \Staatic\Api\Model\SearchItem[]
```

Performs a search query on the specified search index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: public_api_key
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setApiKey('X-Staatic-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Staatic\Api\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Staatic-API-Key', 'Bearer');


$apiInstance = new Staatic\Api\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index = 'index_example'; // string | The search index name
$search_request = new \Staatic\Api\Model\SearchRequest(); // \Staatic\Api\Model\SearchRequest | The search query object

try {
    $result = $apiInstance->search($index, $search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **string**| The search index name | |
| **search_request** | [**\Staatic\Api\Model\SearchRequest**](../Model/SearchRequest.md)| The search query object | [optional] |

### Return type

[**\Staatic\Api\Model\SearchItem[]**](../Model/SearchItem.md)

### Authorization

[public_api_key](../../README.md#public_api_key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSearchIndex()`

```php
updateSearchIndex($index, $update_search_index_request): \Staatic\Api\Model\SearchIndex
```

Updates an existing search index

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$index = 'index_example'; // string | The search index name
$update_search_index_request = new \Staatic\Api\Model\UpdateSearchIndexRequest(); // \Staatic\Api\Model\UpdateSearchIndexRequest | Search index properties that need to be updated

try {
    $result = $apiInstance->updateSearchIndex($index, $update_search_index_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->updateSearchIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **index** | **string**| The search index name | |
| **update_search_index_request** | [**\Staatic\Api\Model\UpdateSearchIndexRequest**](../Model/UpdateSearchIndexRequest.md)| Search index properties that need to be updated | [optional] |

### Return type

[**\Staatic\Api\Model\SearchIndex**](../Model/SearchIndex.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
