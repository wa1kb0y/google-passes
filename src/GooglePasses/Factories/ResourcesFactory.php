<?php

namespace GooglePasses\Factories;

use GooglePasses\Clients\GoogleWalletObjectsService;
use GooglePasses\WalletObjects\Resources\GiftCardClassResource;
use GooglePasses\WalletObjects\Resources\GiftCardObjectResource;
use GooglePasses\WalletObjects\Resources\LoyaltyClassResource;
use GooglePasses\WalletObjects\Resources\LoyaltyObjectResource;

class ResourcesFactory
{
    const LOYALTY_OBJECT = 'loyaltyobject';
    const LOYALTY_CLASS = 'loyaltyclass';
    const GIFTCARD_OBJECT = 'giftcardobject';
    const GIFTCARD_CLASS = 'giftcardclass';

    protected $service;

    public function __construct(GoogleWalletObjectsService $service)
    {
        $this->service = $service;
    }

    public function makeLoyaltyObjectResource()
    {
        return new LoyaltyObjectResource(
            $this->service,
            GoogleWalletObjectsService::SERVICE_NAME,
            self::LOYALTY_OBJECT,
            [
                'methods' => [
                    'addmessage' => [
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'get' => [
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'insert' => [
                        'path' => 'walletobjects/v1/loyaltyObject',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ],
                    'list' => [
                        'path' => 'walletobjects/v1/loyaltyObject',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'classId' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'token' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'maxResults' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ],
                    'modifylinkedofferobjects' => [
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}/modifyLinkedOfferObjects',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'patch' => [
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'update' => [
                        'path' => 'walletobjects/v1/loyaltyObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
    }

    public function makeLoyaltyClassResource()
    {
        return new LoyaltyClassResource(
            $this->service,
            GoogleWalletObjectsService::SERVICE_NAME,
            self::LOYALTY_CLASS,
            [
                'methods' => [
                    'addmessage' => [
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'get' => [
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'insert' => [
                        'path' => 'walletobjects/v1/loyaltyClass',
                        'httpMethod' => 'POST',
                        'parameters' => [],
                    ],
                    'list' => [
                        'path' => 'walletobjects/v1/loyaltyClass',
                        'httpMethod' => 'GET',
                        'parameters' => [
                            'issuerId' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'token' => [
                                'location' => 'query',
                                'type' => 'string',
                            ],
                            'maxResults' => [
                                'location' => 'query',
                                'type' => 'integer',
                            ],
                        ],
                    ],
                    'patch' => [
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                    'update' => [
                        'path' => 'walletobjects/v1/loyaltyClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => [
                            'resourceId' => [
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ],
                        ],
                    ],
                ]
            ]
        );
    }

    public function makeGiftCardObjectResource()
    {
        return new GiftCardObjectResource(
            $this->service,
            GoogleWalletObjectsService::SERVICE_NAME,
            self::GIFTCARD_OBJECT,
            [
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                    'get' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                    'insert' => array(
                        'path' => 'walletobjects/v1/giftCardObject',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),
                    'list' => array(
                        'path' => 'walletobjects/v1/giftCardObject',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'classId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),
                    'patch' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                    'update' => array(
                        'path' => 'walletobjects/v1/giftCardObject/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            ]
        );
    }

    public function makeGiftCardClassResource()
    {
        return new GiftCardClassResource(
            $this->service,
            GoogleWalletObjectsService::SERVICE_NAME,
            self::GIFTCARD_CLASS,
            [
                'methods' => array(
                    'addmessage' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}/addMessage',
                        'httpMethod' => 'POST',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                    'get' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                    'insert' => array(
                        'path' => 'walletobjects/v1/giftCardClass',
                        'httpMethod' => 'POST',
                        'parameters' => array(),
                    ),
                    'list' => array(
                        'path' => 'walletobjects/v1/giftCardClass',
                        'httpMethod' => 'GET',
                        'parameters' => array(
                            'issuerId' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'token' => array(
                                'location' => 'query',
                                'type' => 'string',
                            ),
                            'maxResults' => array(
                                'location' => 'query',
                                'type' => 'integer',
                            ),
                        ),
                    ),
                    'patch' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
                        'httpMethod' => 'PATCH',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                    'update' => array(
                        'path' => 'walletobjects/v1/giftCardClass/{resourceId}',
                        'httpMethod' => 'PUT',
                        'parameters' => array(
                            'resourceId' => array(
                                'location' => 'path',
                                'type' => 'string',
                                'required' => true,
                            ),
                        ),
                    ),
                )
            ]
        );
    }
}