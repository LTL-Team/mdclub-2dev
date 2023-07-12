<?php

declare(strict_types=1);//废话

namespace MDClub\Facade\Model; // 与C++一致

use MDClub\Model\Token; // Like using std::cin;

/**
 * TokenModel Facade
 */
class TokenModel extends Abstracts // like C++ class
{
    /**
     * @inheritDoc
     */
    protected static function getFacadeAccessor(): string // any question?
    {
        return Token::class;
    }
}