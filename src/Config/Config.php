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

//框架参数配置
const FRAME_WORK_NAME = 'Presty';
const MAIN_VERSION = "1.0.0-dev-3";
const VERSION = "1.0.0-a01a4060-9d89-49de-918a-a16bb3c33b26-dev-3";
const APP_NAME = "Presty";
const APP_SUB_NAME = "一款轻量级、易上手、完善化的后端PHP开发框架";


//系统基础配置
if (php_sapi_name () != "cli" && php_sapi_name() != 'phpdbg') define ('ROOT', dirname ($_SERVER["DOCUMENT_ROOT"]) . DIRECTORY_SEPARATOR);
else define ('ROOT', dirname (__DIR__,5) . DIRECTORY_SEPARATOR);
const DS = DIRECTORY_SEPARATOR;
const DIR = ROOT  . "vendor" . DS . "upstair" . DS . "presty-core" . DS . "src" . DS;
const APP = ROOT . 'app' . DS;
const PUBLICDIR = ROOT . 'public' . DS;
const STATICDIR = PUBLICDIR . 'static' . DS;
const CACHE = PUBLICDIR . 'cache' . DS;
const CONFIG = ROOT . 'config' . DS;
const ROUTE = CONFIG . 'route' . DS;
const LANGUAGES = DIR . 'Languages' . DS;
const FORMAT = DIR . 'Response' . DS;
const MODEL = ROOT . 'model' . DS;
const TEMPLATES = PUBLICDIR . 'templates' . DS;
define ('HTTP', ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://');

//模板引擎参数配置
const DEFAULT_APP_NAME = 'Index';//默认应用名称名称
const DEFAULT_APP = APP . DEFAULT_APP_NAME . DS;
