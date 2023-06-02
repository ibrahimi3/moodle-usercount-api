<?php

$functions = [
        // The name of web service function.
        'local_usercount_get_users' => [
        // The name of the namespaced class that the function is located in.
        'classname'   => 'local_usercount\external\get_users',

         // The name of the external function name.
        'methodname'  => 'execute',

        // The file containing the class/external function.
        'classpath'   => 'local/classes/external/get_users.php',

        // A brief, human-readable, description of the web service function.
        'description' => 'Gets the total count of all registered users in a Moodle site.',

        // Options include read, and write.
        'type'        => 'read',

        // Whether the service is available for use in AJAX calls from the web.
        'ajax'        => true,

        // An optional list of services where the function will be included.
        'services' => [
            // A standard Moodle install includes one default service:
            // - MOODLE_OFFICIAL_MOBILE_SERVICE.
            // Specifying this service means that your function will be available for
            // use in the Moodle Mobile App.
            // MOODLE_OFFICIAL_MOBILE_SERVICE,
        ]
    ],
];