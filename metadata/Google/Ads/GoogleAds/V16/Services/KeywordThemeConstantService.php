<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/keyword_theme_constant_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class KeywordThemeConstantService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v16/resources/keyword_theme_constant.proto"google.ads.googleads.v16.resourcesgoogle/api/resource.proto"�
KeywordThemeConstantL
resource_name (	B5�A�A/
-googleads.googleapis.com/KeywordThemeConstant
country_code (	B�AH �
language_code (	B�AH�
display_name (	B�AH�:y�Av
-googleads.googleapis.com/KeywordThemeConstantEkeywordThemeConstants/{express_category_id}~{express_sub_category_id}B
_country_codeB
_language_codeB
_display_nameB�
&com.google.ads.googleads.v16.resourcesBKeywordThemeConstantProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
Fgoogle/ads/googleads/v16/services/keyword_theme_constant_service.proto!google.ads.googleads.v16.servicesgoogle/api/annotations.protogoogle/api/client.proto"f
#SuggestKeywordThemeConstantsRequest

query_text (	
country_code (	
language_code (	"�
$SuggestKeywordThemeConstantsResponseY
keyword_theme_constants (28.google.ads.googleads.v16.resources.KeywordThemeConstant2�
KeywordThemeConstantService�
SuggestKeywordThemeConstantsF.google.ads.googleads.v16.services.SuggestKeywordThemeConstantsRequestG.google.ads.googleads.v16.services.SuggestKeywordThemeConstantsResponse"-���\'""/v16/keywordThemeConstants:suggest:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesB KeywordThemeConstantServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

