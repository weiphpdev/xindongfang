<?php if (!defined('THINK_PATH')) exit();?><span class="title-from-source hidden"><i class="ico-weiba"></i>发表在 <a href="<?php echo ($sourceInfo['weiba_url']); ?>" target="_blank"><?php echo ($sourceInfo['weiba_name']); ?></a></span>
<div class="contents clearfix">
		<p><a target="_blank" href="<?php echo ($sourceInfo['source_url']); ?>">帖子&nbsp;|&nbsp;<?php echo ($sourceInfo['title']); ?></a>&nbsp;<?php echo getShort($sourceInfo['content'], intval(110-get_str_length($sourceInfo['title'])), '...');?></a></p>
    <?php if(!empty($sourceInfo['pic_url'])): ?>
    <div class="feed_img_lists">
    	<ul class="small">
        	<li style="width: 205px; height: auto;">
            	<a target="_blank" href="<?php echo ($sourceInfo['source_url']); ?>"><img onload="/*仅标签上有效，待改进*/;var li=$(this).parents('li');if(li.height()>300){li.css('height','300px');li.find('.pic-btm').show();}" class="imgicon" src="<?php echo ($sourceInfo['pic_url_medium']); ?>" style="cursor:pointer" /></a>		
        	</li>
        </ul>
    </div>
	<?php endif; ?>
</div>