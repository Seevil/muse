<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
            <div class="ui container offset services-page">
                <div class="ui segments facets">
                    <div class="ui segment search facets">
                        <div class="ui middle filled grid">
                            <div class="column label"><?php $this->archiveTitle(array(
							'category'  =>  _t('分类 %s 下的文章'),
							'search'    =>  _t('包含关键字 %s 的文章'),
							'tag'       =>  _t('标签 %s 下的文章'),
							'author'    =>  _t('%s 发布的文章')
						), '', ''); ?></div>
                        </div>
                    </div>
                </div>
                <div class="search result">
                    <div class="ui four cards">
						<?php if ($this->have()): ?>
						<?php while($this->next()): ?>
                        <div class="ui service link card">
                            <div class="actions">
                            </div>
                            <a href="<?php $this->permalink() ?>">
                             <?php if (array_key_exists('thumb',unserialize($this->___fields()))): ?>
                                <img class="" src="<?php $this->options->themeUrl('thumb.php?src='); ?><?php echo $this->fields->thumb;?>&size=280x280"></a>
                            <?php else : ?>
                            <?php $thumb = showThumb($this,null,true);?>
                            <img class="" src="<?php $this->options->themeUrl('thumb.php?src='); ?><?php echo $thumb;?>&size=280x280"></a>
                            <?php endif; ?>
                            
                            <div class="content">
                                <label class="title"><?php $this->title() ?></label></div>
                            <footer class="extra content">
                                <label class="price"><small><?php $this->author(); ?> / <?php $this->category(',', false); ?></small></label>
                                <p class="tip"><?php $this->excerpt(15, '...');?></p>
                            </footer>
                        </div>
						<?php endwhile; ?>
						<?php else: ?>
                <div class="title"><?php _e('没有找到内容,请换别的关键字进行检索'); ?></div>
		        <?php endif; ?>
                    </div>
                </div>
                <div class="ui basic center aligned segment">                  
            <?php $this->pageNav('«', '»', 1, '...', array('wrapTag' => 'nav', 'wrapClass' => 'ui pagination menu', 'itemTag' => '', 'textClass' => 'item','prevClass' => 'item', 'pageClass' => 'item','nextClass' => 'item', 'currentClass' => 'item' )); ?>                    
                </div>
            </div>
<?php $this->need('footer.php'); ?>