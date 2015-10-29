<?php

/**
 * This examples shows how Mandrill library is used to send a message.
 */

require('../Mandrill.php');
require('config.php');

$request_json = '{"type":"messages","call":"send","message":{"html": "<h1>test</h1>", "text": "example text", "subject": "Google", "from_email": "support@google.com", "from_name": "Esferasoft", "to":[{"email": "aman_katoch@esferasoft.com", "name": "Wes Widner"}],"headers":{"...": "..."},"track_opens":true,"track_clicks":true,"auto_text":true,"url_strip_qs":true,"tags":["test","example","sample"],"google_analytics_domains":["werxltd.com"],"google_analytics_campaign":["..."],"metadata":["..."]}}';

$ret = Mandrill::call((array) json_decode($request_json));

print_r($ret);
