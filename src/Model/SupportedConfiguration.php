<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * An array that defines the configuration supported by this template. This
 * includes specified properties and usage (whether the property is REQUIRED or
 * OPTIONAL), and an optional default value.
 */
class SupportedConfiguration extends AbstractModel
{
    /**
     * The default value for the property. If a value is omitted from the schedule and
     * a default value is supplied, the default value is used.
     *
     * @var string
     */
    public $defaultValue = null;

    /**
     * Properties supported by the template. Properties can include the following:
     * <ul><li><b>scheduleStartDate:</b> The timestamp that the report generation
     * (subscription) begins. After this timestamp, the schedule status becomes active
     * until either the scheduleEndDate occurs or the scheduleTemplate becomes
     * inactive. Format: UTC
     * <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code></li><li><b>scheduleEndDate:</b>
     * The timestamp that the report generation (subscription) ends. After this date,
     * the schedule status becomes INACTIVE. Format: UTC
     * <code>yyyy-MM-dd<strong>T</strong>HH<strong>Z</strong></code></li><li><b>schemaVersion:</b>
     * The schema version of the schedule templates feedType. This field is required if
     * the feedType has a schema version.</li><li><b>preferredTriggerDayOfMonth:</b>
     * The preferred day of the month to trigger the schedule.
     * </li><li><b>preferredTriggerDayOfWeek:</b> The preferred day of the week to
     * trigger the schedule. </li><li><b>preferredTriggerHour:</b> The preferred
     * two-digit hour of the day to trigger the schedule. Format: UTC
     * <code>hhZ</code></li><ul>.
     *
     * @var string
     */
    public $property = null;

    /**
     * Whether the specified property is REQUIRED or OPTIONAL. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/feed/types/api:ConfigurationsUsageEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $usage = null;
}
