<?php

namespace local_usercount\external;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/externallib.php');

class get_users extends \external_api {

    /**
     * Returns description of method parameters.
     * @return \external_function_parameters
     */
    public static function execute_parameters() {
        return new \external_function_parameters([
        ]);
    }

    public static function execute_returns() {
        return new \external_single_structure([
                    'count' => new \external_value(PARAM_INT, 'Count of users'),
                ]);
        
    }

    /**
     * Get Users.
     * @return int Total users count.
     */
    public static function execute() {
        global $DB;

        $users = (object)[];
        $users->count = $DB->count_records('user');
        return $users;
    }

}
