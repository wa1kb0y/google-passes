<?php

namespace GooglePasses\WalletObjects\Objects;

use Google_Collection;
use GooglePasses\WalletObjects\Classes\GiftCardClass;
use GooglePasses\WalletObjects\Collections\InfoModuleData;
use GooglePasses\WalletObjects\Collections\LinksModuleData;
use GooglePasses\WalletObjects\Models\AppLinkData;
use GooglePasses\WalletObjects\Models\Barcode;
use GooglePasses\WalletObjects\Models\DateTime;
use GooglePasses\WalletObjects\Models\ImageModuleData;
use GooglePasses\WalletObjects\Models\LatLongPoint;
use GooglePasses\WalletObjects\Models\Message;
use GooglePasses\WalletObjects\Models\Money;

class GiftCardObject extends Google_Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array(
    );
    protected $appLinkDataType = AppLinkData::class;
    protected $appLinkDataDataType = '';
    
    protected $balanceType = Money::class;
    protected $balanceDataType = '';
    protected $balanceUpdateTimeType = DateTime::class;
    protected $balanceUpdateTimeDataType = '';
    
    protected $barcodeType = Barcode::class;
    protected $barcodeDataType = '';
    
    public $cardNumber;
    public $classId;
    
    protected $classReferenceType = GiftCardClass::class;
    protected $classReferenceDataType = '';
    
    public $disableExpirationNotification;
    public $eventNumber;
    public $hasLinkedDevice;
    public $hasUsers;
    public $id;
    
    protected $imageModulesDataType = ImageModuleData::class;
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = InfoModuleData::class;
    protected $infoModuleDataDataType = '';
    
    public $kind;
    
    protected $linksModuleDataType = LinksModuleData::class;
    protected $linksModuleDataDataType = '';
    protected $locationsType = LatLongPoint::class;
    protected $locationsDataType = 'array';
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';
    
    public $pin;
    public $smartTapRedemptionValue;
    public $state;
    
    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';
    protected $validTimeIntervalType = TimeInterval::class;
    protected $validTimeIntervalDataType = '';
    
    public $version;


    public function setAppLinkData(AppLinkData $appLinkData)
    {
        $this->appLinkData = $appLinkData;
    }
    public function getAppLinkData()
    {
        return $this->appLinkData;
    }
    public function setBalance(Money $balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function setBalanceUpdateTime(DateTime $balanceUpdateTime)
    {
        $this->balanceUpdateTime = $balanceUpdateTime;
    }
    public function getBalanceUpdateTime()
    {
        return $this->balanceUpdateTime;
    }
    public function setBarcode(Barcode $barcode)
    {
        $this->barcode = $barcode;
    }
    public function getBarcode()
    {
        return $this->barcode;
    }
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }
    public function getCardNumber()
    {
        return $this->cardNumber;
    }
    public function setClassId($classId)
    {
        $this->classId = $classId;
    }
    public function getClassId()
    {
        return $this->classId;
    }
    public function setClassReference(GiftCardClass $classReference)
    {
        $this->classReference = $classReference;
    }
    public function getClassReference()
    {
        return $this->classReference;
    }
    public function setDisableExpirationNotification($disableExpirationNotification)
    {
        $this->disableExpirationNotification = $disableExpirationNotification;
    }
    public function getDisableExpirationNotification()
    {
        return $this->disableExpirationNotification;
    }
    public function setEventNumber($eventNumber)
    {
        $this->eventNumber = $eventNumber;
    }
    public function getEventNumber()
    {
        return $this->eventNumber;
    }
    public function setHasLinkedDevice($hasLinkedDevice)
    {
        $this->hasLinkedDevice = $hasLinkedDevice;
    }
    public function getHasLinkedDevice()
    {
        return $this->hasLinkedDevice;
    }
    public function setHasUsers($hasUsers)
    {
        $this->hasUsers = $hasUsers;
    }
    public function getHasUsers()
    {
        return $this->hasUsers;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImageModulesData($imageModulesData)
    {
        $this->imageModulesData = $imageModulesData;
    }
    public function getImageModulesData()
    {
        return $this->imageModulesData;
    }
    public function setInfoModuleData(InfoModuleData $infoModuleData)
    {
        $this->infoModuleData = $infoModuleData;
    }
    public function getInfoModuleData()
    {
        return $this->infoModuleData;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLinksModuleData(LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }
    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    public function setPin($pin)
    {
        $this->pin = $pin;
    }
    public function getPin()
    {
        return $this->pin;
    }
    public function setSmartTapRedemptionValue($smartTapRedemptionValue)
    {
        $this->smartTapRedemptionValue = $smartTapRedemptionValue;
    }
    public function getSmartTapRedemptionValue()
    {
        return $this->smartTapRedemptionValue;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
    }
    public function setValidTimeInterval(TimeInterval $validTimeInterval)
    {
        $this->validTimeInterval = $validTimeInterval;
    }
    public function getValidTimeInterval()
    {
        return $this->validTimeInterval;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
}