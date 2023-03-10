<?php
/**
 * ProductApi
 * PHP version 7.4
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\catalog
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Catalog API
 *
 * The Catalog API allows users to search for and locate an eBay catalog product that is a direct match for the product that they wish to sell. Listing against an eBay catalog product helps insure that all listings (based off of that catalog product) have complete and accurate information. In addition to helping to create high-quality listings, another benefit to the seller of using catalog information to create listings is that much of the details of the listing will be prefilled, including the listing title, the listing description, the item specifics, and a stock image for the product (if available). Sellers will not have to enter item specifics themselves, and the overall listing process is a lot faster and easier.
 *
 * The version of the OpenAPI document: v1_beta.5.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\catalog\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use macropage\SDKs\ebay\rest\catalog\ApiException;
use macropage\SDKs\ebay\rest\catalog\Configuration;
use macropage\SDKs\ebay\rest\catalog\HeaderSelector;
use macropage\SDKs\ebay\rest\catalog\ObjectSerializer;

/**
 * ProductApi Class Doc Comment
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\catalog
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'getProduct' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getProduct
     *
     * @param  string $epid The ePID of the product being requested. This value can be discovered by issuing the &lt;b&gt;search&lt;/b&gt; method and examining the value of the &lt;b&gt;productSummaries.epid&lt;/b&gt; field for the desired returned product summary. (required)
     * @param  string $xEBAYCMARKETPLACEID This method also uses the &lt;code&gt;X-EBAY-C-MARKETPLACE-ID&lt;/code&gt; header to identify the seller&#39;s eBay marketplace. It is required for all marketplaces except EBAY_US, which is the default. &lt;b&gt;Note:&lt;/b&gt; This method is limited to &lt;code&gt;EBAY_US&lt;/code&gt;, &lt;code&gt;EBAY_AU&lt;/code&gt;, &lt;code&gt;EBAY_CA&lt;/code&gt;, and &lt;code&gt;EBAY_GB&lt;/code&gt; values. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getProduct'] to see the possible values for this operation
     *
     * @throws \macropage\SDKs\ebay\rest\catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \macropage\SDKs\ebay\rest\catalog\Model\Product
     */
    public function getProduct($epid, $xEBAYCMARKETPLACEID = null, string $contentType = self::contentTypes['getProduct'][0])
    {
        list($response) = $this->getProductWithHttpInfo($epid, $xEBAYCMARKETPLACEID, $contentType);
        return $response;
    }

    /**
     * Operation getProductWithHttpInfo
     *
     * @param  string $epid The ePID of the product being requested. This value can be discovered by issuing the &lt;b&gt;search&lt;/b&gt; method and examining the value of the &lt;b&gt;productSummaries.epid&lt;/b&gt; field for the desired returned product summary. (required)
     * @param  string $xEBAYCMARKETPLACEID This method also uses the &lt;code&gt;X-EBAY-C-MARKETPLACE-ID&lt;/code&gt; header to identify the seller&#39;s eBay marketplace. It is required for all marketplaces except EBAY_US, which is the default. &lt;b&gt;Note:&lt;/b&gt; This method is limited to &lt;code&gt;EBAY_US&lt;/code&gt;, &lt;code&gt;EBAY_AU&lt;/code&gt;, &lt;code&gt;EBAY_CA&lt;/code&gt;, and &lt;code&gt;EBAY_GB&lt;/code&gt; values. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getProduct'] to see the possible values for this operation
     *
     * @throws \macropage\SDKs\ebay\rest\catalog\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \macropage\SDKs\ebay\rest\catalog\Model\Product, HTTP status code, HTTP response headers (array of strings)
     */
    public function getProductWithHttpInfo($epid, $xEBAYCMARKETPLACEID = null, string $contentType = self::contentTypes['getProduct'][0])
    {
        $request = $this->getProductRequest($epid, $xEBAYCMARKETPLACEID, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\macropage\SDKs\ebay\rest\catalog\Model\Product' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\macropage\SDKs\ebay\rest\catalog\Model\Product' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\macropage\SDKs\ebay\rest\catalog\Model\Product', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\macropage\SDKs\ebay\rest\catalog\Model\Product';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\macropage\SDKs\ebay\rest\catalog\Model\Product',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getProductAsync
     *
     * @param  string $epid The ePID of the product being requested. This value can be discovered by issuing the &lt;b&gt;search&lt;/b&gt; method and examining the value of the &lt;b&gt;productSummaries.epid&lt;/b&gt; field for the desired returned product summary. (required)
     * @param  string $xEBAYCMARKETPLACEID This method also uses the &lt;code&gt;X-EBAY-C-MARKETPLACE-ID&lt;/code&gt; header to identify the seller&#39;s eBay marketplace. It is required for all marketplaces except EBAY_US, which is the default. &lt;b&gt;Note:&lt;/b&gt; This method is limited to &lt;code&gt;EBAY_US&lt;/code&gt;, &lt;code&gt;EBAY_AU&lt;/code&gt;, &lt;code&gt;EBAY_CA&lt;/code&gt;, and &lt;code&gt;EBAY_GB&lt;/code&gt; values. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getProduct'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAsync($epid, $xEBAYCMARKETPLACEID = null, string $contentType = self::contentTypes['getProduct'][0])
    {
        return $this->getProductAsyncWithHttpInfo($epid, $xEBAYCMARKETPLACEID, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getProductAsyncWithHttpInfo
     *
     * @param  string $epid The ePID of the product being requested. This value can be discovered by issuing the &lt;b&gt;search&lt;/b&gt; method and examining the value of the &lt;b&gt;productSummaries.epid&lt;/b&gt; field for the desired returned product summary. (required)
     * @param  string $xEBAYCMARKETPLACEID This method also uses the &lt;code&gt;X-EBAY-C-MARKETPLACE-ID&lt;/code&gt; header to identify the seller&#39;s eBay marketplace. It is required for all marketplaces except EBAY_US, which is the default. &lt;b&gt;Note:&lt;/b&gt; This method is limited to &lt;code&gt;EBAY_US&lt;/code&gt;, &lt;code&gt;EBAY_AU&lt;/code&gt;, &lt;code&gt;EBAY_CA&lt;/code&gt;, and &lt;code&gt;EBAY_GB&lt;/code&gt; values. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getProduct'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAsyncWithHttpInfo($epid, $xEBAYCMARKETPLACEID = null, string $contentType = self::contentTypes['getProduct'][0])
    {
        $returnType = '\macropage\SDKs\ebay\rest\catalog\Model\Product';
        $request = $this->getProductRequest($epid, $xEBAYCMARKETPLACEID, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getProduct'
     *
     * @param  string $epid The ePID of the product being requested. This value can be discovered by issuing the &lt;b&gt;search&lt;/b&gt; method and examining the value of the &lt;b&gt;productSummaries.epid&lt;/b&gt; field for the desired returned product summary. (required)
     * @param  string $xEBAYCMARKETPLACEID This method also uses the &lt;code&gt;X-EBAY-C-MARKETPLACE-ID&lt;/code&gt; header to identify the seller&#39;s eBay marketplace. It is required for all marketplaces except EBAY_US, which is the default. &lt;b&gt;Note:&lt;/b&gt; This method is limited to &lt;code&gt;EBAY_US&lt;/code&gt;, &lt;code&gt;EBAY_AU&lt;/code&gt;, &lt;code&gt;EBAY_CA&lt;/code&gt;, and &lt;code&gt;EBAY_GB&lt;/code&gt; values. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getProduct'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getProductRequest($epid, $xEBAYCMARKETPLACEID = null, string $contentType = self::contentTypes['getProduct'][0])
    {

        // verify the required parameter 'epid' is set
        if ($epid === null || (is_array($epid) && count($epid) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $epid when calling getProduct'
            );
        }



        $resourcePath = '/product/{epid}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($xEBAYCMARKETPLACEID !== null) {
            $headerParams['X-EBAY-C-MARKETPLACE-ID'] = ObjectSerializer::toHeaderValue($xEBAYCMARKETPLACEID);
        }

        // path params
        if ($epid !== null) {
            $resourcePath = str_replace(
                '{' . 'epid' . '}',
                ObjectSerializer::toPathValue($epid),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
