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

namespace presty;

class Model
{
    public function model ($modelClass)
    {
        if(is_bool (stripos ($modelClass,"\\"))){
            $modelClass = appClass ()."\\model"."\\".$modelClass;
        }
        return new $modelClass;
    }
}