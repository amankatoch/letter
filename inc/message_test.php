<?php

  require_once('Mandrill.php');
  $mandrill = new Mandrill('w5ZoaT-7BE46Wa2B8TSl4A');
  print_r($mandrill);
  die();
                     $message = array(
				        'html' => '<p>Example HTML content</p>',
				        'text' => 'Example text content',
				        'subject' => 'example subject',
				        'from_email' => 'aman_katoch@esferasoft.com',
				        'from_name' => 'Example Name',
				        'to' => array(
				            array(
				                'email' => 'aman_katoch@esferasoft.com',
				                'name' => 'aman',
				                'type' => 'to'
				            )
				        ),
				        'headers' => array('Reply-To' => 'message.reply@example.com'),
				        'important' => false,
				        'track_opens' => null,
				        'track_clicks' => null,
				        'auto_text' => null,
				        'auto_html' => null,
				        'inline_css' => null,
				        'url_strip_qs' => null,
				        'preserve_recipients' => null,
				        'view_content_link' => null,
				        
				        'tracking_domain' => null,
				        'signing_domain' => null,
				        'return_path_domain' => null,
				        'merge' => true,
				        'merge_language' => 'mailchimp',
				        'global_merge_vars' => array(
				            array(
				                'name' => 'merge1',
				                'content' => 'merge1 content'
				            )
				        ),
				        'merge_vars' => array(
				            array(
				                'rcpt' => 'recipient.email@example.com',
				                'vars' => array(
				                    array(
				                        'name' => 'merge2',
				                        'content' => 'merge2 content'
				                    )
				                )
				            )
				        ),
				        'tags' => array('password-resets'),
				        'subaccount' => 'customer-123',
				        'google_analytics_domains' => array('example.com'),
				        'google_analytics_campaign' => 'message.from_email@example.com',
				        'metadata' => array('website' => 'www.example.com')
				       
				    );

                    print_r($message);
                  
				    $async = false;
				    $ip_pool = 'Main Pool';
				    $send_at = 'example send_at';
				    $result = $mandrill->messages->sendTemplate($template_name, $template_content, $message, $async, $ip_pool, $send_at);
				    print_r($result);
?>
