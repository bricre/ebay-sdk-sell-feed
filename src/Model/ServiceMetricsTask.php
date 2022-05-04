<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

class ServiceMetricsTask extends AbstractModel
{
    /**
     * The timestamp when the customer service metrics task went into the
     * <code>COMPLETED</code> or <code>COMPLETED_WITH_ERROR</code> state. This field is
     * only returned if the status is one of the two completed values. This state means
     * that eBay has compiled the report for the seller based on the seller’s filter
     * criteria, and the seller can run a <strong>getResultFile</strong> call to
     * download the report.
     *
     * @var string
     */
    public $completionDate = null;

    /**
     * The date the customer service metrics task was created.
     *
     * @var string
     */
    public $creationDate = null;

    /**
     * The relative <strong>getCustomerServiceMetricTask</strong> call URI path to
     * retrieve the corresponding task.
     *
     * @var string
     */
    public $detailHref = null;

    /**
     * The feed type associated with the task.
     *
     * @var string
     */
    public $feedType = null;

    /**
     * This container shows the criteria set for the report.
     *
     * @var \Ebay\Sell\Feed\Model\CustomerServiceMetricsFilterCriteria
     */
    public $filterCriteria = null;

    /**
     * The schema version number of the file format. If omitted, the default value is
     * used. <p><b>Default value: </b><code>1.0</code><p>.
     *
     * @var string
     */
    public $schemaVersion = null;

    /**
     * An enumeration value that indicates the state of the task. See
     * <strong>FeedStatusEnum</strong> for values. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * The unique eBay-assigned ID of the task.
     *
     * @var string
     */
    public $taskId = null;
}
