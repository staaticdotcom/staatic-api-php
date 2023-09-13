# Staatic\Api\DeploymentsApi

All URIs are relative to https://api.staatic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDeployment()**](DeploymentsApi.md#createDeployment) | **POST** /v1/deployments | Creates a new deployment |
| [**getDeploymentById()**](DeploymentsApi.md#getDeploymentById) | **GET** /v1/deployments/{id} | Gets a deployment by ID |
| [**getDeployments()**](DeploymentsApi.md#getDeployments) | **GET** /v1/deployments | Gets a collection of deployments |
| [**getSiteFiles()**](DeploymentsApi.md#getSiteFiles) | **GET** /v1/sites/{id}/files | Gets a collection of deployment files for the specified site |
| [**updateDeployment()**](DeploymentsApi.md#updateDeployment) | **PATCH** /v1/deployments/{id} | Updates an existing deployment |
| [**uploadDeploymentFile()**](DeploymentsApi.md#uploadDeploymentFile) | **PUT** /v1/deployments/{id}/files/{path} | Uploads a deployment file |


## `createDeployment()`

```php
createDeployment($create_deployment_request): \Staatic\Api\Model\Deployment
```

Creates a new deployment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_deployment_request = new \Staatic\Api\Model\CreateDeploymentRequest(); // \Staatic\Api\Model\CreateDeploymentRequest | Deployment to be created

try {
    $result = $apiInstance->createDeployment($create_deployment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->createDeployment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_deployment_request** | [**\Staatic\Api\Model\CreateDeploymentRequest**](../Model/CreateDeploymentRequest.md)| Deployment to be created | [optional] |

### Return type

[**\Staatic\Api\Model\Deployment**](../Model/Deployment.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeploymentById()`

```php
getDeploymentById($id): \Staatic\Api\Model\Deployment
```

Gets a deployment by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The deployment ID

try {
    $result = $apiInstance->getDeploymentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->getDeploymentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The deployment ID | |

### Return type

[**\Staatic\Api\Model\Deployment**](../Model/Deployment.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDeployments()`

```php
getDeployments($page, $per_page, $sort, $direction, $site_id): \Staatic\Api\Model\DeploymentCollection
```

Gets a collection of deployments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\DeploymentsApi(
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

try {
    $result = $apiInstance->getDeployments($page, $per_page, $sort, $direction, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->getDeployments: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Staatic\Api\Model\DeploymentCollection**](../Model/DeploymentCollection.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSiteFiles()`

```php
getSiteFiles($id, $page, $per_page, $sort, $direction): \Staatic\Api\Model\DeploymentFileCollection
```

Gets a collection of deployment files for the specified site

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The site ID
$page = 56; // int | The page of items to return
$per_page = 56; // int | The number of items to return per page
$sort = 'sort_example'; // string | The field to sort the results by
$direction = 'direction_example'; // string | The direction to sort the results by

try {
    $result = $apiInstance->getSiteFiles($id, $page, $per_page, $sort, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->getSiteFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The site ID | |
| **page** | **int**| The page of items to return | [optional] |
| **per_page** | **int**| The number of items to return per page | [optional] |
| **sort** | **string**| The field to sort the results by | [optional] |
| **direction** | **string**| The direction to sort the results by | [optional] |

### Return type

[**\Staatic\Api\Model\DeploymentFileCollection**](../Model/DeploymentFileCollection.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDeployment()`

```php
updateDeployment($id, $update_deployment_request): \Staatic\Api\Model\Deployment
```

Updates an existing deployment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The deployment ID
$update_deployment_request = new \Staatic\Api\Model\UpdateDeploymentRequest(); // \Staatic\Api\Model\UpdateDeploymentRequest | Deployment properties that need to be updated

try {
    $result = $apiInstance->updateDeployment($id, $update_deployment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->updateDeployment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The deployment ID | |
| **update_deployment_request** | [**\Staatic\Api\Model\UpdateDeploymentRequest**](../Model/UpdateDeploymentRequest.md)| Deployment properties that need to be updated | [optional] |

### Return type

[**\Staatic\Api\Model\Deployment**](../Model/Deployment.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDeploymentFile()`

```php
uploadDeploymentFile($id, $path, $body): \Staatic\Api\Model\DeploymentFile
```

Uploads a deployment file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\DeploymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The deployment ID
$path = 'path_example'; // string | The file path
$body = "/path/to/file.txt"; // \SplFileObject | The deployment file payload

try {
    $result = $apiInstance->uploadDeploymentFile($id, $path, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeploymentsApi->uploadDeploymentFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The deployment ID | |
| **path** | **string**| The file path | |
| **body** | **\SplFileObject****\SplFileObject**| The deployment file payload | [optional] |

### Return type

[**\Staatic\Api\Model\DeploymentFile**](../Model/DeploymentFile.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
