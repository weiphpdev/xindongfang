<?php if (!defined('THINK_PATH')) exit();?><div class="menu_user">
    <dl>
        <dt><a href="<?php echo U('w3g/Index/weibo', array('uid'=>$userInfo['uid']));?>"><img src="<?php echo ($userInfo["avatar_middle"]); ?>" width='60' height='60'/></a></dt>
        <dd><a href="<?php echo U('w3g/Index/weibo', array('uid'=>$userInfo['uid']));?>"><?php echo ($userInfo["uname"]); ?></a></dd>
    </dl>
</div>