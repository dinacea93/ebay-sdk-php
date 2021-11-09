<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Browse\Services;

class BrowseService extends \DTS\eBaySDK\Browse\Services\BrowseBaseService
{
    const API_VERSION = 'v1';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetItem' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
            'responseClass' => '\DTS\eBaySDK\Browse\Types\GetItemRestResponse',
            'params' => [
                'item_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetItems' => [
            'method' => 'GET',
            'resource' => 'item',
            'responseClass' => '\DTS\eBaySDK\Browse\Types\GetItemsRestResponse',
            'params' => [
                'item_ids' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetItemByLegacyId' => [
            'method' => 'GET',
            'resource' => 'item/get_item_by_legacy_id',
            'responseClass' => '\DTS\eBaySDK\Browse\Types\GetItemByLegacyIdRestResponse',
            'params' => [
                'legacy_item_id' => [
                    'valid' => ['string'],
                    'required' => true
                ],
                'legacy_variation_id' => [
                    'valid' => ['string']
                ],
                'legacy_variation_sku' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetItemsByItemGroup' => [
            'method' => 'GET',
            'resource' => 'item/get_items_by_item_group',
            'responseClass' => '\DTS\eBaySDK\Browse\Types\GetItemsByItemGroupRestResponse',
            'params' => [
                'item_group_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'SearchForItems' => [
            'method' => 'GET',
            'resource' => 'item_summary/search',
            'responseClass' => '\DTS\eBaySDK\Browse\Types\SearchForItemsRestResponse',
            'params' => [
                'aspect_filter' => [
                    'valid' => ['string']
                ],
                'category_ids' => [
                    'valid' => ['string']
                ],
                'epid' => [
                    'valid' => ['string']
                ],
                'fieldgroups' => [
                    'valid' => ['string']
                ],
                'filter' => [
                    'valid' => ['string']
                ],
                'gtin' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'offset' => [
                    'valid' => ['string']
                ],
                'q' => [
                    'valid' => ['string']
                ],
                'sort' => [
                    'valid' => ['string']
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\Browse\Types\GetItemRestRequest $request
     * @return \DTS\eBaySDK\Browse\Types\GetItemRestResponse
     */
    public function getItem(\DTS\eBaySDK\Browse\Types\GetItemRestRequest $request)
    {
        return $this->getItemAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Browse\Types\GetItemRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemAsync(\DTS\eBaySDK\Browse\Types\GetItemRestRequest $request)
    {
        return $this->callOperationAsync('GetItem', $request);
    }

    /**
     * @param \DTS\eBaySDK\Browse\Types\GetItemsRestRequest $request
     * @return \DTS\eBaySDK\Browse\Types\GetItemsRestResponse
     */
    public function getItems(\DTS\eBaySDK\Browse\Types\GetItemsRestRequest $request)
    {
        return $this->getItemsAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Browse\Types\GetItemsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemsAsync(\DTS\eBaySDK\Browse\Types\GetItemsRestRequest $request)
    {
        return $this->callOperationAsync('GetItems', $request);
    }

    /**
     * @param \DTS\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request
     * @return \DTS\eBaySDK\Browse\Types\GetItemByLegacyIdRestResponse
     */
    public function getItemByLegacyId(\DTS\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request)
    {
        return $this->getItemByLegacyIdAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemByLegacyIdAsync(\DTS\eBaySDK\Browse\Types\GetItemByLegacyIdRestRequest $request)
    {
        return $this->callOperationAsync('GetItemByLegacyId', $request);
    }

    /**
     * @param \DTS\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request
     * @return \DTS\eBaySDK\Browse\Types\GetItemsByItemGroupRestResponse
     */
    public function getItemsByItemGroup(\DTS\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request)
    {
        return $this->getItemsByItemGroupAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemsByItemGroupAsync(\DTS\eBaySDK\Browse\Types\GetItemsByItemGroupRestRequest $request)
    {
        return $this->callOperationAsync('GetItemsByItemGroup', $request);
    }

    /**
     * @param \DTS\eBaySDK\Browse\Types\SearchForItemsRestRequest $request
     * @return \DTS\eBaySDK\Browse\Types\SearchForItemsRestResponse
     */
    public function searchForItems(\DTS\eBaySDK\Browse\Types\SearchForItemsRestRequest $request)
    {
        return $this->searchForItemsAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Browse\Types\SearchForItemsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchForItemsAsync(\DTS\eBaySDK\Browse\Types\SearchForItemsRestRequest $request)
    {
        return $this->callOperationAsync('SearchForItems', $request);
    }
}
