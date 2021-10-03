<?php
/**
 * SysTelemetryApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ecedo API
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
 * SysTelemetryApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SysTelemetryApi
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
     * Operation sysTelemetryGetMeansOfProductionTelemetryById
     *
     * Opvragen telemetrie van productiemiddel door middel van het ID van de aansluiting
     *
     * @param  string $id Connection GUID of EAN (required)
     * @param  \DateTime $start_date Vanaf datum (dag) (required)
     * @param  \DateTime $end_date Tot datum (dag) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[]
     */
    public function sysTelemetryGetMeansOfProductionTelemetryById($id, $start_date, $end_date)
    {
        list($response) = $this->sysTelemetryGetMeansOfProductionTelemetryByIdWithHttpInfo($id, $start_date, $end_date);
        return $response;
    }

    /**
     * Operation sysTelemetryGetMeansOfProductionTelemetryByIdWithHttpInfo
     *
     * Opvragen telemetrie van productiemiddel door middel van het ID van de aansluiting
     *
     * @param  string $id Connection GUID of EAN (required)
     * @param  \DateTime $start_date Vanaf datum (dag) (required)
     * @param  \DateTime $end_date Tot datum (dag) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[], HTTP status code, HTTP response headers (array of strings)
     */
    public function sysTelemetryGetMeansOfProductionTelemetryByIdWithHttpInfo($id, $start_date, $end_date)
    {
        $returnType = '\Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[]';
        $request = $this->sysTelemetryGetMeansOfProductionTelemetryByIdRequest($id, $start_date, $end_date);

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
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[]',
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
     * Operation sysTelemetryGetMeansOfProductionTelemetryByIdAsync
     *
     * Opvragen telemetrie van productiemiddel door middel van het ID van de aansluiting
     *
     * @param  string $id Connection GUID of EAN (required)
     * @param  \DateTime $start_date Vanaf datum (dag) (required)
     * @param  \DateTime $end_date Tot datum (dag) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysTelemetryGetMeansOfProductionTelemetryByIdAsync($id, $start_date, $end_date)
    {
        return $this->sysTelemetryGetMeansOfProductionTelemetryByIdAsyncWithHttpInfo($id, $start_date, $end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sysTelemetryGetMeansOfProductionTelemetryByIdAsyncWithHttpInfo
     *
     * Opvragen telemetrie van productiemiddel door middel van het ID van de aansluiting
     *
     * @param  string $id Connection GUID of EAN (required)
     * @param  \DateTime $start_date Vanaf datum (dag) (required)
     * @param  \DateTime $end_date Tot datum (dag) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysTelemetryGetMeansOfProductionTelemetryByIdAsyncWithHttpInfo($id, $start_date, $end_date)
    {
        $returnType = '\Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[]';
        $request = $this->sysTelemetryGetMeansOfProductionTelemetryByIdRequest($id, $start_date, $end_date);

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
     * Create request for operation 'sysTelemetryGetMeansOfProductionTelemetryById'
     *
     * @param  string $id Connection GUID of EAN (required)
     * @param  \DateTime $start_date Vanaf datum (dag) (required)
     * @param  \DateTime $end_date Tot datum (dag) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sysTelemetryGetMeansOfProductionTelemetryByIdRequest($id, $start_date, $end_date)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling sysTelemetryGetMeansOfProductionTelemetryById'
            );
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling sysTelemetryGetMeansOfProductionTelemetryById'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling sysTelemetryGetMeansOfProductionTelemetryById'
            );
        }

        $resourcePath = '/sysapi/v1.0/telemetryreadings/meansofproductionconnection/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start_date !== null) {
            $queryParams['startDate'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['endDate'] = ObjectSerializer::toQueryValue($end_date);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
     * Operation sysTelemetryGetTelemetry
     *
     * Opvragen telemetrie aan de hand van een EAN
     *
     * @param  string $ean EAN als referentie van de telemetrie (required)
     * @param  \DateTime $start_date Vanaf datum (dag) (required)
     * @param  \DateTime $end_date Tot datum (dag) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[]
     */
    public function sysTelemetryGetTelemetry($ean, $start_date, $end_date)
    {
        list($response) = $this->sysTelemetryGetTelemetryWithHttpInfo($ean, $start_date, $end_date);
        return $response;
    }

    /**
     * Operation sysTelemetryGetTelemetryWithHttpInfo
     *
     * Opvragen telemetrie aan de hand van een EAN
     *
     * @param  string $ean EAN als referentie van de telemetrie (required)
     * @param  \DateTime $start_date Vanaf datum (dag) (required)
     * @param  \DateTime $end_date Tot datum (dag) (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[], HTTP status code, HTTP response headers (array of strings)
     */
    public function sysTelemetryGetTelemetryWithHttpInfo($ean, $start_date, $end_date)
    {
        $returnType = '\Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[]';
        $request = $this->sysTelemetryGetTelemetryRequest($ean, $start_date, $end_date);

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
                        '\Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[]',
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
     * Operation sysTelemetryGetTelemetryAsync
     *
     * Opvragen telemetrie aan de hand van een EAN
     *
     * @param  string $ean EAN als referentie van de telemetrie (required)
     * @param  \DateTime $start_date Vanaf datum (dag) (required)
     * @param  \DateTime $end_date Tot datum (dag) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysTelemetryGetTelemetryAsync($ean, $start_date, $end_date)
    {
        return $this->sysTelemetryGetTelemetryAsyncWithHttpInfo($ean, $start_date, $end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation sysTelemetryGetTelemetryAsyncWithHttpInfo
     *
     * Opvragen telemetrie aan de hand van een EAN
     *
     * @param  string $ean EAN als referentie van de telemetrie (required)
     * @param  \DateTime $start_date Vanaf datum (dag) (required)
     * @param  \DateTime $end_date Tot datum (dag) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function sysTelemetryGetTelemetryAsyncWithHttpInfo($ean, $start_date, $end_date)
    {
        $returnType = '\Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[]';
        $request = $this->sysTelemetryGetTelemetryRequest($ean, $start_date, $end_date);

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
     * Create request for operation 'sysTelemetryGetTelemetry'
     *
     * @param  string $ean EAN als referentie van de telemetrie (required)
     * @param  \DateTime $start_date Vanaf datum (dag) (required)
     * @param  \DateTime $end_date Tot datum (dag) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function sysTelemetryGetTelemetryRequest($ean, $start_date, $end_date)
    {
        // verify the required parameter 'ean' is set
        if ($ean === null || (is_array($ean) && count($ean) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $ean when calling sysTelemetryGetTelemetry'
            );
        }
        // verify the required parameter 'start_date' is set
        if ($start_date === null || (is_array($start_date) && count($start_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $start_date when calling sysTelemetryGetTelemetry'
            );
        }
        // verify the required parameter 'end_date' is set
        if ($end_date === null || (is_array($end_date) && count($end_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $end_date when calling sysTelemetryGetTelemetry'
            );
        }

        $resourcePath = '/sysapi/v1.0/telemetryreadings/{ean}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($start_date !== null) {
            $queryParams['startDate'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['endDate'] = ObjectSerializer::toQueryValue($end_date);
        }

        // path params
        if ($ean !== null) {
            $resourcePath = str_replace(
                '{' . 'ean' . '}',
                ObjectSerializer::toPathValue($ean),
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

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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
