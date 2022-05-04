<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the Customer Service Metric reports
 * generated with the Feed API.
 */
class CreateServiceMetricsTaskRequest extends AbstractModel
{
    /**
     * The <strong>feedType</strong> specified for the task. The report lists the
     * transaction details that contribute to the service metrics evaluation. Supported
     * types include:<p><code>CUSTOMER_SERVICE_METRICS_REPORT</code></p>.
     *
     * @var string
     */
    public $feedType = null;

    /**
     * This container is used to customize and set criteria for Customer Service Metric
     * report that will be associated with the task.
     *
     * @var \Ebay\Sell\Feed\Model\CustomerServiceMetricsFilterCriteria
     */
    public $filterCriteria = null;

    /**
     * The version number of the file format. <p><b>Valid value:
     * </b><code>1.0</code><p>.
     *
     * @var string
     */
    public $schemaVersion = null;
}
