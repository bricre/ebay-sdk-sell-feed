<?php

namespace Ebay\Sell\Feed\Api;

use Ebay\Sell\Feed\Model\CreateServiceMetricsTaskRequest;
use Ebay\Sell\Feed\Model\CustomerServiceMetricTaskCollection;
use Ebay\Sell\Feed\Model\ServiceMetricsTask;
use OpenAPI\Runtime\UnexpectedResponse;

class Task extends AbstractAPI
{
    /**
     * Use this method to return an array of customer service metric tasks. You can
     * limit the tasks returned by specifying a date range. </p> <p> <span
     * class="tablenote"><strong>Note:</strong> You can pass in either the
     * <code>look_back_days </code>or<code> date_range</code>, but not both.</span></p>.
     *
     * @param array $queries options:
     *                       'date_range'	string	The task creation date range. The results are filtered to
     *                       include only tasks with a creation date that is equal to the dates specified or
     *                       is within the specified range. Do not use with the <code>look_back_days</code>
     *                       parameter.<p><strong>Format: </strong>UTC</p><p>For example, tasks within a
     *                       range: </p><p><code>yyyy-MM-ddThh:mm:ss.SSSZ..yyyy-MM-ddThh:mm:ss.SSSZ
     *                       </code></p><p>Tasks created on March 8,
     *                       2020</p><p><code>2020-03-08T00:00.00.000Z..2020-03-09T00:00:00.000Z</code></p><p><b>Maximum:
     *                       </b>90 days</p>
     *                       'feed_type'	string	The feed type associated with the task. The only presently
     *                       supported value is <code>CUSTOMER_SERVICE_METRICS_REPORT</code>.
     *                       'limit'	string	The number of customer service metric tasks to return per page of
     *                       the result set. Use this parameter in conjunction with the offset parameter to
     *                       control the pagination of the output. <p>For example, if <strong>offset</strong>
     *                       is set to 10 and <strong>limit</strong> is set to 10, the call retrieves tasks
     *                       11 thru 20 from the result set.</p><p>If this parameter is omitted, the default
     *                       value is used.</p><p> <span class="tablenote"><strong>Note:</strong>This feature
     *                       employs a zero-based list, where the first item in the list has an offset of
     *                       <code>0</code>.</span></p><p><b>Default:</b> 10 <p><b>Maximum:</b> 500</p>
     *                       'look_back_days'	string	The number of previous days in which to search for
     *                       tasks. Do not use with the <code>date_range</code> parameter. If both
     *                       <code>date_range</code> and <code>look_back_days</code> are omitted, this
     *                       parameter's default value is used. <p><b>Default value:</b>
     *                       7</p><p><b>Range:</b> 1-90 (inclusive)</p>
     *                       'offset'	string	The number of customer service metric tasks to skip in the
     *                       result set before returning the first task in the paginated response. <p>Combine
     *                       <strong>offset</strong> with the <strong>limit</strong> query parameter to
     *                       control the items returned in the response. For example, if you supply an
     *                       <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of
     *                       <code>10</code>, the first page of the response contains the first 10 items from
     *                       the complete list of items retrieved by the call. If <strong>offset</strong> is
     *                       <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of
     *                       the response contains items 11-30 from the complete result set. <br /><br
     *                       /><b>Default: </b>0
     *
     * @return CustomerServiceMetricTaskCollection|UnexpectedResponse
     */
    public function gets(array $queries = [])
    {
        return $this->request(
        'getCustomerServiceMetricTasks',
        'GET',
        'customer_service_metric_task',
        null,
        $queries,
        []
        );
    }

    /**
     * <p>Use this method to create a customer service metrics download task with
     * filter criteria for the customer service metrics report. When using this method,
     * specify the <strong>feedType</strong> and <strong>filterCriteria</strong>
     * including both <strong>evaluationMarketplaceId</strong> and
     * <strong>customerServiceMetricType</strong> for the report. The method returns
     * the location response header containing the call URI to use with
     * <strong>getCustomerServiceMetricTask</strong> to retrieve status and details on
     * the task.</p><p>Only CURRENT Customer Service Metrics reports can be generated
     * with the Sell Feed API. PROJECTED reports are not supported at this time. See
     * the <a
     * href="/api-docs/sell/analytics/resources/customer_service_metric/methods/getCustomerServiceMetric">getCustomerServiceMetric</a>
     * method document in the Analytics API for more information about these two types
     * of reports.</p><p><span class="tablenote"><strong>Note:</strong> Before calling
     * this API, retrieve the summary of the seller's performance and rating for the
     * customer service metric by calling <strong>getCustomerServiceMetric</strong>
     * (part of the <a href="/api-docs/sell/analytics/resources/methods">Analytics
     * API</a>). You can then populate the create task request fields with the values
     * from the response. This technique eliminates failed tasks that request a report
     * for a <strong>customerServiceMetricType</strong> and
     * <strong>evaluationMarketplaceId</strong> that are without evaluation.</span></p>.
     *
     * @param CreateServiceMetricsTaskRequest $Model   request payload containing
     *                                                 version, feedType, and optional filterCriteria
     * @param array                           $headers options:
     *                                                 'accept-language'	string	Use this header to specify the natural language in
     *                                                 which the authenticated user desires the response
     *
     * @return UnexpectedResponse
     */
    public function create(CreateServiceMetricsTaskRequest $Model, array $headers = []): UnexpectedResponse
    {
        return $this->request(
        'createCustomerServiceMetricTask',
        'POST',
        'customer_service_metric_task',
        $Model->getArrayCopy(),
        [],
        $headers
        );
    }

    /**
     * <p>Use this method to retrieve customer service metric task details for the
     * specified task. The input is <strong>task_id</strong>.</p>.
     *
     * @param string $task_id use this path parameter to specify the task ID value for
     *                        the customer service metric task to retrieve
     *
     * @return ServiceMetricsTask|UnexpectedResponse
     */
    public function get(string $task_id)
    {
        return $this->request(
        'getCustomerServiceMetricTask',
        'GET',
        "customer_service_metric_task/$task_id",
        null,
        [],
        []
        );
    }
}
