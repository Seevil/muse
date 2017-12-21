<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="//cdn.bootcss.com" />
    <link rel="dns-prefetch" href="//cn.gravatar.com" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="keywords" content="<?php $this->options->keywords() ?>" />
    <?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <link href="<?php $this->options->themeUrl('assets/style.css'); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="app">
            <div class="header navi flat" id="header">
                <nav class="ui container ui menu" >
                    <a class="brand item" href="/">
                        <i class="graph logo text" ></i>
                    </a>
                    <a class="item" href="/">首页</a>
                    <div class="ui service dropdown item">
                        <a class="item active" href="/services" >设计服务</a>
                        <i class="icon dropdown"></i>
                        <div class="submenu">
                            <div class="ui vertical harp two wides arrow left menu">
                                <?php $this->widget('Widget_Metas_Category_List')
                ->parse('<a class="item" href="{permalink}">{name}</a>'); ?>
                            </div>
                        </div>
                    </div>
                    <a class="item" href="/users/">设计师</a>
                    <div class="right menu">
                        <div class="item actions">
                            <form id="search" method="post" action="/" role="search">
                                <div class="ui icon input">
                                    <input type="text" id="input" name="s" placeholder="Search" >
                                    <i class="icon search link"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>