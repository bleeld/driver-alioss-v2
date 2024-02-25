<?php
namespace AliOSS\Signer;

use AliOSS\Http\RequestCore;
use AliOSS\Credentials\Credentials;

interface SignerInterface
{
    public function sign(RequestCore $request, Credentials $credentials, array &$options);

    public function presign(RequestCore $request, Credentials $credentials, array &$options);
}