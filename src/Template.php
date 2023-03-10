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

class Template
{
    public function getTemplateContent ($fileName)
    {
        $path = TEMPLATES . $fileName . get_config('env.template_suffix');
        return file_get_contents ($path);
    }

    public function getTemplatePath ($fileName)
    {
        return TEMPLATES . $fileName . get_config('env.template_suffix');
    }
}