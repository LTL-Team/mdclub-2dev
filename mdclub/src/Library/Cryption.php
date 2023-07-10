<?php

declare(strict_types=1);

namespace MDClub\Library;

use Exception;
use MDClub\Constant\ApiErrorConstant;
use MDClub\Constant\OptionConstant;
use MDClub\Exception\ApiException;
use MDClub\Facade\Library\Cache as CacheFacade;
use MDClub\Facade\Library\View as ViewFacade;
use MDClub\Facade\Library\Option as OptionFacade;
use MDClub\Helper\Str;

/**
 * 加密
 */
class Cryption
{
    private $_iv = '';
    private $_secret = '';

    public function __construct($iv, $secret)
    {
        //可以忽略这一步，只要你保证iv长度是16
        $this->_iv = substr($iv . '0000000000000000', 0, 16);
        $this->_secret = hash('md5', $secret, true);
    }

    public function decode($secretData)
    {
        return openssl_decrypt(urldecode($secretData), 'aes-128-cbc', $this->_secret, false, $this->_iv);
    }

    public function encode($data)
    {
        return urlencode(openssl_encrypt($data, 'aes-128-cbc', $this->_secret, false, $this->_iv));
    }
}