<?php
namespace Admin\Controller;
use Think\Controller;
class SqlController extends CommonController {
    public function factory()
    {
        $sql = "CREATE TABLE if not exists car_factory (
                id int primary key AUTO_INCREMENT,
                factory_name_ch varchar(60),
                factory_name_en varchar(60),
                factory_name_py varchar(200),
                factory_display varchar(8),
                factory_weight int(20),
                factory_img varchar(20)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('factory') ) {
            echo "操作成功";
        }
    }

 public function chexing()
    {
        $sql = "CREATE TABLE if not exists car_chexing (
                id int primary key AUTO_INCREMENT,
                factory_id int(30),
				chexing_name_ch varchar(60),
                chexing_name_en varchar(60),
                chexing_name_py varchar(200),
                chexing_display varchar(8),
                chexing_weight int(20)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('chexing') ) {
            echo "操作成功";
        }
    }

    public function guige()
    {
        $sql = "CREATE TABLE if not exists car_guige (
                id int primary key AUTO_INCREMENT,
                factory_id varchar(60),
                chexing_id varchar(60),
				year_id int(20),
				chexing_type varchar(60),
				oil_id varchar(20),
				kuanxing_id varchar(20),
				guige_name_ch varchar(60),
				liter float(20),
                guige_display varchar(8),
                guige_weight int(20)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('guige') ) {
            echo "操作成功";
        }
    }

    public function kuanxing()
    {
        $sql = "CREATE TABLE if not exists car_kuanxing (
                id int primary key AUTO_INCREMENT,
                kuanxing_name_ch varchar(60),
                kuanxing_display varchar(8),
                kuanxing_weight int(20)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('kuanxing') ) {
            echo "操作成功";
        }
    }




public function oil()
    {
        $sql = "CREATE TABLE if not exists car_oil (
                id int primary key AUTO_INCREMENT,
                oil_name_ch varchar(60),
                oil_display varchar(8),
                oil_weight int(20)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('oil') ) {
            echo "操作成功";
        }
    }




	 public function year()
    {
        $sql = "CREATE TABLE if not exists car_year (
                id int primary key AUTO_INCREMENT,
                year_name_ch varchar(60),
                year_display varchar(8),
                year_weight int(20)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('year') ) {
            echo "操作成功";
        }
    }


 public function company()
    {
        $sql = "CREATE TABLE if not exists car_company (
                id int primary key AUTO_INCREMENT,
                company_name_ch varchar(60),
                company_introduct varchar(600),
                company_person varchar(60),
				company_phone int(60),
				company_address varchar(600),
                company_display varchar(8),
                company_weight int(20),
                company_img varchar(20)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('company') ) {
            echo "操作成功";
        }
    }


	  public function wx_user()
    {
    	$sql = "CREATE TABLE if not exists car_wx_user (
                id int primary key AUTO_INCREMENT,
                user_openid varchar(60),
                user_type varchar(20),
                user_phone varchar(30),
                user_password varchar(30),
                user_wx_nickname varchar(60),
                user_wx_country varchar(60),
                user_wx_province varchar(60),
                user_wx_city varchar(60),
                user_wx_sex varchar(10),
                user_wx_headimgurl varchar(300),
				user_name varchar(100),
				user_staff varchar(8),
				user_receive varchar(8),
				user_register_time varchar(32)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('wx_user') ) {
            echo "操作成功";
        }
    }


	public function price()
    {
        $sql = "CREATE TABLE if not exists car_price (
                id int primary key AUTO_INCREMENT,
                factory_id varchar(60),
                chexing_id varchar(60),
				year_id int(20),
				guige_id varchar(60),
				company_id varchar(300),
				sum int(20),
				pihao varchar(60),
				dtime varchar(32),
				canshu varchar(300),
				peizhi varchar(300),
				color varchar(30),
                price_display varchar(8),
				nowprice varchar(60),
				priceshijia int(16),
				pricedao decimal(60),
				priceli decimal(60),
				pricezai decimal(60),
				priceqi decimal(60),
				wangzhi varchar(300),
				surplus int(60),
				zifu varchar(300)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('price') ) {
            echo "操作成功";
        }
    }

	public function staff()
    {
        $sql = "CREATE TABLE if not exists car_staff (
                id int primary key AUTO_INCREMENT,
                staff_number varchar(60),
                bumen_id varchar(60),
				zhiwu_id varchar(60),
				staff_name_ch varchar(60),
				staff_name varchar(60),
				pwds varchar(60),
				creatime varchar(60),
				staff_sex varchar(8),
				account_use varchar(60),
                email varchar(60)
		) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('staff') ) {
            echo "操作成功";
        }
    }


	public function bumen()
    {
        $sql = "CREATE TABLE if not exists car_bumen (
                id int primary key AUTO_INCREMENT,
                bumen_name_ch varchar(60),
                bumen_display varchar(8),
                bumen_weight int(20)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('bumen') ) {
            echo "操作成功";
        }
    }


	public function zhiwu()
    {
        $sql = "CREATE TABLE if not exists car_zhiwu (
                id int primary key AUTO_INCREMENT,
                bumen_id varchar(60),
                zhiwu_name_ch varchar(60),
				remark varchar(60),
                admin_or varchar(8)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('zhiwu') ) {
            echo "操作成功";
        }
    }


	public function jiedian()
    {
        $sql = "CREATE TABLE if not exists car_zhiwu (
                id int primary key AUTO_INCREMENT,
                jiedian_title varchar(60),
				jiedian_memo varchar(200),
				jiedian_url varchar(150)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('jiedian') ) {
            echo "操作成功";
        }
    }



	public function pritype()
    {
        $sql = "CREATE TABLE if not exists car_zhiwu (
                id int primary key AUTO_INCREMENT,
                pritype_name varchar(60),
                pritype_weight int(16)
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('pritype') ) {
            echo "操作成功";
        }
    }
    public function Guanggao()
    {
        $sql = "CREATE TABLE if not exists car_guanggao (
                id int primary key AUTO_INCREMENT,
                guanggao_name varchar(60),
                guanggao_content varchar(60),
                guanggao_weight varchar(60),
                guanggao_img varchar(60),
                guanggao_lianjie varchar(60)
                
        ) DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci";
        $Model = new \Think\Model(); // 实例化一个model对象 没有对应任何数据表
        $Model->execute($sql);

        if ( $user=M('guanggao') ) {
            echo "操作成功";
        }
    }
}