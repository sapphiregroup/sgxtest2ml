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
// DEBUG
// file_put_contents('gitlog.txt', print_r($payload, TRUE), FILE_APPEND);
$timestamp=date("d-m-y-",time());
file_put_contents('gitlog.txt', print_r("$timestamp - Push initiated by GIT", TRUE), FILE_APPEND);


if ($payload->ref === 'refs/heads/master')
{
shell_exec('git pull');
}