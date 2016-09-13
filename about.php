<?php
class about
{
    private $name;      // 姓名
    private $age;       // 年龄
    private $sex;       // 性别
    private $phone;     // 手机
    private $place;     // 籍贯
    private $email;     // 邮箱
    private $address;   // 住址
    private $money;     // 薪资
    private $work;      // 工作
    private $img;       // 头像
    private $color;     // 颜色
    private $position;  // 职位
    private $education; // 学历

    /**
     * Init
     * @var array $attr
     */
    function __construct(array $attr)
    {
        if (!is_array($attr)) {
            return;
        }
        $this->name      = $attr['name'];
        $this->age       = $attr['age'];
        $this->sex       = $attr['sex'];
        $this->phone     = $attr['phone'];
        $this->place     = $attr['place'];
        $this->email     = $attr['email'];
        $this->address   = $attr['address'];
        $this->money     = $attr['money'];
        $this->work      = $attr['work'];
        $this->img       = $attr['img'];
        $this->color     = $attr['color'];
        $this->position  = $attr['position'];
        $this->education = $attr['education'];
    }

    /**
     * End
     */
    function __destruct()
    {
        echo 'Thanks You!<br>该简历由https://github.com/isber00/about生成';
    }

    function run()
    {
        echo <<<STR
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>个人简历</title>
    <style>
        table {border: solid thin #FF6E40;}
        .th{background-color: {$this->color};text-align: left;}
    </style>
</head>
<body>
<table width='60%'>
    <tr>
        <th class='th' colspan='3'>个人信息</th>
    </tr>
    <tr>
        <td>姓名：{$this->name}</td>
        <td>性别：{$this->sex}</td>
        <td rowspan='4'><img src='{$this->img}' width='80' height='98' /></td>
    </tr>
    <tr>
        <td>籍贯：{$this->place}</td>
        <td>年龄：{$this->age}</td>
    </tr>
    <tr>
        <td>邮箱：{$this->email}</td>
        <td>学历：{$this->education}</td>
    </tr>
    <tr>
        <td>手机：{$this->phone}</td>
        <td>QQ：</td>
    </tr>
    <tr>
        <th class='th' colspan='3'>求职意向</th>
    </tr>
    <tr>
        <td>期望薪资：{$this->money}</td>
        <td>期望工作职位：{$this->position}</td>
        <td>期望工作地点：{$this->work}</td>
    </tr>
    <tr>
        <th class='th' colspan='3'>专业技能</th>
    </tr>
    <tr>
        <td colspan='3'><pre>{$this->skill()}</pre></td>
    </tr>
    <tr>
        <th class='th' colspan='3'>工作经验</th>
    </tr>
    <tr>
        <td colspan='3'><pre>{$this->workExperience()}</pre></td>
    </tr>
    <tr>
        <th class='th' colspan='3'>项目经验</th>
    </tr>
    <tr>
        <td colspan='3'><pre>{$this->productExperience()}</pre></td>
    </tr>
    <tr>
        <th class='th' colspan='3'>自我评价</th>
    </tr>
    <tr>
        <td colspan='3'><pre>{$this->about()}</pre></td>
    </tr>
</table>
</body>
</html>
STR;
    }

    /**
     * 技能
     */
    private function skill()
    {
        return <<<STR
精通PHP编程语言、OOP面向对象、MVC开发思想，且有良好的编码习惯。
熟练使用Linux操作系统且熟悉搭建编程环境。
熟练MySql数据库、SqlServer数据库、SQL优化。
熟练使用Thinkphp、Zend Framework框架，有需要都可学习。
熟练Javascript、JQuery、Ajax、DIV+CSS编写。
熟练使用Redis、memcache等非关系型数据库。
熟练使用SVN、Git版本控制工具
掌握Smarty模板引擎技术。
了解微信第三方接口开发，可迅速上手
STR;
    }

    /**
     * 工作经验
     */
    private function workExperience()
    {
        return <<<STR
时间：2014/06 – 2015/04     
公司：深圳市找我没错网络科技有限公司      
职位：PHP开发工程师

时间：2015/06 – 2016/09     
公司：上海贝锐信息科技有限公司      
职位：PHP开发工程师
STR;
    }

    /**
     * 项目经验
     */
    private function productExperience()
    {
        return <<<STR
项目名称：易购手机商城
项目环境：WAMP
项目描述：本项目主要是通过php+mysql+smarty来实现对网站的开发，前台页面展示每个模块的热销手机，
各品牌的手机型号，包括人气推荐，新品上市，精品推荐等产品的展示，通过搜索模块对产品的搜索展示，
其他功能模块包括网站管理模块，用户中心模块，商品管理模块，订单管理模块，商品栏目模块等。
职责描述：本人主要负责用户中心模块：通过ajax实现无刷新用户名验证，使用ajax实现注册时的省市联动。
商品管理模块：主要负责对数据库数据进行CRUD操作完成对后台商品管理，商品分类采用无限级分类思想。
通过CRUD操作来实现商品的增删改查，删除操作是通过更改表结构相应字段，并不会真正删除记录。

项目名称：上海市新锐建材公司网站
项目环境：WAMP
项目描述：该项目使用ThinkPHP框架进行网站的开发，前台新闻功能模块，产品展示模块，客户留言模块，
产品管理功能模块，留言管理模块，栏目管理模块，新闻管理模块等。
职责描述：本人主要负责后台管理登陆模块，产品CRUD管理模块，留言审核，新闻动态管理，
考虑到安全方面，采用字段映射。字段缓存优化，系统用户管理模块等，实现产品的前台展示到后台的管理。

项目名称：运营系统
项目环境：LNMP
项目描述：该项目是通过Zend Framework+Smarty+SqlServer+Linux架构，用于管理公司产品业务，
财务审计，人事记录，销售系统，用户行为，员工管理，统计各产品销售情况，权限控制，网站日志，
商城管理，等等公司产品线的业务。
职责描述：本人主要负责产品业务分析，功能模块开发，员工体验设计，优化迁移老版程序代码。
STR;
    }

    /**
     * 自我评价
     */
    private function about()
    {
        return <<<STR
    在学习中，我坚信努力坚持必定会有回报，我喜欢开发，在学习的过程中，不断总结、思考自己
到底收获了什么，每一次的实践，让我具备了良好的综合素质和较强的学习能力，掌握了一定的知识与技术，
也让我体会到了互联网的强大与未来的发展的方向。
    在生活中，我喜欢观察生活中的点点滴滴，不断体会生活中的喜怒哀乐，喜欢在业余时间到外面走走，
逛逛技术论坛或博客，学习新知识。
    在工作中，我坚持以身作则，尽心尽力的完成领导分配的每一项任务，并且能在团队合作中以最快的速度
融入团队工作中，保持良好的团队沟通、交流能力，在努力工作的同时不断完善提升自己。
STR;
    }
}