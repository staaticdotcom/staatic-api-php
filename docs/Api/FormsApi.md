# Staatic\Api\FormsApi

All URIs are relative to https://api.staatic.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createForm()**](FormsApi.md#createForm) | **POST** /v1/forms | Creates a new form |
| [**createFormNotification()**](FormsApi.md#createFormNotification) | **POST** /v1/form-notifications | Creates a new form notification |
| [**createFormSubmission()**](FormsApi.md#createFormSubmission) | **POST** /v1/form-submissions | Creates a new form submission |
| [**createFormTemplate()**](FormsApi.md#createFormTemplate) | **POST** /v1/form-templates | Creates a new form template |
| [**deleteForm()**](FormsApi.md#deleteForm) | **DELETE** /v1/forms/{id} | Deletes an existing form |
| [**deleteFormNotification()**](FormsApi.md#deleteFormNotification) | **DELETE** /v1/form-notifications/{id} | Deletes an existing form notification |
| [**deleteFormSubmission()**](FormsApi.md#deleteFormSubmission) | **DELETE** /v1/form-submissions/{id} | Deletes an existing form submission |
| [**deleteFormTemplate()**](FormsApi.md#deleteFormTemplate) | **DELETE** /v1/form-templates/{id} | Deletes an existing form template |
| [**getFormById()**](FormsApi.md#getFormById) | **GET** /v1/forms/{id} | Gets a form by ID |
| [**getFormNotificationById()**](FormsApi.md#getFormNotificationById) | **GET** /v1/form-notifications/{id} | Gets a form notification by ID |
| [**getFormNotifications()**](FormsApi.md#getFormNotifications) | **GET** /v1/form-notifications | Gets a collection of form notifications |
| [**getFormSubmissionById()**](FormsApi.md#getFormSubmissionById) | **GET** /v1/form-submissions/{id} | Gets a form submission by ID |
| [**getFormSubmissions()**](FormsApi.md#getFormSubmissions) | **GET** /v1/form-submissions | Gets a collection of form submissions |
| [**getFormTemplateById()**](FormsApi.md#getFormTemplateById) | **GET** /v1/form-templates/{id} | Gets a form template by ID |
| [**getFormTemplates()**](FormsApi.md#getFormTemplates) | **GET** /v1/form-templates | Gets a collection of form templates |
| [**getForms()**](FormsApi.md#getForms) | **GET** /v1/forms | Gets a collection of forms |
| [**updateForm()**](FormsApi.md#updateForm) | **PATCH** /v1/forms/{id} | Updates an existing form |
| [**updateFormNotification()**](FormsApi.md#updateFormNotification) | **PATCH** /v1/form-notifications/{id} | Updates an existing form notification |
| [**updateFormSubmission()**](FormsApi.md#updateFormSubmission) | **PATCH** /v1/form-submissions/{id} | Updates an existing form submission |
| [**updateFormTemplate()**](FormsApi.md#updateFormTemplate) | **PATCH** /v1/form-templates/{id} | Updates an existing form template |


## `createForm()`

```php
createForm($create_form_request): \Staatic\Api\Model\Form
```

Creates a new form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_form_request = new \Staatic\Api\Model\CreateFormRequest(); // \Staatic\Api\Model\CreateFormRequest | Form to be created

try {
    $result = $apiInstance->createForm($create_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->createForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_form_request** | [**\Staatic\Api\Model\CreateFormRequest**](../Model/CreateFormRequest.md)| Form to be created | [optional] |

### Return type

[**\Staatic\Api\Model\Form**](../Model/Form.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFormNotification()`

```php
createFormNotification($create_form_notification_request): \Staatic\Api\Model\FormNotification
```

Creates a new form notification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_form_notification_request = new \Staatic\Api\Model\CreateFormNotificationRequest(); // \Staatic\Api\Model\CreateFormNotificationRequest | Form notification to be created

try {
    $result = $apiInstance->createFormNotification($create_form_notification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->createFormNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_form_notification_request** | [**\Staatic\Api\Model\CreateFormNotificationRequest**](../Model/CreateFormNotificationRequest.md)| Form notification to be created | [optional] |

### Return type

[**\Staatic\Api\Model\FormNotification**](../Model/FormNotification.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFormSubmission()`

```php
createFormSubmission($create_form_submission_request): \Staatic\Api\Model\FormSubmission
```

Creates a new form submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_form_submission_request = new \Staatic\Api\Model\CreateFormSubmissionRequest(); // \Staatic\Api\Model\CreateFormSubmissionRequest | Form submission to be created

try {
    $result = $apiInstance->createFormSubmission($create_form_submission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->createFormSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_form_submission_request** | [**\Staatic\Api\Model\CreateFormSubmissionRequest**](../Model/CreateFormSubmissionRequest.md)| Form submission to be created | [optional] |

### Return type

[**\Staatic\Api\Model\FormSubmission**](../Model/FormSubmission.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createFormTemplate()`

```php
createFormTemplate($create_form_template_request): \Staatic\Api\Model\FormTemplate
```

Creates a new form template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_form_template_request = new \Staatic\Api\Model\CreateFormTemplateRequest(); // \Staatic\Api\Model\CreateFormTemplateRequest | Form template to be created

try {
    $result = $apiInstance->createFormTemplate($create_form_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->createFormTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_form_template_request** | [**\Staatic\Api\Model\CreateFormTemplateRequest**](../Model/CreateFormTemplateRequest.md)| Form template to be created | [optional] |

### Return type

[**\Staatic\Api\Model\FormTemplate**](../Model/FormTemplate.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteForm()`

```php
deleteForm($id)
```

Deletes an existing form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form ID

try {
    $apiInstance->deleteForm($id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->deleteForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form ID | |

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

## `deleteFormNotification()`

```php
deleteFormNotification($id)
```

Deletes an existing form notification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form notification ID

try {
    $apiInstance->deleteFormNotification($id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->deleteFormNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form notification ID | |

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

## `deleteFormSubmission()`

```php
deleteFormSubmission($id)
```

Deletes an existing form submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form submission ID

try {
    $apiInstance->deleteFormSubmission($id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->deleteFormSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form submission ID | |

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

## `deleteFormTemplate()`

```php
deleteFormTemplate($id)
```

Deletes an existing form template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form template ID

try {
    $apiInstance->deleteFormTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->deleteFormTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form template ID | |

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

## `getFormById()`

```php
getFormById($id): \Staatic\Api\Model\Form
```

Gets a form by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form ID

try {
    $result = $apiInstance->getFormById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getFormById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form ID | |

### Return type

[**\Staatic\Api\Model\Form**](../Model/Form.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormNotificationById()`

```php
getFormNotificationById($id): \Staatic\Api\Model\FormNotification
```

Gets a form notification by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form notification ID

try {
    $result = $apiInstance->getFormNotificationById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getFormNotificationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form notification ID | |

### Return type

[**\Staatic\Api\Model\FormNotification**](../Model/FormNotification.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormNotifications()`

```php
getFormNotifications($page, $per_page, $sort, $direction, $site_id, $form_id): \Staatic\Api\Model\FormNotificationCollection
```

Gets a collection of form notifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
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
$form_id = 'form_id_example'; // string | The form ID to filter the result

try {
    $result = $apiInstance->getFormNotifications($page, $per_page, $sort, $direction, $site_id, $form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getFormNotifications: ', $e->getMessage(), PHP_EOL;
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
| **form_id** | **string**| The form ID to filter the result | [optional] |

### Return type

[**\Staatic\Api\Model\FormNotificationCollection**](../Model/FormNotificationCollection.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormSubmissionById()`

```php
getFormSubmissionById($id): \Staatic\Api\Model\FormSubmission
```

Gets a form submission by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form submission ID

try {
    $result = $apiInstance->getFormSubmissionById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getFormSubmissionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form submission ID | |

### Return type

[**\Staatic\Api\Model\FormSubmission**](../Model/FormSubmission.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormSubmissions()`

```php
getFormSubmissions($page, $per_page, $sort, $direction, $site_id, $form_id, $status, $query): \Staatic\Api\Model\FormSubmissionCollection
```

Gets a collection of form submissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
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
$form_id = 'form_id_example'; // string | The form ID to filter the result
$status = 'status_example'; // string | The form submission status to filter the result
$query = 'query_example'; // string | Search query to filter the result

try {
    $result = $apiInstance->getFormSubmissions($page, $per_page, $sort, $direction, $site_id, $form_id, $status, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getFormSubmissions: ', $e->getMessage(), PHP_EOL;
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
| **form_id** | **string**| The form ID to filter the result | [optional] |
| **status** | **string**| The form submission status to filter the result | [optional] |
| **query** | **string**| Search query to filter the result | [optional] |

### Return type

[**\Staatic\Api\Model\FormSubmissionCollection**](../Model/FormSubmissionCollection.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormTemplateById()`

```php
getFormTemplateById($id): \Staatic\Api\Model\FormTemplate
```

Gets a form template by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form template ID

try {
    $result = $apiInstance->getFormTemplateById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getFormTemplateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form template ID | |

### Return type

[**\Staatic\Api\Model\FormTemplate**](../Model/FormTemplate.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormTemplates()`

```php
getFormTemplates($page, $per_page, $sort, $direction, $name, $query): \Staatic\Api\Model\FormTemplateCollection
```

Gets a collection of form templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The page of items to return
$per_page = 56; // int | The number of items to return per page
$sort = 'sort_example'; // string | The field to sort the results by
$direction = 'direction_example'; // string | The direction to sort the results by
$name = 'name_example'; // string | The template name to filter the result
$query = 'query_example'; // string | Search query to filter the result

try {
    $result = $apiInstance->getFormTemplates($page, $per_page, $sort, $direction, $name, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getFormTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The page of items to return | [optional] |
| **per_page** | **int**| The number of items to return per page | [optional] |
| **sort** | **string**| The field to sort the results by | [optional] |
| **direction** | **string**| The direction to sort the results by | [optional] |
| **name** | **string**| The template name to filter the result | [optional] |
| **query** | **string**| Search query to filter the result | [optional] |

### Return type

[**\Staatic\Api\Model\FormTemplateCollection**](../Model/FormTemplateCollection.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getForms()`

```php
getForms($page, $per_page, $sort, $direction, $site_id, $name, $query): \Staatic\Api\Model\FormCollection
```

Gets a collection of forms

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
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
$name = 'name_example'; // string | The form name to filter the result
$query = 'query_example'; // string | Search query to filter the result

try {
    $result = $apiInstance->getForms($page, $per_page, $sort, $direction, $site_id, $name, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getForms: ', $e->getMessage(), PHP_EOL;
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
| **name** | **string**| The form name to filter the result | [optional] |
| **query** | **string**| Search query to filter the result | [optional] |

### Return type

[**\Staatic\Api\Model\FormCollection**](../Model/FormCollection.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateForm()`

```php
updateForm($id, $update_form_request): \Staatic\Api\Model\Form
```

Updates an existing form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form ID
$update_form_request = new \Staatic\Api\Model\UpdateFormRequest(); // \Staatic\Api\Model\UpdateFormRequest | Form properties that need to be updated

try {
    $result = $apiInstance->updateForm($id, $update_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form ID | |
| **update_form_request** | [**\Staatic\Api\Model\UpdateFormRequest**](../Model/UpdateFormRequest.md)| Form properties that need to be updated | [optional] |

### Return type

[**\Staatic\Api\Model\Form**](../Model/Form.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFormNotification()`

```php
updateFormNotification($id, $update_form_notification_request): \Staatic\Api\Model\FormNotification
```

Updates an existing form notification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form notification ID
$update_form_notification_request = new \Staatic\Api\Model\UpdateFormNotificationRequest(); // \Staatic\Api\Model\UpdateFormNotificationRequest | Form notification properties that need to be updated

try {
    $result = $apiInstance->updateFormNotification($id, $update_form_notification_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateFormNotification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form notification ID | |
| **update_form_notification_request** | [**\Staatic\Api\Model\UpdateFormNotificationRequest**](../Model/UpdateFormNotificationRequest.md)| Form notification properties that need to be updated | [optional] |

### Return type

[**\Staatic\Api\Model\FormNotification**](../Model/FormNotification.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFormSubmission()`

```php
updateFormSubmission($id, $update_form_submission_request): \Staatic\Api\Model\FormSubmission
```

Updates an existing form submission

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form submission ID
$update_form_submission_request = new \Staatic\Api\Model\UpdateFormSubmissionRequest(); // \Staatic\Api\Model\UpdateFormSubmissionRequest | Form submission properties that need to be updated

try {
    $result = $apiInstance->updateFormSubmission($id, $update_form_submission_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateFormSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form submission ID | |
| **update_form_submission_request** | [**\Staatic\Api\Model\UpdateFormSubmissionRequest**](../Model/UpdateFormSubmissionRequest.md)| Form submission properties that need to be updated | [optional] |

### Return type

[**\Staatic\Api\Model\FormSubmission**](../Model/FormSubmission.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFormTemplate()`

```php
updateFormTemplate($id, $update_form_template_request): \Staatic\Api\Model\FormTemplate
```

Updates an existing form template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth_site
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oauth_user
$config = Staatic\Api\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Staatic\Api\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The form template ID
$update_form_template_request = new \Staatic\Api\Model\UpdateFormTemplateRequest(); // \Staatic\Api\Model\UpdateFormTemplateRequest | Form template properties that need to be updated

try {
    $result = $apiInstance->updateFormTemplate($id, $update_form_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateFormTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The form template ID | |
| **update_form_template_request** | [**\Staatic\Api\Model\UpdateFormTemplateRequest**](../Model/UpdateFormTemplateRequest.md)| Form template properties that need to be updated | [optional] |

### Return type

[**\Staatic\Api\Model\FormTemplate**](../Model/FormTemplate.md)

### Authorization

[oauth_site](../../README.md#oauth_site), [oauth_user](../../README.md#oauth_user)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
