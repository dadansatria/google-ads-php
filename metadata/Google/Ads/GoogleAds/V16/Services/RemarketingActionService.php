<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/remarketing_action_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class RemarketingActionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v16/enums/tracking_code_page_format.protogoogle.ads.googleads.v16.enums"g
TrackingCodePageFormatEnum"I
TrackingCodePageFormat
UNSPECIFIED 
UNKNOWN
HTML
AMPB�
"com.google.ads.googleads.v16.enumsBTrackingCodePageFormatProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/enums/tracking_code_type.protogoogle.ads.googleads.v16.enums"�
TrackingCodeTypeEnum"w
TrackingCodeType
UNSPECIFIED 
UNKNOWN
WEBPAGE
WEBPAGE_ONCLICK
CLICK_TO_CALL
WEBSITE_CALLB�
"com.google.ads.googleads.v16.enumsBTrackingCodeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
1google/ads/googleads/v16/common/tag_snippet.protogoogle.ads.googleads.v16.common7google/ads/googleads/v16/enums/tracking_code_type.proto"�

TagSnippetS
type (2E.google.ads.googleads.v16.enums.TrackingCodeTypeEnum.TrackingCodeTypef
page_format (2Q.google.ads.googleads.v16.enums.TrackingCodePageFormatEnum.TrackingCodePageFormat
global_site_tag (	H �
event_snippet (	H�B
_global_site_tagB
_event_snippetB�
#com.google.ads.googleads.v16.commonBTagSnippetProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
;google/ads/googleads/v16/resources/remarketing_action.proto"google.ads.googleads.v16.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
RemarketingActionI
resource_name (	B2�A�A,
*googleads.googleapis.com/RemarketingAction
id (B�AH �
name (	H�F
tag_snippets (2+.google.ads.googleads.v16.common.TagSnippetB�A:s�Ap
*googleads.googleapis.com/RemarketingActionBcustomers/{customer_id}/remarketingActions/{remarketing_action_id}B
_idB
_nameB�
&com.google.ads.googleads.v16.resourcesBRemarketingActionProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
Bgoogle/ads/googleads/v16/services/remarketing_action_service.proto!google.ads.googleads.v16.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateRemarketingActionsRequest
customer_id (	B�AV

operations (2=.google.ads.googleads.v16.services.RemarketingActionOperationB�A
partial_failure (
validate_only ("�
RemarketingActionOperation/
update_mask (2.google.protobuf.FieldMaskG
create (25.google.ads.googleads.v16.resources.RemarketingActionH G
update (25.google.ads.googleads.v16.resources.RemarketingActionH B
	operation"�
 MutateRemarketingActionsResponse1
partial_failure_error (2.google.rpc.StatusQ
results (2@.google.ads.googleads.v16.services.MutateRemarketingActionResult"g
MutateRemarketingActionResultF
resource_name (	B/�A,
*googleads.googleapis.com/RemarketingAction2�
RemarketingActionService�
MutateRemarketingActionsB.google.ads.googleads.v16.services.MutateRemarketingActionsRequestC.google.ads.googleads.v16.services.MutateRemarketingActionsResponse"\\�Acustomer_id,operations���="8/v16/customers/{customer_id=*}/remarketingActions:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesBRemarketingActionServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

