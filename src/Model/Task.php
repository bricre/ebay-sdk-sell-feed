<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The type that defines the fields for the task details.
 */
class Task extends AbstractModel
{
    /**
     * The timestamp when the task went into the <code>COMPLETED</code> or
     * <code>COMPLETED_WITH_ERROR</code> state. This state means that eBay has compiled
     * the report for the seller based on the seller’s filter criteria, and the
     * seller can run a <strong>getResultFile</strong> call to download the report.
     *
     * @var string
     */
    public $completionDate = null;

    /**
     * The date the task was created.
     *
     * @var string
     */
    public $creationDate = null;

    /**
     * The path to the call URI used to retrieve the task. This field points to the
     * GetOrderTask URI if the task is for <code>LMS_ORDER_REPORT</code> or will be
     * null if this task is for <code>LMS_ORDER_ACK</code>.
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
     * The schema version number associated with the task.
     *
     * @var string
     */
    public $schemaVersion = null;

    /**
     * The enumeration value that indicates the state of the task that was submitted in
     * the request. See <strong>FeedStatusEnum</strong> for information. <p>The values
     * <code>COMPLETED </code>and<code> COMPLETED_WITH_ERROR</code> indicate the Order
     * Report file is ready to download.</p> For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $status = null;

    /**
     * The ID of the task that was submitted in the request.
     *
     * @var string
     */
    public $taskId = null;

    /**
     * This container provides summary information on an upload feed (not applicable
     * for download feed types).
     *
     * @var \Ebay\Sell\Feed\Model\UploadSummary
     */
    public $uploadSummary = null;
}
