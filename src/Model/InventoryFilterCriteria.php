<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The container for the filter fields. This container is used to set the filter
 * criteria for the order report. A seller can set date range filters and/or can
 * retrieve orders in a specific state.
 */
class InventoryFilterCriteria extends AbstractModel
{
    /**
     * The creation date range of the listings you want returned. Set the date range so
     * it contains less than 10 days (maximum). If you do not specify a
     * <strong>creationDateRange</strong>, results from the last 10 days will be
     * returned in <strong>ActiveInventoryReport</strong> by default.
     *
     * @var \Ebay\Sell\Feed\Model\DateRange
     */
    public $creationDateRange = null;

    /**
     * The modified date range of the listings you want returned.
     *
     * @var \Ebay\Sell\Feed\Model\DateRange
     */
    public $modifiedDateRange = null;

    /**
     * The type of buying option for the order. Supports
     * <code>LMS_ACTIVE_INVENTORY_REPORT</code>. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/feed/types/api:ListingFormatEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $listingFormat = null;

    /**
     * The status of the listing (whether the listing was unsold or is active). The
     * <strong>UNSOLD</strong> value does not apply to
     * <code>LMS_ACTIVE_INVENTORY_REPORT</code> feed types. For implementation help,
     * refer to <a
     * href='https://developer.ebay.com/api-docs/sell/feed/types/api:ListingStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $listingStatus = null;
}
