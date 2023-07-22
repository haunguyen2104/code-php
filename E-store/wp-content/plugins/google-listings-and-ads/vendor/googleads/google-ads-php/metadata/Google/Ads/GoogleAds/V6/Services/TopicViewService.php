<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/topic_view_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class TopicViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v6/resources/topic_view.proto!google.ads.googleads.v6.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
	TopicViewA
resource_name (	B*�A�A$
"googleads.googleapis.com/TopicView:h�Ae
"googleads.googleapis.com/TopicView?customers/{customer_id}/topicViews/{ad_group_id}~{criterion_id}B�
%com.google.ads.googleads.v6.resourcesBTopicViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
9google/ads/googleads/v6/services/topic_view_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"X
GetTopicViewRequestA
resource_name (	B*�A�A$
"googleads.googleapis.com/TopicView2�
TopicViewService�
GetTopicView5.google.ads.googleads.v6.services.GetTopicViewRequest,.google.ads.googleads.v6.resources.TopicView"D���.,/v6/{resource_name=customers/*/topicViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBTopicViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

