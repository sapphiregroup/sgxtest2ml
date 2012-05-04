<?php
try
{
  $payload = json_decode($_REQUEST['payload']);
}
catch(Exception $e)
{
  exit(0);
}

//log the request
file_put_contents('gitlog.txt', print_r($payload, TRUE), FILE_APPEND);


if ($payload->ref === 'refs/heads/master')
{
file_put_contents('gitlog.txt', print_r("Inside Payload Correct", TRUE), FILE_APPEND);
  // path to your site deployment script
file_put_contents('gitlog.txt', print_r("Exec Deploy Payload", TRUE), FILE_APPEND);
//  exec('./git_deploy.sh');
shell_exec('git pull');
file_put_contents('gitlog.txt', print_r("End Deploy Payload", TRUE), FILE_APPEND);
}