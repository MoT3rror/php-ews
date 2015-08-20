<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing BaseSubscriptionRequestType
 *
 *
 * XSD Type: BaseSubscriptionRequestType
 *
 * @method BaseSubscriptionRequestType getSubscribeToAllFolders()
 * @method BaseSubscriptionRequestType setSubscribeToAllFolders(boolean $subscribeToAllFolders)
 * @method BaseSubscriptionRequestType getFolderIds()
 * @method BaseSubscriptionRequestType setFolderIds(NonEmptyArrayOfBaseFolderIdsType $folderIds)
 * @method BaseSubscriptionRequestType getEventTypes()
 * @method BaseSubscriptionRequestType setEventTypes(array $eventTypes)
 * @method BaseSubscriptionRequestType getWatermark()
 * @method BaseSubscriptionRequestType setWatermark(string $watermark)
 */
class BaseSubscriptionRequestType extends Type
{

    /**
     * @property boolean $subscribeToAllFolders
     */
    protected $subscribeToAllFolders = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseFolderIdsType $folderIds
     */
    protected $folderIds = null;

    /**
     * @property string[] $eventTypes
     */
    protected $eventTypes = null;

    /**
     * @property string $watermark
     */
    protected $watermark = null;
}
