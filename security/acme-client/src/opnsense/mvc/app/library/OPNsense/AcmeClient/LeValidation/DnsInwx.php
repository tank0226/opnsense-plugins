<?php

/*
 * Copyright (C) 2020-2024 Frank Wall
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice,
 *    this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 * AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 * OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

namespace OPNsense\AcmeClient\LeValidation;

use OPNsense\AcmeClient\LeValidationInterface;
use OPNsense\AcmeClient\LeUtils;
use OPNsense\Core\Config;

/**
 * INWX DNS API
 * @package OPNsense\AcmeClient
 */
class DnsInwx extends Base implements LeValidationInterface
{
    public function prepare()
    {
        $this->acme_env['INWX_User'] = (string)$this->config->dns_inwx_user;
        $this->acme_env['INWX_Password'] = (string)$this->config->dns_inwx_password;
        if (!empty((string)$this->config->dns_inwx_shared_secret)) {
            if ((string)$this->model->isPackageInstalled('oath-toolkit') != '1') {
                LeUtils::log_error('Required package oath-toolkit is NOT installed. Please install the package or remove the INWX Shared Secret.');
                return false;
            }
            $this->acme_env['INWX_Shared_Secret'] = (string)$this->config->dns_inwx_shared_secret;
        }
    }
}
