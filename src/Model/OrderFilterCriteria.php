<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the order filters.
 */
class OrderFilterCriteria extends AbstractModel
{
    /**
     * The creation date range of the orders you want returned. Set the date range so
     * it contains less than 10 days (maximum). If you do not specify a
     * <strong>DateRange</strong>, results from the last 10 days will be returned by
     * default.
     *
     * @var \Ebay\Sell\Feed\Model\DateRange
     */
    public $creationDateRange = null;

    /**
     * The modified date range of the orders you want returned. <p> <span
     * class="tablenote"><strong>Note:</strong> This container is for future use. At
     * this time, the <strong>createOrderTask</strong> method only supports order
     * creation date filters and not modified order date filters.</span></p>.
     *
     * @var \Ebay\Sell\Feed\Model\DateRange
     */
    public $modifiedDateRange = null;

    /**
     * The order status of the orders returned. If the filter is omitted from
     * createOrderTask call, orders that are in both <code>ACTIVE </code>and<code>
     * COMPLETED</code> states are returned. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/feed/types/api:OrderStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $orderStatus = null;
}
