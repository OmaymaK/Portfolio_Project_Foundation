<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/customer_manager_link_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Errors;

class CustomerManagerLinkError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Agoogle/ads/googleads/v11/errors/customer_manager_link_error.protogoogle.ads.googleads.v11.errors"�
CustomerManagerLinkErrorEnum"�
CustomerManagerLinkError
UNSPECIFIED 
UNKNOWN
NO_PENDING_INVITE\'
#SAME_CLIENT_MORE_THAN_ONCE_PER_CALL-
)MANAGER_HAS_MAX_NUMBER_OF_LINKED_ACCOUNTS-
)CANNOT_UNLINK_ACCOUNT_WITHOUT_ACTIVE_USER+
\'CANNOT_REMOVE_LAST_CLIENT_ACCOUNT_OWNER+
\'CANNOT_CHANGE_ROLE_BY_NON_ACCOUNT_OWNER2
.CANNOT_CHANGE_ROLE_FOR_NON_ACTIVE_LINK_ACCOUNT
DUPLICATE_CHILD_FOUND	.
*TEST_ACCOUNT_LINKS_TOO_MANY_CHILD_ACCOUNTS
B�
#com.google.ads.googleads.v11.errorsBCustomerManagerLinkErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/errors;errors�GAA�Google.Ads.GoogleAds.V11.Errors�Google\\Ads\\GoogleAds\\V11\\Errors�#Google::Ads::GoogleAds::V11::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

