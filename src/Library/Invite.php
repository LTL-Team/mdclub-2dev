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
use MDClub\Library\Cryption;

/**
 * 邀请验证
 */
class Invite
{
    public function checkInviteCode(string $code): bool
    {
        $crypt = new Cryption();
        $crypt->__construct('91084578', 'tltteam106792385');
        return time() - intval($crypt->decode($code)) < 259200;
    }
}