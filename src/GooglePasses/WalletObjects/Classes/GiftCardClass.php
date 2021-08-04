<?php
namespace GooglePasses\WalletObjects\Classes;

use GooglePasses\WalletObjects\Classes\AbstractClass;
use GooglePasses\WalletObjects\Collections\InfoModuleData;
use GooglePasses\WalletObjects\Collections\LinksModuleData;
use GooglePasses\WalletObjects\Collections\LocalizedString;
use GooglePasses\WalletObjects\Models\CallbackOptions;
use GooglePasses\WalletObjects\Models\ClassTemplateInfo;
use GooglePasses\WalletObjects\Models\Image;
use GooglePasses\WalletObjects\Models\ImageModuleData;
use GooglePasses\WalletObjects\Models\LatLongPoint;
use GooglePasses\WalletObjects\Models\Message;
use GooglePasses\WalletObjects\Models\Review;
use GooglePasses\WalletObjects\Models\TextModuleData;
use GooglePasses\WalletObjects\Models\Uri;

class GiftCardClass extends AbstractClass
{
    protected $internal_gapi_mappings = array(
    );
    public $allowBarcodeRedemption;
    public $allowMultipleUsersPerObject;
    protected $callbackOptionsType = CallbackOptions::class;
    protected $callbackOptionsDataType = '';
    public $cardNumberLabel;
    protected $classTemplateInfoType = ClassTemplateInfo::class;
    protected $classTemplateInfoDataType = '';
    public $countryCode;
    public $enableSmartTap;
    public $eventNumberLabel;
    protected $heroImageType = Image::class;
    protected $heroImageDataType = '';
    public $hexBackgroundColor;
    protected $homepageUriType = Uri::class;
    protected $homepageUriDataType = '';
    public $id;
    protected $imageModulesDataType = ImageModuleData::class;
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = InfoModuleData::class;
    protected $infoModuleDataDataType = '';
    public $issuerName;
    public $kind;
    protected $linksModuleDataType = LinksModuleData::class;
    protected $linksModuleDataDataType = '';
    protected $localizedCardNumberLabelType = LocalizedString::class;
    protected $localizedCardNumberLabelDataType = '';
    protected $localizedEventNumberLabelType = LocalizedString::class;
    protected $localizedEventNumberLabelDataType = '';
    protected $localizedIssuerNameType = LocalizedString::class;
    protected $localizedIssuerNameDataType = '';
    protected $localizedMerchantNameType = LocalizedString::class;
    protected $localizedMerchantNameDataType = '';
    protected $localizedPinLabelType = LocalizedString::class;
    protected $localizedPinLabelDataType = '';
    protected $locationsType = LatLongPoint::class;
    protected $locationsDataType = 'array';
    public $merchantName;
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';
    public $multipleDevicesAndHoldersAllowedStatus;
    public $pinLabel;
    protected $programLogoType = Image::class;
    protected $programLogoDataType = '';
    public $redemptionIssuers;
    protected $reviewType = Review::class;
    protected $reviewDataType = '';
    public $reviewStatus;
    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';
    public $version;
    protected $wordMarkType = Image::class;
    protected $wordMarkDataType = '';


    public function setAllowBarcodeRedemption($allowBarcodeRedemption)
    {
        $this->allowBarcodeRedemption = $allowBarcodeRedemption;
    }
    public function getAllowBarcodeRedemption()
    {
        return $this->allowBarcodeRedemption;
    }
    public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
    {
        $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
    }
    public function getAllowMultipleUsersPerObject()
    {
        return $this->allowMultipleUsersPerObject;
    }
    public function setCallbackOptions(CallbackOptions $callbackOptions)
    {
        $this->callbackOptions = $callbackOptions;
    }
    public function getCallbackOptions()
    {
        return $this->callbackOptions;
    }
    public function setCardNumberLabel($cardNumberLabel)
    {
        $this->cardNumberLabel = $cardNumberLabel;
    }
    public function getCardNumberLabel()
    {
        return $this->cardNumberLabel;
    }
    public function setClassTemplateInfo(ClassTemplateInfo $classTemplateInfo)
    {
        $this->classTemplateInfo = $classTemplateInfo;
    }
    public function getClassTemplateInfo()
    {
        return $this->classTemplateInfo;
    }
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }
    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
    }
    public function setEventNumberLabel($eventNumberLabel)
    {
        $this->eventNumberLabel = $eventNumberLabel;
    }
    public function getEventNumberLabel()
    {
        return $this->eventNumberLabel;
    }
    public function setHeroImage(Image $heroImage)
    {
        $this->heroImage = $heroImage;
    }
    public function getHeroImage()
    {
        return $this->heroImage;
    }
    public function setHexBackgroundColor($hexBackgroundColor)
    {
        $this->hexBackgroundColor = $hexBackgroundColor;
    }
    public function getHexBackgroundColor()
    {
        return $this->hexBackgroundColor;
    }
    public function setHomepageUri(Uri $homepageUri)
    {
        $this->homepageUri = $homepageUri;
    }
    public function getHomepageUri()
    {
        return $this->homepageUri;
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
    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
    }
    public function getIssuerName()
    {
        return $this->issuerName;
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
    public function setLocalizedCardNumberLabel(LocalizedString $localizedCardNumberLabel)
    {
        $this->localizedCardNumberLabel = $localizedCardNumberLabel;
    }
    public function getLocalizedCardNumberLabel()
    {
        return $this->localizedCardNumberLabel;
    }
    public function setLocalizedEventNumberLabel(LocalizedString $localizedEventNumberLabel)
    {
        $this->localizedEventNumberLabel = $localizedEventNumberLabel;
    }
    public function getLocalizedEventNumberLabel()
    {
        return $this->localizedEventNumberLabel;
    }
    public function setLocalizedIssuerName(LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }
    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }
    public function setLocalizedMerchantName(LocalizedString $localizedMerchantName)
    {
        $this->localizedMerchantName = $localizedMerchantName;
    }
    public function getLocalizedMerchantName()
    {
        return $this->localizedMerchantName;
    }
    public function setLocalizedPinLabel(LocalizedString $localizedPinLabel)
    {
        $this->localizedPinLabel = $localizedPinLabel;
    }
    public function getLocalizedPinLabel()
    {
        return $this->localizedPinLabel;
    }
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
    }
    public function getMerchantName()
    {
        return $this->merchantName;
    }
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
    {
        $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
    }
    public function getMultipleDevicesAndHoldersAllowedStatus()
    {
        return $this->multipleDevicesAndHoldersAllowedStatus;
    }
    public function setPinLabel($pinLabel)
    {
        $this->pinLabel = $pinLabel;
    }
    public function getPinLabel()
    {
        return $this->pinLabel;
    }
    public function setProgramLogo(Image $programLogo)
    {
        $this->programLogo = $programLogo;
    }
    public function getProgramLogo()
    {
        return $this->programLogo;
    }
    public function setRedemptionIssuers($redemptionIssuers)
    {
        $this->redemptionIssuers = $redemptionIssuers;
    }
    public function getRedemptionIssuers()
    {
        return $this->redemptionIssuers;
    }
    public function setReview(Review $review)
    {
        $this->review = $review;
    }
    public function getReview()
    {
        return $this->review;
    }
    public function setReviewStatus($reviewStatus)
    {
        $this->reviewStatus = $reviewStatus;
    }
    public function getReviewStatus()
    {
        return $this->reviewStatus;
    }
    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
    public function setWordMark(Image $wordMark)
    {
        $this->wordMark = $wordMark;
    }
    public function getWordMark()
    {
        return $this->wordMark;
    }
}