<?php

namespace Ebay\Sell\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

class InventoryTaskCollection extends AbstractModel
{
    /**
     * The path to the call URI that produced the current page of results.
     *
     * @var string
     */
    public $href = null;

    /**
     * The value of the <strong>limit</strong> parameter submitted in the request,
     * which is the maximum number of inventory tasks to return per page, from the
     * result set. A result set is the complete set of tasks returned by the method.<br
     * /><br /><span class="tablenote"><strong>Note:</strong> Though this parameter is
     * not required to be submitted in the request, the parameter defaults to
     * <code>10</code> if omitted. Additionally, if this is the last or only page of
     * the result set, the page may contain fewer tasks than the <strong>limit</strong>
     * value submitted in the request.</span><br /><br />To determine the number of
     * pages in a result set, divide the total value (total number of tasks matching
     * the input criteria) by this limit value, and then round up to the next integer.
     * For example, if the <strong>total</strong> value was <code>120</code> (120 total
     * tasks) and the <strong>limit</strong> value was <code>50</code> (show 50 tasks
     * per page), the total number of pages in the result set is three, so the seller
     * would have to make three separate <strong>getInventoryTasks</strong> calls to
     * view all tasks matching the input criteria.
     *
     * @var int
     */
    public $limit = null;

    /**
     * The path to the call URI for the next page of results. This value is returned if
     * there is an additional page of results to return from the result set.
     *
     * @var string
     */
    public $next = null;

    /**
     * The number of results skipped in the result set before listing the first
     * returned result. This value can be specified in the request with the
     * <strong>offset</strong> query parameter.<br /><br /><span
     * class="tablenote"><strong>Note:</strong> The items in a paginated result set use
     * a zero-based list, where the first item in the list has an offset of
     * <code>0</code>.</span>.
     *
     * @var int
     */
    public $offset = null;

    /**
     * The path to the call URI for the previous page of results. This is returned if
     * there is a previous page of results from the result set.
     *
     * @var string
     */
    public $prev = null;

    /**
     * An array of the inventory tasks on this page. The tasks are sorted by creation
     * date.<br /><br /><span class="tablenote"><strong>Note:</strong> An empty array
     * is returned if the filter criteria excludes all tasks.</span>.
     *
     * @var \Ebay\Sell\Feed\Model\InventoryTask[]
     */
    public $tasks = null;

    /**
     * The total number of inventory tasks that match the input criteria.
     *
     * @var int
     */
    public $total = null;
}
