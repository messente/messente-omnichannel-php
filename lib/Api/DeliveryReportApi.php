<?php
/**
 * DeliveryReportApi
 * PHP version 5
 *
 * @category Class
 * @package  Messente\Omnichannel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Omnichannel API
 *
 * Messente's API which allows sending messages via various channels with fallback options.
 *
 * OpenAPI spec version: 0.0.2
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Omnichannel\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Messente\Omnichannel\ApiException;
use Messente\Omnichannel\Configuration;
use Messente\Omnichannel\HeaderSelector;
use Messente\Omnichannel\ObjectSerializer;

/**
 * DeliveryReportApi Class Doc Comment
 *
 * @category Class
 * @package  Messente\Omnichannel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DeliveryReportApi
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

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation retrieveDeliveryReport
     *
     * Retrieves the delivery report for the Omnimessage
     *
     * @param  string $omnimessageId UUID of the Omnimessage to for which the delivery report is to be retrieved (required)
     *
     * @throws \Messente\Omnichannel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Messente\Omnichannel\Model\DeliveryReportResponse|\Messente\Omnichannel\Model\ErrorResponse
     */
    public function retrieveDeliveryReport($omnimessageId)
    {
        list($response) = $this->retrieveDeliveryReportWithHttpInfo($omnimessageId);
        return $response;
    }

    /**
     * Operation retrieveDeliveryReportWithHttpInfo
     *
     * Retrieves the delivery report for the Omnimessage
     *
     * @param  string $omnimessageId UUID of the Omnimessage to for which the delivery report is to be retrieved (required)
     *
     * @throws \Messente\Omnichannel\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Messente\Omnichannel\Model\DeliveryReportResponse|\Messente\Omnichannel\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveDeliveryReportWithHttpInfo($omnimessageId)
    {
        $request = $this->retrieveDeliveryReportRequest($omnimessageId);

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
            switch($statusCode) {
                case 200:
                    if ('\Messente\Omnichannel\Model\DeliveryReportResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Messente\Omnichannel\Model\DeliveryReportResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Messente\Omnichannel\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Messente\Omnichannel\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Messente\Omnichannel\Model\DeliveryReportResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
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
                        '\Messente\Omnichannel\Model\DeliveryReportResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Messente\Omnichannel\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation retrieveDeliveryReportAsync
     *
     * Retrieves the delivery report for the Omnimessage
     *
     * @param  string $omnimessageId UUID of the Omnimessage to for which the delivery report is to be retrieved (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveDeliveryReportAsync($omnimessageId)
    {
        return $this->retrieveDeliveryReportAsyncWithHttpInfo($omnimessageId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation retrieveDeliveryReportAsyncWithHttpInfo
     *
     * Retrieves the delivery report for the Omnimessage
     *
     * @param  string $omnimessageId UUID of the Omnimessage to for which the delivery report is to be retrieved (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function retrieveDeliveryReportAsyncWithHttpInfo($omnimessageId)
    {
        $returnType = '\Messente\Omnichannel\Model\DeliveryReportResponse';
        $request = $this->retrieveDeliveryReportRequest($omnimessageId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
     * Create request for operation 'retrieveDeliveryReport'
     *
     * @param  string $omnimessageId UUID of the Omnimessage to for which the delivery report is to be retrieved (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function retrieveDeliveryReportRequest($omnimessageId)
    {
        // verify the required parameter 'omnimessageId' is set
        if ($omnimessageId === null || (is_array($omnimessageId) && count($omnimessageId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $omnimessageId when calling retrieveDeliveryReport'
            );
        }

        $resourcePath = '/omnimessage/{omnimessage_id}/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($omnimessageId !== null) {
            $resourcePath = str_replace(
                '{' . 'omnimessage_id' . '}',
                ObjectSerializer::toPathValue($omnimessageId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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
