# Staatic API client for PHP

This is the Staatic API. You can find out more about Staatic at [https://staatic.com](https://staatic.com).

For more information, please visit [https://staatic.com/support](https://staatic.com/support).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0+.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), run:

`composer require staatic/staatic-api-php`

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.staatic.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**createSite**](docs/Api/AccountApi.md#createsite) | **POST** /v1/sites | Creates a new site
*AccountApi* | [**deleteSite**](docs/Api/AccountApi.md#deletesite) | **DELETE** /v1/sites/{id} | Deletes an existing site
*AccountApi* | [**getPlugins**](docs/Api/AccountApi.md#getplugins) | **GET** /v1/plugins | Gets a collection of plugins
*AccountApi* | [**getSiteById**](docs/Api/AccountApi.md#getsitebyid) | **GET** /v1/sites/{id} | Gets a site by ID
*AccountApi* | [**getSites**](docs/Api/AccountApi.md#getsites) | **GET** /v1/sites | Gets a collection of sites
*AccountApi* | [**getSubscriptions**](docs/Api/AccountApi.md#getsubscriptions) | **GET** /v1/subscriptions | Gets a collection of subscriptions
*AccountApi* | [**updateSite**](docs/Api/AccountApi.md#updatesite) | **PATCH** /v1/sites/{id} | Updates an existing site
*DeploymentsApi* | [**createDeployment**](docs/Api/DeploymentsApi.md#createdeployment) | **POST** /v1/deployments | Creates a new deployment
*DeploymentsApi* | [**getDeploymentById**](docs/Api/DeploymentsApi.md#getdeploymentbyid) | **GET** /v1/deployments/{id} | Gets a deployment by ID
*DeploymentsApi* | [**getDeployments**](docs/Api/DeploymentsApi.md#getdeployments) | **GET** /v1/deployments | Gets a collection of deployments
*DeploymentsApi* | [**getSiteFiles**](docs/Api/DeploymentsApi.md#getsitefiles) | **GET** /v1/sites/{id}/files | Gets a collection of deployment files for the specified site
*DeploymentsApi* | [**updateDeployment**](docs/Api/DeploymentsApi.md#updatedeployment) | **PATCH** /v1/deployments/{id} | Updates an existing deployment
*DeploymentsApi* | [**uploadDeploymentFile**](docs/Api/DeploymentsApi.md#uploaddeploymentfile) | **PUT** /v1/deployments/{id}/files/{path} | Uploads a deployment file
*FormsApi* | [**createForm**](docs/Api/FormsApi.md#createform) | **POST** /v1/forms | Creates a new form
*FormsApi* | [**createFormNotification**](docs/Api/FormsApi.md#createformnotification) | **POST** /v1/form-notifications | Creates a new form notification
*FormsApi* | [**createFormSubmission**](docs/Api/FormsApi.md#createformsubmission) | **POST** /v1/form-submissions | Creates a new form submission
*FormsApi* | [**createFormTemplate**](docs/Api/FormsApi.md#createformtemplate) | **POST** /v1/form-templates | Creates a new form template
*FormsApi* | [**deleteForm**](docs/Api/FormsApi.md#deleteform) | **DELETE** /v1/forms/{id} | Deletes an existing form
*FormsApi* | [**deleteFormNotification**](docs/Api/FormsApi.md#deleteformnotification) | **DELETE** /v1/form-notifications/{id} | Deletes an existing form notification
*FormsApi* | [**deleteFormSubmission**](docs/Api/FormsApi.md#deleteformsubmission) | **DELETE** /v1/form-submissions/{id} | Deletes an existing form submission
*FormsApi* | [**deleteFormTemplate**](docs/Api/FormsApi.md#deleteformtemplate) | **DELETE** /v1/form-templates/{id} | Deletes an existing form template
*FormsApi* | [**getFormById**](docs/Api/FormsApi.md#getformbyid) | **GET** /v1/forms/{id} | Gets a form by ID
*FormsApi* | [**getFormNotificationById**](docs/Api/FormsApi.md#getformnotificationbyid) | **GET** /v1/form-notifications/{id} | Gets a form notification by ID
*FormsApi* | [**getFormNotifications**](docs/Api/FormsApi.md#getformnotifications) | **GET** /v1/form-notifications | Gets a collection of form notifications
*FormsApi* | [**getFormSubmissionById**](docs/Api/FormsApi.md#getformsubmissionbyid) | **GET** /v1/form-submissions/{id} | Gets a form submission by ID
*FormsApi* | [**getFormSubmissions**](docs/Api/FormsApi.md#getformsubmissions) | **GET** /v1/form-submissions | Gets a collection of form submissions
*FormsApi* | [**getFormTemplateById**](docs/Api/FormsApi.md#getformtemplatebyid) | **GET** /v1/form-templates/{id} | Gets a form template by ID
*FormsApi* | [**getFormTemplates**](docs/Api/FormsApi.md#getformtemplates) | **GET** /v1/form-templates | Gets a collection of form templates
*FormsApi* | [**getForms**](docs/Api/FormsApi.md#getforms) | **GET** /v1/forms | Gets a collection of forms
*FormsApi* | [**updateForm**](docs/Api/FormsApi.md#updateform) | **PATCH** /v1/forms/{id} | Updates an existing form
*FormsApi* | [**updateFormNotification**](docs/Api/FormsApi.md#updateformnotification) | **PATCH** /v1/form-notifications/{id} | Updates an existing form notification
*FormsApi* | [**updateFormSubmission**](docs/Api/FormsApi.md#updateformsubmission) | **PATCH** /v1/form-submissions/{id} | Updates an existing form submission
*FormsApi* | [**updateFormTemplate**](docs/Api/FormsApi.md#updateformtemplate) | **PATCH** /v1/form-templates/{id} | Updates an existing form template
*SearchApi* | [**clearSearchIndexByName**](docs/Api/SearchApi.md#clearsearchindexbyname) | **POST** /v1/search-indices/{index}/clear | Clears a search index by name
*SearchApi* | [**createSearchIndex**](docs/Api/SearchApi.md#createsearchindex) | **POST** /v1/search-indices | Creates a new search index
*SearchApi* | [**deleteSearchIndex**](docs/Api/SearchApi.md#deletesearchindex) | **DELETE** /v1/search-indices/{index} | Deletes an existing search index
*SearchApi* | [**deleteSearchRecord**](docs/Api/SearchApi.md#deletesearchrecord) | **DELETE** /v1/search-indices/{index}/{id} | Deletes an existing search record
*SearchApi* | [**deleteSearchRecords**](docs/Api/SearchApi.md#deletesearchrecords) | **POST** /v1/search-indices/{index}/delete | Deletes search records from the specified search index
*SearchApi* | [**getSearchIndexByName**](docs/Api/SearchApi.md#getsearchindexbyname) | **GET** /v1/search-indices/{index} | Gets a search index by name
*SearchApi* | [**getSearchIndices**](docs/Api/SearchApi.md#getsearchindices) | **GET** /v1/search-indices | Gets a collection of search indices
*SearchApi* | [**importSearchRecords**](docs/Api/SearchApi.md#importsearchrecords) | **POST** /v1/search-indices/{index}/import | Imports search records into the specified search index
*SearchApi* | [**search**](docs/Api/SearchApi.md#search) | **POST** /v1/search/{index} | Performs a search query on the specified search index
*SearchApi* | [**updateSearchIndex**](docs/Api/SearchApi.md#updatesearchindex) | **PATCH** /v1/search-indices/{index} | Updates an existing search index

## Models

- [CreateDeploymentRequest](docs/Model/CreateDeploymentRequest.md)
- [CreateFormNotificationRequest](docs/Model/CreateFormNotificationRequest.md)
- [CreateFormRequest](docs/Model/CreateFormRequest.md)
- [CreateFormSubmissionRequest](docs/Model/CreateFormSubmissionRequest.md)
- [CreateFormTemplateRequest](docs/Model/CreateFormTemplateRequest.md)
- [CreateSearchIndexRequest](docs/Model/CreateSearchIndexRequest.md)
- [CreateSiteRequest](docs/Model/CreateSiteRequest.md)
- [DeleteSearchRecordsRequest](docs/Model/DeleteSearchRecordsRequest.md)
- [Deployment](docs/Model/Deployment.md)
- [DeploymentCollection](docs/Model/DeploymentCollection.md)
- [DeploymentFile](docs/Model/DeploymentFile.md)
- [DeploymentFileCollection](docs/Model/DeploymentFileCollection.md)
- [Error](docs/Model/Error.md)
- [Form](docs/Model/Form.md)
- [FormCollection](docs/Model/FormCollection.md)
- [FormNotification](docs/Model/FormNotification.md)
- [FormNotificationCollection](docs/Model/FormNotificationCollection.md)
- [FormSubmission](docs/Model/FormSubmission.md)
- [FormSubmissionCollection](docs/Model/FormSubmissionCollection.md)
- [FormTemplate](docs/Model/FormTemplate.md)
- [FormTemplateCollection](docs/Model/FormTemplateCollection.md)
- [ImportSearchRecordsRequest](docs/Model/ImportSearchRecordsRequest.md)
- [Links](docs/Model/Links.md)
- [Meta](docs/Model/Meta.md)
- [Plugin](docs/Model/Plugin.md)
- [PluginCollection](docs/Model/PluginCollection.md)
- [PluginLastVersion](docs/Model/PluginLastVersion.md)
- [SearchIndex](docs/Model/SearchIndex.md)
- [SearchIndexCollection](docs/Model/SearchIndexCollection.md)
- [SearchItem](docs/Model/SearchItem.md)
- [SearchRequest](docs/Model/SearchRequest.md)
- [Site](docs/Model/Site.md)
- [SiteCollection](docs/Model/SiteCollection.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionCollection](docs/Model/SubscriptionCollection.md)
- [UnprocessableError](docs/Model/UnprocessableError.md)
- [UpdateDeploymentRequest](docs/Model/UpdateDeploymentRequest.md)
- [UpdateFormNotificationRequest](docs/Model/UpdateFormNotificationRequest.md)
- [UpdateFormRequest](docs/Model/UpdateFormRequest.md)
- [UpdateFormSubmissionRequest](docs/Model/UpdateFormSubmissionRequest.md)
- [UpdateFormTemplateRequest](docs/Model/UpdateFormTemplateRequest.md)
- [UpdateSearchIndexRequest](docs/Model/UpdateSearchIndexRequest.md)
- [UpdateSiteRequest](docs/Model/UpdateSiteRequest.md)

## Authorization

Authentication schemes defined for the API:
### oauth_site

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

### oauth_user

- **Type**: `OAuth`
- **Flow**: `password`
- **Authorization URL**: ``
- **Scopes**: 
    - **manage-deployments**: Manage deployments
    - **manage-forms**: Manage forms
    - **manage-sites**: Manage sites
    - **manage-search**: Manage search

### public_api_key

- **Type**: API key
- **API key parameter name**: X-Staatic-API-Key
- **Location**: HTTP header


## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.2`
    - Package version: `1.0.2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
