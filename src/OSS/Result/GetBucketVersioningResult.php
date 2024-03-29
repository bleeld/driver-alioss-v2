<?php

namespace AliOSS\Result;


use AliOSS\Model\VersioningConfig;

/**
 * Class GetBucketVersioningResult
 * @package OSS\Result
 */
class GetBucketVersioningResult extends Result
{
    /**
     *  Parse the VersioningConfig object from the response
     *
     * @return VersioningConfig
     */
    protected function parseDataFromResponse()
    {
        $content = $this->rawResponse->body;
        $config = new VersioningConfig();
        $config->parseFromXml($content);
        return $config->getStatus();
    }
}
