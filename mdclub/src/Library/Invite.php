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
    private $inviteTime = 259200; // 邀请码有效期（秒）
    private $cryptIv = '91084578'; // 加密向量
    private $cryptKey = 'tltteam106792385'; // 加密密钥
    public function checkInviteCode(string $code): bool
    {
        $crypt = new Cryption();
        $crypt->__construct($this->cryptIv, $this->cryptKey);
        return time() - intval($crypt->decode($code)) < $this->inviteTime;
    }
}