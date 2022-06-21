<?php

namespace Ebay\Sell\Feed\Api;

use Ebay\Sell\Feed\Model\CreateUserScheduleRequest;
use Ebay\Sell\Feed\Model\ScheduleTemplateCollection;
use Ebay\Sell\Feed\Model\ScheduleTemplateResponse;
use Ebay\Sell\Feed\Model\UpdateUserScheduleRequest;
use Ebay\Sell\Feed\Model\UserScheduleCollection;
use Ebay\Sell\Feed\Model\UserScheduleResponse;
use OpenAPI\Runtime\UnexpectedResponse;

class Schedule extends AbstractAPI
{
    /**
     * This method retrieves an array containing the details and status of all
     * schedules based on the specified <strong>feed_type</strong>. Use this method to
     * find a schedule if you do not know the <strong>schedule_id</strong>.
     *
     * @param array $queries options:
     *                       'feed_type'	string	The <strong>feedType</strong> associated with the schedule.
     *                       'limit'	string	The maximum number of schedules that can be returned on each page
     *                       of the paginated response. Use this parameter in conjunction with the
     *                       <strong>offset</strong> parameter to control the pagination of the output. <p>
     *                       <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based
     *                       list, where the first item in the list has an offset of
     *                       <code>0</code>.</span></p><p>For example, if <strong>offset</strong> is set to
     *                       10 and <strong>limit</strong> is set to 10, the call retrieves schedules 11 thru
     *                       20 from the result set.</p><p>If this parameter is omitted, the default value is
     *                       used. <br /><br /><b>Default: </b> 10 <br /><br /><b>Maximum: </b>500
     *                       'offset'	string	The number of schedules to skip in the result set before
     *                       returning the first schedule in the paginated response. <p>Combine
     *                       <strong>offset</strong> with the <strong>limit</strong> query parameter to
     *                       control the items returned in the response. For example, if you supply an
     *                       <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of
     *                       <code>10</code>, the first page of the response contains the first 10 items from
     *                       the complete list of items retrieved by the call. If <strong>offset</strong> is
     *                       <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of
     *                       the response contains items 11-30 from the complete result set. If this query
     *                       parameter is not set, the default value is used and the first page of records is
     *                       returned.<br /><br /><b>Default: </b>0
     *
     * @return UserScheduleCollection|UnexpectedResponse
     */
    public function gets(array $queries = [])
    {
        return $this->request(
        'getSchedules',
        'GET',
        'schedule',
        null,
        $queries,
        []
        );
    }

