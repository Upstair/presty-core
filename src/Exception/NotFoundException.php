<?php
/*
 * +----------------------------------------------------------------------
 * | Presty Framework
 * +----------------------------------------------------------------------
 * | Copyright (c) 20021~2022 Tomanday All rights reserved.
 * +----------------------------------------------------------------------
 * | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * +----------------------------------------------------------------------
 * | Email: 790455692@qq.com
 * +----------------------------------------------------------------------
 */

namespace presty\exception;

use presty\Exception;
use Psr\Container\NotFoundExceptionInterface;

//Presty Exception Class
class NotFoundException extends Exception  implements NotFoundExceptionInterface
{
    public function __construct ($errorMessage = '',$errorFile = __FILE__,$errorLine = __LINE__,$errorCode = "EC100016")
    {
        parent::throw ($errorFile,$errorLine,$errorCode,"Not Found Error",$errorMessage);
    }
}