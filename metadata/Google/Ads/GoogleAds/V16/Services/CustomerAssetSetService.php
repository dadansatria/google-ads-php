<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/customer_asset_set_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class CustomerAssetSetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v16/enums/response_content_type.protogoogle.ads.googleads.v16.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v16.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
:google/ads/googleads/v16/enums/asset_set_link_status.protogoogle.ads.googleads.v16.enums"f
AssetSetLinkStatusEnum"L
AssetSetLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v16.enumsBAssetSetLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
;google/ads/googleads/v16/resources/customer_asset_set.proto"google.ads.googleads.v16.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomerAssetSetH
resource_name (	B1�A�A+
)googleads.googleapis.com/CustomerAssetSet<
	asset_set (	B)�A�A#
!googleads.googleapis.com/AssetSet;
customer (	B)�A�A#
!googleads.googleapis.com/Customer^
status (2I.google.ads.googleads.v16.enums.AssetSetLinkStatusEnum.AssetSetLinkStatusB�A:h�Ae
)googleads.googleapis.com/CustomerAssetSet8customers/{customer_id}/customerAssetSets/{asset_set_id}B�
&com.google.ads.googleads.v16.resourcesBCustomerAssetSetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
Bgoogle/ads/googleads/v16/services/customer_asset_set_service.proto!google.ads.googleads.v16.services;google/ads/googleads/v16/resources/customer_asset_set.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/rpc/status.proto"�
MutateCustomerAssetSetsRequest
customer_id (	B�AU

operations (2<.google.ads.googleads.v16.services.CustomerAssetSetOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v16.enums.ResponseContentTypeEnum.ResponseContentType"�
CustomerAssetSetOperationF
create (24.google.ads.googleads.v16.resources.CustomerAssetSetH @
remove (	B.�A+
)googleads.googleapis.com/CustomerAssetSetH B
	operation"�
MutateCustomerAssetSetsResponseP
results (2?.google.ads.googleads.v16.services.MutateCustomerAssetSetResult1
partial_failure_error (2.google.rpc.Status"�
MutateCustomerAssetSetResultE
resource_name (	B.�A+
)googleads.googleapis.com/CustomerAssetSetP
customer_asset_set (24.google.ads.googleads.v16.resources.CustomerAssetSet2�
CustomerAssetSetService�
MutateCustomerAssetSetsA.google.ads.googleads.v16.services.MutateCustomerAssetSetsRequestB.google.ads.googleads.v16.services.MutateCustomerAssetSetsResponse"[�Acustomer_id,operations���<"7/v16/customers/{customer_id=*}/customerAssetSets:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesBCustomerAssetSetServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

