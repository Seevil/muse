<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<footer class="site footer">
    <div class="ui container links">
        <h2 class="ui header"><?php $this->options->title(); ?></h2>
        <div class="ui grid">
            <div class="four column row">
                <div class="column">
                    <label class="title"> <?php $this->options->title(); ?></label>
                    <div class="ui link list">
                        <a class="item" href="/about.html">关于</a>
                    </div>
                </div>

                <div class="column">
                    <label class="title">联系与合作</label>
                    <div class="ui link list">
                        <a class="item" href="/about.html">联系我们</a>
                        
                        <a class="item" href="">微博 @</a>
                        <a class="item weixin qr link" >微信
                            <div class="layer">
                                <!--<img src="#" 微信二维码 ">--></div>
                        </a>
                    </div>
                </div>
               
            </div>

        </div>
    </div>
    <div class="copyright">
        <div class="ui container">Copyright© 2017</div>
    </div>
</footer>
</div>
</div>
<?php $this->footer(); ?>
<script src="//cdn.bootcss.com/instantclick/3.0.1/instantclick.min.js"></script>
<script data-no-instant>InstantClick.init();</script>
</body>

</html>