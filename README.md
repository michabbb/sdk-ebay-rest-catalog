# sdk-ebay-rest-catalog

The Catalog API allows users to search for and locate an eBay catalog product that is a direct match for the product that they wish to sell. Listing against an eBay catalog product helps insure that all listings (based off of that catalog product) have complete and accurate information. In addition to helping to create high-quality listings, another benefit to the seller of using catalog information to create listings is that much of the details of the listing will be prefilled, including the listing title, the listing description, the item specifics, and a stock image for the product (if available). Sellers will not have to enter item specifics themselves, and the overall listing process is a lot faster and easier.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/macropage/sdk-ebay-rest-catalog.git"
    }
  ],
  "require": {
    "macropage/sdk-ebay-rest-catalog": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/sdk-ebay-rest-catalog/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\catalog\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\catalog\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$epid = 'epid_example'; // string | The ePID of the product being requested. This value can be discovered by issuing the <b>search</b> method and examining the value of the <b>productSummaries.epid</b> field for the desired returned product summary.
$xEBAYCMARKETPLACEID = 'xEBAYCMARKETPLACEID_example'; // string | This method also uses the <code>X-EBAY-C-MARKETPLACE-ID</code> header to identify the seller's eBay marketplace. It is required for all marketplaces except EBAY_US, which is the default. <b>Note:</b> This method is limited to <code>EBAY_US</code>, <code>EBAY_AU</code>, <code>EBAY_CA</code>, and <code>EBAY_GB</code> values.

try {
    $result = $apiInstance->getProduct($epid, $xEBAYCMARKETPLACEID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getProduct: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/commerce/catalog/v1_beta*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ProductApi* | [**getProduct**](docs/Api/ProductApi.md#getproduct) | **GET** /product/{epid} | 
*ProductSummaryApi* | [**search**](docs/Api/ProductSummaryApi.md#search) | **GET** /product_summary/search | 

## Models

- [Aspect](docs/Model/Aspect.md)
- [AspectDistribution](docs/Model/AspectDistribution.md)
- [AspectValueDistribution](docs/Model/AspectValueDistribution.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [Image](docs/Model/Image.md)
- [Product](docs/Model/Product.md)
- [ProductSearchResponse](docs/Model/ProductSearchResponse.md)
- [ProductSummary](docs/Model/ProductSummary.md)
- [Refinement](docs/Model/Refinement.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/commerce.catalog.readonly**: This scope would allow signed in user to read catalog data.
    - **https://api.ebay.com/oauth/api_scope/sell.inventory**: View and manage your inventory and offers

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1_beta.5.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`