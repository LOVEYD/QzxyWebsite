<?php

/* 网站地址配置 */
    define('SITE','');
    define('SHASH','5f5a0ecbb31ef7860c8d8aec79a23777');
    define('STATIC_ROOT', SITE.'/static');
    define('DATA_ROOT', SITE.'/data');
    define('ADDON_ROOT','http:'.SITE.'/application/addons');

/* 网站模板配置 */
    $TPLT = 'default';
    defined('TPL_PATH') or define('TPL_PATH', ROOT_PATH.'/template/'.$TPLT . DS);

    return [
        // +----------------------------------------------------------------------
        // | 应用设置
        // +----------------------------------------------------------------------

        // 应用命名空间
        'app_namespace'          => 'qzxy',
        // 应用调试模式
        'app_debug'              => true,
        // 应用Trace
        'app_trace'              => false,
        // 应用模式状?
        'app_status'             => '',
        // 是否支持多模?
        'app_multi_module'       => true,
        // 入口自动绑定模块
        'auto_bind_module'       => false,
        // 注册的根命名空间
        'root_namespace'         => [],
        // 扩展函数文件
        'extra_file_list'        => [
            THINK_PATH . 'helper' . EXT,
            ],
        // 默认输出类型
        'default_return_type'    => 'html',
        // 默认AJAX 数据返回格式,可选json xml ...
        'default_ajax_return'    => 'json',
        // 默认JSONP格式返回的处理方?
        'default_jsonp_handler'  => 'jsonpReturn',
        // 默认JSONP处理方法
        'var_jsonp_handler'      => 'callback',
        // 默认时区
        'default_timezone'       => 'PRC',
        // 是否开启多语言
        'lang_switch_on'         => true,
        // 默认全局过滤方法 用逗号分隔多个
        'default_filter'         => 'htmlspecialchars',
        // 默认语言
        'default_lang'           => 'zh-cn',
        // 应用类库后缀
        'class_suffix'           => false,
        // 控制器类后缀
        'controller_suffix'      => false,

        // +----------------------------------------------------------------------
        // | 模块设置
        // +----------------------------------------------------------------------
        // 默认模块?
        'default_module'         => 'index',
        // 禁止访问模块
        'deny_module_list'       => ['common'],
        // 默认控制器名 应用主文件名? 主class?
        'default_controller'     => 'Index',
        // 默认操作?
        'default_action'         => 'main',
        // 默认验证?
        'default_validate'       => '',
        // 默认的空控制器名
        'empty_controller'       => 'Error',
        // 操作方法后缀
        'action_suffix'          => '',
        // 自动搜索控制?
        'controller_auto_search' => true,

        // +----------------------------------------------------------------------
        // | URL设置
        // +----------------------------------------------------------------------

        // PATHINFO变量? 用于兼容模式
        'var_pathinfo'           => 's',
        // 兼容PATH_INFO获取
        'pathinfo_fetch'         => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
        // pathinfo分隔?
        'pathinfo_depr'          => '/',
        // URL伪静态后缀
        'url_html_suffix'        => 'html',
        // URL普通方式参? 用于自动生成
        'url_common_param'       => false,
        // URL参数方式 0 按名称成对解? 1 按顺序解?
        'url_param_type'         => 1,
        // 是否开启路?
        'url_route_on'           => true,
        // 路由使用完整匹配
        'route_complete_match'   => false,
        // 路由配置文件（支持配置多个）
        'route_config_file'      => ['route'],
        // 是否强制使用路由
        'url_route_must'         => false,
        // 域名部署
        'url_domain_deploy'      => false,
        // 域名根，如thinkphp.cn
        'url_domain_root'        => '101.7.159.135',
        // 是否自动转换URL中的控制器和操作?
        'url_convert'            => true,
        // 默认的访问控制器?
        'url_controller_layer'   => 'controller',
        // 表单请求类型伪装变量
        'var_method'             => '_method',
        // 表单ajax伪装变量
        'var_ajax'               => '_ajax',
        // 表单pjax伪装变量
        'var_pjax'               => '_pjax',
        // 是否开启请求缓? true自动缓存 支持设置请求缓存规则
        'request_cache'          => false,
        // 请求缓存有效?
        'request_cache_expire'   => null,

        // +----------------------------------------------------------------------
        // | 模板设置
        // +----------------------------------------------------------------------

        'template'               => [
            // 模板引擎类型 支持 php think 支持扩展
            'type'         => 'Think',
            // 模板路径
            'view_path'    => TPL_PATH,
            // 模板后缀
            'view_suffix'  => 'html',
            // 模板文件名分隔符
            'view_depr'    => DS,
            // 去除模板文件里面的html空格与换?
            'strip_space'        => true,
            // 开启模板编译缓?
            'tpl_cache'          => false,
            // 模板引擎普通标签开始标?
            'tpl_begin'    => '{',
            // 模板引擎普通标签结束标?
            'tpl_end'      => '}',
            // 标签库标签开始标?
            'taglib_begin' => '{',
            // 标签库标签结束标?
            'taglib_end'   => '}',
        ],

        // 视图输出字符串内容替?
        'view_replace_str'       => [],
        // 默认跳转页面对应的模板文?
        'dispatch_success_tmpl'  => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',
        'dispatch_error_tmpl'    => THINK_PATH . 'tpl' . DS . 'dispatch_jump.tpl',

        // +----------------------------------------------------------------------
        // | 异常及错误设?
        // +----------------------------------------------------------------------
        'http_exception_template'    =>  [
            401 =>  TPL_PATH.'error/401.html',
            400 =>  TPL_PATH.'error/400.html',
            404 =>  TPL_PATH.'error/404.html',
            500 =>  TPL_PATH.'error/500.html',
            503 =>  TPL_PATH.'error/503.html',
        ],
        // 异常页面的模板文?
        'exception_tmpl'         => THINK_PATH . 'tpl' . DS . 'think_exception.tpl',

        // 错误显示信息,非调试模式有?
        'error_message'          => '页面错误！请稍后再试?',
        // 显示错误信息
        'show_error_msg'         => false,
        // 异常处理handle? 留空使用 \think\exception\Handle
        'exception_handle'       => '',

        // +----------------------------------------------------------------------
        // | 日志设置
        // +----------------------------------------------------------------------

        'log'                    => [
            // 日志记录方式，内? file socket 支持扩展
            'type'  => 'File',
            // 日志保存目录
            'path'  => LOG_PATH,
            // 日志记录级别
            'level' => [],
        ],

        // +----------------------------------------------------------------------
        // | Trace设置 开? app_trace ? 有效
        // +----------------------------------------------------------------------
        'trace'                  => [
            // 内置Html Console 支持扩展
            'type' => 'Html',
        ],

        // +----------------------------------------------------------------------
        // | 缓存设置
        // +----------------------------------------------------------------------

        'cache'                  => [
            // 驱动方式
            'type'   => 'File',
            // 缓存保存目录
            'path'   => CACHE_PATH,
            // 缓存前缀
            'prefix' => '',
            // 缓存有效? 0表示永久缓存
            'expire' => 0,
        ],

        // +----------------------------------------------------------------------
        // | 会话设置
        // +----------------------------------------------------------------------

        'session'                => [
            'id'             => '',
            // SESSION_ID的提交变?,解决flash上传跨域
            'var_session_id' => '',
            // SESSION 前缀
            'prefix'         => 'think',
            // 驱动方式 支持redis memcache memcached
            'type'           => '',
            // 是否自动开? SESSION
            'auto_start'     => true,
        ],

        // +----------------------------------------------------------------------
        // | Cookie设置
        // +----------------------------------------------------------------------
        'cookie'                 => [
            // cookie 名称前缀
            'prefix'    => '',
            // cookie 保存时间
            'expire'    => '3600',
            // cookie 保存路径
            'path'      => '../',
            // cookie 有效域名
            'domain'    => '',
            //  cookie 启用安全传输
            'secure'    => false,
            // httponly设置
            'httponly'  => '',
            // 是否使用 setcookie
            'setcookie' => true,
        ],

        //分页配置
        'paginate'               => [
            'type'      => 'bootstrap',
            'var_page'  => 'page',
            'list_rows' => 15,
        ],
    ];