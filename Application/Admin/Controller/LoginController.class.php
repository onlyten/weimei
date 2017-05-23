<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	public function login ()
	{
		$this->display();
	}

	public function login_check()
	{
		$username = I('post.username');
		$password = I('post.password');         
        $m = M('admininfo');
        $map['name']=array('eq',$username );
        $map['password']=array('eq',$password );
        $list=$m->where($map)->limit(1)->select();
        if( count($list)>0)
        {
			session('atype',$list[0]['type']);	
			session('uid',$list[0]['id']);	
			session('username',$username);	
			$this->redirect('Server/server_list');
        }
        else{
        	$this->error('用户名或密码错误，请重试',U('login'));
        }
		/*if ($username == C('USER_NAME') && $password == C('PASS_WORD')) {
			session('uid','0');	
			session('username',$username);			
			$this->redirect('Server/server_list');
		}else{			
			$this->error('用户名或密码错误，请重试',U('login'));
		}*/
	}
    

    public function pwd_modify()
	{
		//列表
		if(isset($_SESSION["username"])){
		$id=$_SESSION["uid"];		

        $m = M('admininfo');
        $map['id']= array('eq',$id );
        $user=$m->where($map)->select();
        $this->assign('user', $user);
		$this->display();
	    }else{
			$this->redirect('Login/login');
		}
	}

	public function pwd_modify_update()
	{	
		$txtpwd = I('post.txtpwd');
        $id=I('post.txtid');  
        $data['password']=$txtpwd;
        $data['updatetime']=date('y-m-d H:m:s',time());      
		//dump($id);
		$m=M('admininfo');
		$map['id']=array('eq',$id);

		if($m->where($map)->save($data))
		{
			$this->success('密码修改成功,请重新登录！',U('logout'));
			//$this->logout();
		}
		else
		{
			$this->error('密码修改失败');
		}
	}


	public function logout()
	{
		session('uid',null);
		session('atype',null);
		session('username',null);
		$this->redirect('login');
	}

}