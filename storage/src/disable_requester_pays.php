<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * For instructions on how to run the full sample:
 *
 * @see https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/storage/README.md
 */

namespace Google\Cloud\Samples\Storage;

# [START storage_disable_requester_pays]
use Google\Cloud\Storage\StorageClient;

/**
 * Disable a bucket's requesterpays metadata.
 *
 * @param string $projectId Your Google Cloud project ID.
 * @param string $bucketName Name of your Google Cloud Storage bucket.
 *
 * @return void
 */
function disable_requester_pays($projectId, $bucketName)
{
    $storage = new StorageClient([
        'projectId' => $projectId
    ]);
    $bucket = $storage->bucket($bucketName);
    $bucket->update([
        'billing' => [
            'requesterPays' => false
        ]
    ]);
    printf('Requester pays has been disabled for %s' . PHP_EOL, $bucketName);
}
# [END storage_disable_requester_pays]
