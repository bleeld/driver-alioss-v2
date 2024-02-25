<?php
namespace AliOSS\Credentials;

interface CredentialsProvider
{

    /**
     * @return Credentials
     */
    public function getCredentials();
}