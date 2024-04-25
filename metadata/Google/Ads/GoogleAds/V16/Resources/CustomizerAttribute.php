<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/customizer_attribute.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Resources;

class CustomizerAttribute
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
@google/ads/googleads/v16/enums/customizer_attribute_status.protogoogle.ads.googleads.v16.enums"t
CustomizerAttributeStatusEnum"S
CustomizerAttributeStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v16.enumsBCustomizerAttributeStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
>google/ads/googleads/v16/enums/customizer_attribute_type.protogoogle.ads.googleads.v16.enums"�
CustomizerAttributeTypeEnum"e
CustomizerAttributeType
UNSPECIFIED 
UNKNOWN
TEXT

NUMBER	
PRICE
PERCENTB�
"com.google.ads.googleads.v16.enumsBCustomizerAttributeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
=google/ads/googleads/v16/resources/customizer_attribute.proto"google.ads.googleads.v16.resources>google/ads/googleads/v16/enums/customizer_attribute_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomizerAttributeK
resource_name (	B4�A�A.
,googleads.googleapis.com/CustomizerAttribute
id (B�A
name (	B�A�Af
type (2S.google.ads.googleads.v16.enums.CustomizerAttributeTypeEnum.CustomizerAttributeTypeB�Al
status (2W.google.ads.googleads.v16.enums.CustomizerAttributeStatusEnum.CustomizerAttributeStatusB�A:y�Av
,googleads.googleapis.com/CustomizerAttributeFcustomers/{customer_id}/customizerAttributes/{customizer_attribute_id}B�
&com.google.ads.googleads.v16.resourcesBCustomizerAttributeProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

