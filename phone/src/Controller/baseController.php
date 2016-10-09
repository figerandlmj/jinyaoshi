<?php

/**
 *  
 */
class baseController extends Controller
{
    protected $secondhandArgs = array(
        // 信息类型
        'type' => array(
            1 => '二手信息'
        ),
        // 新旧程度
        'new_percent' => array(
            1 => '九成新',
            2 => '八成新',
            3 => '七成新',
            4 => '九成新',
            5 => '六成新',
            6 => '六成新以下'
        ),
        // 购买时间
        'buy_time' => array(
            1 => '半年内购买',
            2 => '一年内购买',
            3 => '两年内购买'
        )
    );

    protected $recruitmentArgs = array(
        'type' => array(
            1 => '招聘全职',
            2 => '招聘兼职'   
        )
    );

    protected $jobArgs = array(
        // 求职类型
        'type' => array(
            1 => '找全职',
            2 => '找兼职'
        ),
        // 所在学校
        'address1' => array(
            1 => '安徽师范大学',
            2 => '安徽机电学院',
            3 => '安徽商贸学院',
            4 => '安徽工程大学',
            5 => '皖南医学院',
            6 => '芜湖职业技术学院',
            7 => '安徽商贸职业技术学院',
            8 => '芜湖信息职业技术学院',
            9 => '安徽机电职业技术学院',
            10 => '安徽省中医药高专',
            11=> '商家',
            12=> '其他'
        )
    );

    // 用户注册地址参数
    protected $userArgs = array(
        'address1' => array(
            1 => '弋江区',
            2 => '镜湖区',
            3 => '三山区',
            4 => '鸠江区',
        ),
        'address2' => array(
            1 => '安徽师范大学',
            2 => '安徽机电学院',
            3 => '安徽商贸学院',
            4 => '安徽工程大学',
            5 => '皖南医学院',
            6 => '芜湖职业技术学院',
            7 => '安徽商贸职业技术学院',
            8 => '芜湖信息职业技术学院',
            9 => '安徽机电职业技术学院',
            10 => '安徽省中医药高专',
            11=> '商家',
            12=> '其他'
        )
    );

    public function __construct()
    {
        parent::__construct();
        // if(!$this->is_weixin()) exit;
    }

    /**
     * 验证是否已登录
     */
    function checkLogin()
    {
        if( isset($_SESSION['userid']) ) {
            return 1;
        }

        return 0;
    }

    /**
     * 验证是否已登录
     */
    function checkAdminLogin()
    {
        return (isset($_SESSION['admin_userid']) && $_SESSION['admin_userid'] > 0) ? 1 : 0;
    }

    /**
     * 注销
     */
    function logout()
    {
        // session_start();
        session_destroy();

        $this->redirectPage('index.php?c=user&a=login');
        // unset($_SESSION);
    }

    function response($data)
    {
        echo json_encode($data);
        exit;
    }

    function halt($data)
    {
       echo '<pre>'; print_r($data); exit;
    }

    function redirectPage($url)
    {
        header("Location: " . $url);
        exit;
    }
    
    function is_weixin(){
        if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
                return true;
        }  
        return false;
    }

    /**
     * 提示信息页面跳转
     * showmessage('登录成功', 跳转地址);
     * @param string $msg 提示信息
     * @param mixed(string/array) $url_forward 跳转地址
     * @param int $ms 跳转等待时间
     */
    public function showMessage($msg, $url_forward = 'goback', $ms = 2250) {
        $this -> _view('message.php', array('msg' => $msg, 'url_forward' => $url_forward, 'ms' => $ms));
        exit;
    }

    /**
     * 获取请求ip
     *
     * @return ip地址
     */
    public function ip() {
        if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
            $ip = getenv('REMOTE_ADDR');
        } elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return preg_match ( '/[\d\.]{7,15}/', $ip, $matches ) ? $matches [0] : '';
    }

    /**
     *
     */
    public function get_server_var($id)
    {
        return isset($_SERVER[$id]) ? $_SERVER[$id] : '';
    }



}