<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="ui container offset">
    <div class="ui service detail grid">
        <div class="nine wide column">
            <div class="ui left padded segment">
                <nav class="ui breadcrumb">
                    <?php $this->category(','); ?>
                    <i class="icon double right angle"></i>
                    <span class="section"><?php $this->title() ?></span></nav>
                <div class="ui title header">
                    <?php $this->title() ?>
                </div>
                <div class="description">
                    <?php $this->content(); ?>
                </div>
                <div class="description">
                </div>
            </div>
        </div>
        <aside class="three wide column service sidebar">
            <div class="ui segment">
                <div class="user detail">
                    <a class="avatar" href="<?php $this->author->permalink(); ?>">
                        <?php $this->author->gravatar("70") ?>
                    </a>
                    <div class="information">
                        <a class="username" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                        <span>
                      <!--<span class="ui mini grey button">
                        <i class="graph tiny message"></i>聊天
                        </span>-->
                        </span>
                    </div>
                    <div class="ui divider"></div>
                    <span class="ui mini grey button">
                  <?php $this->tags('</span><span class="ui mini grey button"> ', true, 'None'); ?>
                  </span>
                </div>
            </div>
            <div class="ui segment">
                <p class="ui tiny">相关文章:</p>
                <ul class="ui link list">
                    <?php $this->related(5)->to($relatedPosts); ?>
                    <?php if ($relatedPosts->have()): ?>
                    <?php while ($relatedPosts->next()): ?>
                    <a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>" class="item"><?php $relatedPosts->title(); ?></a>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <p>暂无相关文章</p>
                    <?php endif; ?>
                </ul>
            </div>
        </aside>
    </div>
</div>
<?php $this->need('footer.php'); ?>