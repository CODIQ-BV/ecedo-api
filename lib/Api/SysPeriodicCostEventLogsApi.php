<?php
/**
 * SysPeriodicCostEventLogsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ecedo.ERP.UI.Web
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.22
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * SysPeriodicCostEventLogsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SysPeriodicCostEventLogsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation sysPeriodicCostEventLogsGet
     *
     * @param  string $organization_id organization_id (required)
     * @param  \DateTime $event_end_date event_end_date (optional)
     * @param  string $cluster_reference cluster_reference (optional)
     * @param  bool $include_last_year include_last_year (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiPeriodicCostEventLog[]
     */
    public function sysPeriodicCostEventLogsGet($organization_id, $event_end_date = null, $cluster_reference = null, $include_last_year = null)
    {
        list($response) = $this->sysPeriodicCostEventLogsGetWithHttpInfo($organization_id, $event_end_date, $cluster_reference, $include_last_year);
        return $response;
    }

    /**
     * Operation sysPeriodicCostEventLogsGetWithHttpInfo
     *
     * @param  string $organization_id (required)
     * @param  \DateTime $event_end_date (optional)
     * @param  string $cluster_reference (optional)
     * @param  bool $include_last_year (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\EcedoERPCRMInterfaceApiPeriodicCostEventLog[], HTTP status code, HTTP response headers (array of strings)
     */
    public function sysPeriodicCostEventLogsGetWithHttpInfo($organization_id, $event_end_date = null, $cluster_reference = null, $include_last_year = null)
    {
        $returnType = '\Swagger\Client\Model\EcedoERPCRMInterfaceApiPeriodicCostEventLog[]';
        $request = $this->sysPeriodicCostEventLogsGetRequest($organization_id, $event_end_date, $cluster_reference, $include_last_year);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceApiPeriodicCostEventLog[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceApiErrorMessage400',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceApiErrorMessage401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation sysPeriodicCostEventLogsGetAsync
     *
     * 
     *
     * @param  string $organization_id (required)
     * @param  \DateTime $event_end_date (optional)
     * @param  string $cluster_reference (optional)
     * @param  bool $include_last_year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysPeriodicCostEventLogsGetAsync($organization_id, $event_end_date = null, $cluster_reference = null, $include_last_year = null)
    {
        return $this->sysPeriodicCostEventLogsGetAsyncWithHttpInfo($organization_id, $event_end_date, $cluster_reference, $include_last_year)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sysPeriodicCostEventLogsGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $organization_id (required)
     * @param  \DateTime $event_end_date (optional)
     * @param  string $cluster_reference (optional)
     * @param  bool $include_last_year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysPeriodicCostEventLogsGetAsyncWithHttpInfo($organization_id, $event_end_date = null, $cluster_reference = null, $include_last_year = null)
    {
        $returnType = '\Swagger\Client\Model\EcedoERPCRMInterfaceApiPeriodicCostEventLog[]';
        $request = $this->sysPeriodicCostEventLogsGetRequest($organization_id, $event_end_date, $cluster_reference, $include_last_year);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'sysPeriodicCostEventLogsGet'
     *
     * @param  string $organization_id (required)
     * @param  \DateTime $event_end_date (optional)
     * @param  string $cluster_reference (optional)
     * @param  bool $include_last_year (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sysPeriodicCostEventLogsGetRequest($organization_id, $event_end_date = null, $cluster_reference = null, $include_last_year = null)
    {
        // verify the required parameter 'organization_id' is set
        if ($organization_id === null || (is_array($organization_id) && count($organization_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $organization_id when calling sysPeriodicCostEventLogsGet'
            );
        }

        $resourcePath = '/sysapi/v1.0/organizations/{organizationId}/periodiccosteventlogs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($event_end_date !== null) {
            $queryParams['eventEndDate'] = ObjectSerializer::toQueryValue($event_end_date);
        }
        // query params
        if ($cluster_reference !== null) {
            $queryParams['clusterReference'] = ObjectSerializer::toQueryValue($cluster_reference);
        }
        // query params
        if ($include_last_year !== null) {
            $queryParams['includeLastYear'] = ObjectSerializer::toQueryValue($include_last_year);
        }

        // path params
        if ($organization_id !== null) {
            $resourcePath = str_replace(
                '{' . 'organizationId' . '}',
                ObjectSerializer::toPathValue($organization_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
