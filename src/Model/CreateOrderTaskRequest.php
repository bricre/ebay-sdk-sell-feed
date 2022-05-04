<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the <b> createOrderTask</b> request.
 */
class CreateOrderTaskRequest extends AbstractModel
{
    /**
     * The feed type associated with the task. The only presently supported value is
     * <code>LMS_ORDER_REPORT</code>. See <a
     * href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#merchant-data-reports-download-feed-types"
     * target="_blank">Report download feed types</a> for more information.
     *
     * @var string
     */
    public $feedType = null;

    /**
     * The container for the filter fields. This container is used to set the filter
     * criteria for the order report. A seller can set date range filters and/or can
     * retrieve orders in a specific state.
     *
     * @var \Ebay\Sell\Feed\Model\OrderFilterCriteria
     */
    public $filterCriteria = null;

    /**
     * The schema version of the LMS OrderReport. For the <code>LMS_ORDER_REPORT</code>
     * feed type, see the <a
     * href="https://developer.ebay.com/devzone/merchant-data/CallRef/OrderReport.html#OrderReport">OrderReport</a>
     * reference page to see the present schema version. The <b> schemaVersion</b>
     * value is the version number shown at the top of the <b> OrderReport</b> page.
     * <br /><br /><b>Restriction: </b> This value must be 1113 or higher. The
     * OrderReport schema version is updated about every two weeks. All version numbers
     * are odd numbers (even numbers are skipped). For example, the next release
     * version after '1113' is '1115'.
     *
     * @var string
     */
    public $schemaVersion = null;
}
