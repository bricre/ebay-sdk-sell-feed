<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A complex data type that filters data for report creation. See
 * <strong>CustomerServiceMetricsFilterCriteria</strong> for fields and
 * descriptions.
 */
class CustomerServiceMetricsFilterCriteria extends AbstractModel
{
    /**
     * An enumeration value that specifies the customer service metric that eBay tracks
     * to measure seller performance. See
     * <strong>CustomerServiceMetricTypeEnum</strong> for values. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/feed/types/api:CustomerServiceMetricTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $customerServiceMetricType = null;

    /**
     * An enumeration value that specifies the eBay marketplace where the evaluation
     * occurs. See <strong>MarketplaceIdEnum</strong> for values. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/feed/types/bas:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $evaluationMarketplaceId = null;

    /**
     * A list of listing category IDs on which the service metric is measured. A seller
     * can use one or more L1 (top-level) eBay categories to get metrics specific to
     * those L1 categories. The Category IDs for each L1 category are required.
     * Category ID values for L1 categories can be retrieved using the Taxonomy API.<p>
     * <span class="tablenote"><strong>Note: </strong>Pass this attribute to narrow
     * down your filter results for the <code>ITEM_NOT_AS_DESCRIBED</code>
     * customerServiceMetricType.</span></p> <p>Supported categories
     * include:</p><p><code>primary(L1) category Id</code></p>.
     *
     * @var string[]
     */
    public $listingCategories = null;

    /**
     * A list of shipping region enumeration values on which the service metric is
     * measured. This comma delimited array allows the seller to customize the report
     * to focus on domestic or international shipping. <p> <span
     * class="tablenote"><strong>Note: </strong>Pass this attribute to narrow down your
     * filter results for the <code>ITEM_NOT_RECEIVED</code>
     * customerServiceMetricType.</span></p> <p>Supported categories
     * include:</p><p><code>primary(L1) category Id</code></p>See
     * <strong>ShippingRegionTypeEnum</strong> for values.
     *
     * @var string[]|
     */
    public $shippingRegions = null;
}