    /**
     * This method creates a schedule, which is a subscription to the specified
     * schedule template. A schedule periodically generates a report for the
     * <strong>feedType</strong> specified by the template. Specify the same
     * <strong>feedType</strong> as the <strong>feedType</strong> of the associated
     * schedule template. When creating the schedule, if available from the template,
     * you can specify a preferred trigger hour, day of the week, or day of the month.
     * These and other fields are conditionally available as specified by the
     * template.<p> <span class="tablenote"><strong>Note:</strong> Make sure to include
     * all fields required by the schedule template
     * (<strong>scheduleTemplateId</strong>). Call the
     * <strong>getScheduleTemplate</strong> method (or the
     * <strong>getScheduleTemplates</strong> method), to find out which fields are
     * required or optional. If a field is optional and a default value is provided by
     * the template, the default value will be used if omitted from the
     * payload.</span></p>A successful call returns the location response header
     * containing the <strong>getSchedule</strong> call URI to retrieve the schedule
     * you just created. The URL includes the eBay-assigned schedule ID, which you can
     * use to reference the schedule task. <br /><br />To retrieve the details of the
     * create schedule task, use the <strong>getSchedule</strong> method for a single
     * schedule ID or the <strong>getSchedules</strong> method to retrieve all schedule
     * details for the specified <strong>feed_type</strong>. The number of schedules
     * for each feedType is limited. Error code 160031 is returned when you have
     * reached this maximum.<p> <span class="tablenote"><strong>Note:</strong> Except
     * for schedules with a HALF-HOUR frequency, all schedules will ideally run at the
     * start of each hour ('00' minutes). Actual start time may vary time may vary due
     * to load and other factors.</span></p>.
     *
     * @param CreateUserScheduleRequest $Model in the request payload:
     *                                         <strong>feedType</strong> and <strong>scheduleTemplateId</strong> are required;
     *                                         <strong>scheduleName</strong> is optional;
     *                                         <strong>preferredTriggerHour</strong>,
     *                                         <strong>preferredTriggerDayOfWeek</strong>,
     *                                         <strong>preferredTriggerDayOfMonth</strong>, <strong>scheduleStartDate</strong>,
     *                                         <strong>scheduleEndDate</strong>, and <strong>schemaVersion</strong> are
     *                                         conditional
     *
     * @return object|UnexpectedResponse
     */
    public function create(CreateUserScheduleRequest $Model)
    {
        return $this->request(
        'createSchedule',
        'POST',
        'schedule',
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method retrieves schedule details and status of the specified schedule.
     * Specify the schedule to retrieve using the <strong>schedule_id</strong>. Use the
     * <strong>getSchedules</strong> method to find a schedule if you do not know the
     * <strong>schedule_id</strong>.
     *
     * @param string $schedule_id The ID of the schedule for which to retrieve the
     *                            details. This ID is generated when the schedule was created by the
     *                            <strong>createSchedule</strong> method.
     *
     * @return UserScheduleResponse|UnexpectedResponse
     */
    public function get(string $schedule_id)
    {
        return $this->request(
        'getSchedule',
        'GET',
        "schedule/$schedule_id",
        null,
        [],
        []
        );
    }

    /**
     * This method updates an existing schedule. Specify the schedule to update using
     * the <strong>schedule_id</strong> path parameter. If the schedule template has
     * changed after the schedule was created or updated, the input will be validated
     * using the changed template.<p> <span class="tablenote"><strong>Note:</strong>
     * Make sure to include all fields required by the schedule template
     * (<strong>scheduleTemplateId</strong>). Call the
     * <strong>getScheduleTemplate</strong> method (or the
     * <strong>getScheduleTemplates</strong> method), to find out which fields are
     * required or optional. If you do not know the
     * <strong>scheduleTemplateId</strong>, call the <strong>getSchedule</strong>
     * method to find out.</span></p>.
     *
     * @param string                    $schedule_id The ID of the schedule to update. This ID is
     *                                               generated when the schedule was created by the <strong>createSchedule</strong>
     *                                               method.
     * @param UpdateUserScheduleRequest $Model       in the request payload:
     *                                               <strong>scheduleName</strong> is optional;
     *                                               <strong>preferredTriggerHour</strong>,
     *                                               <strong>preferredTriggerDayOfWeek</strong>,
     *                                               <strong>preferredTriggerDayOfMonth</strong>, <strong>scheduleStartDate</strong>,
     *                                               <strong>scheduleEndDate</strong>, and <strong>schemaVersion</strong> are
     *                                               conditional
     *
     * @return UnexpectedResponse
     */
    public function update(string $schedule_id, UpdateUserScheduleRequest $Model): UnexpectedResponse
    {
        return $this->request(
        'updateSchedule',
        'PUT',
        "schedule/$schedule_id",
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * This method deletes an existing schedule. Specify the schedule to delete using
     * the <strong>schedule_id</strong> path parameter.
     *
     * @param string $schedule_id The <strong>schedule_id</strong> of the schedule to
     *                            delete. This ID was generated when the task was created. If you do not know the
     *                            schedule_id, use the <strong>getSchedules</strong> method to return all
     *                            schedules based on a specified feed_type and find the schedule_id of the
     *                            schedule to delete.
     *
     * @return UnexpectedResponse
     */
    public function delete(string $schedule_id): UnexpectedResponse
    {
        return $this->request(
        'deleteSchedule',
        'DELETE',
        "schedule/$schedule_id",
        null,
        [],
        []
        );
    }

    /**
     * This method downloads the latest result file generated by the schedule. The
     * response of this call is a compressed or uncompressed CSV, XML, or JSON file,
     * with the applicable file extension (for example: csv.gz). Specify the
     * <strong>schedule_id</strong> path parameter to download its last generated file.
     *
     * @param string $schedule_id The ID of the schedule for which to retrieve the
     *                            latest result file. This ID is generated when the schedule was created by the
     *                            <strong>createSchedule</strong> method.
     *
     * @return UnexpectedResponse
     */
    public function getLatestResultFile(string $schedule_id): UnexpectedResponse
    {
        return $this->request(
        'getLatestResultFile',
        'GET',
        "schedule/$schedule_id/download_result_file",
        null,
        [],
        []
        );
    }

    /**
     * This method retrieves the details of the specified template. Specify the
     * template to retrieve using the <strong>schedule_template_id</strong> path
     * parameter. Use the <strong>getScheduleTemplates</strong> method to find a
     * schedule template if you do not know the <strong>schedule_template_id</strong>.
     *
     * @param string $schedule_template_id The ID of the template to retrieve. If you
     *                                     do not know the <strong>schedule_template_id</strong>, refer to the
     *                                     documentation or use the <strong>getScheduleTemplates</strong> method to find
     *                                     the available schedule templates.
     *
     * @return ScheduleTemplateResponse|UnexpectedResponse
     */
    public function getTemplate(string $schedule_template_id)
    {
        return $this->request(
        'getScheduleTemplate',
        'GET',
        "schedule_template/$schedule_template_id",
        null,
        [],
        []
        );
    }

    /**
     * This method retrieves an array containing the details and status of all schedule
     * templates based on the specified <strong>feed_type</strong>. Use this method to
     * find a schedule template if you do not know the
     * <strong>schedule_template_id</strong>.
     *
     * @param array $queries options:
     *                       'feed_type'	string	The feed type of the schedule templates to retrieve.
     *                       'limit'	string	The maximum number of schedule templates that can be returned on
     *                       each page of the paginated response. Use this parameter in conjunction with the
     *                       <strong>offset</strong> parameter to control the pagination of the output. <p>
     *                       <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based
     *                       list, where the first item in the list has an offset of
     *                       <code>0</code>.</span></p><p>For example, if <strong>offset</strong> is set to
     *                       10 and <strong>limit</strong> is set to 10, the call retrieves schedule
     *                       templates 11 thru 20 from the result set.</p><p>If this parameter is omitted,
     *                       the default value is used. <br /><br /><b>Default: </b> 10 <br /><br
     *                       /><b>Maximum: </b>500
     *                       'offset'	string	The number of schedule templates to skip in the result set
     *                       before returning the first template in the paginated response. <p>Combine
     *                       <strong>offset</strong> with the <strong>limit</strong> query parameter to
     *                       control the items returned in the response. For example, if you supply an
     *                       <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of
     *                       <code>10</code>, the first page of the response contains the first 10 items from
     *                       the complete list of items retrieved by the call. If <strong>offset</strong> is
     *                       <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of
     *                       the response contains items 11-30 from the complete result set. If this query
     *                       parameter is not set, the default value is used and the first page of records is
     *                       returned.<br /><br /><b>Default: </b>0
     *
     * @return ScheduleTemplateCollection|UnexpectedResponse
     */
    public function getTemplates(array $queries = [])
    {
        return $this->request(
        'getScheduleTemplates',
        'GET',
        'schedule_template',
        null,
        $queries,
        []
        );
    }
}
