<?php
require sprintf('%s/../vendor/autoload.php', __DIR__);

use S3BucketStreamZip\S3BucketStreamZip;
use S3BucketStreamZip\Exception\InvalidParameterException;

$stream = new S3BucketStreamZip(
            // $auth
            array(
              'key'     => '*********',   // required
              'secret'  => '*********'    // required
            ),
            // $params
            array(
              'Bucket'  => 'bucketname',  // required
              'Prefix'  => 'subfolder/'   // optional (path to folder to stream)
            )
          );

$stream->send('name-of-zipfile-to-send.zip');