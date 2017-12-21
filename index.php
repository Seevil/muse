<?php
/**
 * Muse是一款简洁的Typecho主题
 *
 * @package Muse Theme
 * @author Intern
 * @version 1.0.0
 * @link https://blog.xde.io/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
            <div class="ui container offset services-page">
                <div class="ui segments facets">
                    <div class="ui segment search facets">
                        <div class="ui middle filled grid">
                            <div class="column label">分类:</div>
                            <nav class="middle column list">
                                <a class="item active" href="/">全部</a>
                                <?php $this->widget('Widget_Metas_Category_List')->parse('<a class="item" href="{permalink}">{name}</a>'); ?>                        
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="search result">
                    <div class="ui four cards">
						<?php while($this->next()): ?>
                        <div class="ui service link card">
                            <div class="actions">
                            </div>
                            <a href="<?php $this->permalink() ?>">
                             <?php if (array_key_exists('thumb',unserialize($this->___fields()))): ?>
                                <img src="<?php $this->options->themeUrl('thumb.php?src='); ?><?php echo $this->fields->thumb;?>&size=280x280"></a>
                            <?php else : ?>
                            <?php $thumb = showThumb($this,null,true);?>
                            <img  src="<?php $this->options->themeUrl('thumb.php?src='); ?><?php echo $thumb;?>&size=280x280"></a>
                            <?php endif; ?>
                            
                            <div class="content">
                                <label class="title"><?php $this->title() ?></label></div>
                            <footer class="extra content">
                                <label class="price"><small><?php $this->author(); ?> / <?php $this->category(',', false); ?></small></label>
                                <p class="tip"><?php $this->excerpt(15, '...');?></p>
                            </footer>
                        </div>
						<?php endwhile; ?>
                    </div>
                </div>
                <div class="ui basic center aligned segment">                  
            <?php $this->pageNav('«', '»', 1, '...', array('wrapTag' => 'nav', 'wrapClass' => 'ui pagination menu', 'itemTag' => '', 'textClass' => 'item','prevClass' => 'item', 'pageClass' => 'item','nextClass' => 'item', 'currentClass' => 'item' )); ?>                    
                </div>
            </div>
<?php $this->need('footer.php'); ?>