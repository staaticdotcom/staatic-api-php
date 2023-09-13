# Staatic\Api\AccountApi

All URIs are relative to https://api.staatic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSite()**](AccountApi.md#createSite) | **POST** /v1/sites | Creates a new site |
| [**deleteSite()**](AccountApi.md#deleteSite) | **DELETE** /v1/sites/{id} | Deletes an existing site |
| [**getPlugins()**](AccountApi.md#getPlugins) | **GET** /v1/plugins | Gets a collection of plugins |
| [**getSiteById()**](AccountApi.md#getSiteById) | **GET** /v1/sites/{id} | Gets a site by ID |
| [**getSites()**](AccountApi.md#getSites) | **GET** /v1/sites | Gets a collection of sites |
| [**getSubscriptions()**](AccountApi.md#getSubscriptions) | **GET** /v1/subscriptions | Gets a collection of subscriptions |
| [**updateSite()**](AccountApi.md#updateSite) | **PATCH** /v1/sites/{id} | Updates an existing site |


## `createSite()`

```php
createSite($create_site_request): \Staatic\Api\Model\Site
```

Creates a new site

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_site_request = new \Staatic\Api\Model\CreateSiteRequest(); // \Staatic\Api\Model\CreateSiteRequest | Site to be created

try {
    $result = $apiInstance->createSite($create_site_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->createSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_site_request** | [**\Staatic\Api\Model\CreateSiteRequest**](../Model/CreateSiteRequest.md)| Site to be created | [optional] |

### Return type

[**\Staatic\Api\Model\Site**](../Model/Site.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSite()`

```php
deleteSite($id)
```

Deletes an existing site

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The site ID

try {
    $apiInstance->deleteSite($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The site ID | |

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

## `getPlugins()`

```php
getPlugins(): \Staatic\Api\Model\PluginCollection
```

Gets a collection of plugins

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPlugins();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getPlugins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Staatic\Api\Model\PluginCollection**](../Model/PluginCollection.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSiteById()`

```php
getSiteById($id): \Staatic\Api\Model\Site
```

Gets a site by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The site ID

try {
    $result = $apiInstance->getSiteById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getSiteById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The site ID | |

### Return type

[**\Staatic\Api\Model\Site**](../Model/Site.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSites()`

```php
getSites($page, $per_page, $sort, $direction, $name, $query): \Staatic\Api\Model\SiteCollection
```

Gets a collection of sites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page of items to return
$per_page = 56; // int | The number of items to return per page
$sort = 'sort_example'; // string | The field to sort the results by
$direction = 'direction_example'; // string | The direction to sort the results by
$name = 'name_example'; // string | The site name to filter the result
$query = 'query_example'; // string | Search query to filter the result

try {
    $result = $apiInstance->getSites($page, $per_page, $sort, $direction, $name, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getSites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page of items to return | [optional] |
| **per_page** | **int**| The number of items to return per page | [optional] |
| **sort** | **string**| The field to sort the results by | [optional] |
| **direction** | **string**| The direction to sort the results by | [optional] |
| **name** | **string**| The site name to filter the result | [optional] |
| **query** | **string**| Search query to filter the result | [optional] |

### Return type

[**\Staatic\Api\Model\SiteCollection**](../Model/SiteCollection.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptions()`

```php
getSubscriptions(): \Staatic\Api\Model\SubscriptionCollection
```

Gets a collection of subscriptions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Staatic\Api\Model\SubscriptionCollection**](../Model/SubscriptionCollection.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSite()`

```php
updateSite($id, $update_site_request): \Staatic\Api\Model\Site
```

Updates an existing site

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The site ID
$update_site_request = new \Staatic\Api\Model\UpdateSiteRequest(); // \Staatic\Api\Model\UpdateSiteRequest | Site properties that need to be updated

try {
    $result = $apiInstance->updateSite($id, $update_site_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->updateSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The site ID | |
| **update_site_request** | [**\Staatic\Api\Model\UpdateSiteRequest**](../Model/UpdateSiteRequest.md)| Site properties that need to be updated | [optional] |

### Return type

[**\Staatic\Api\Model\Site**](../Model/Site.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
