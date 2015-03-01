<?php
/**
 * 404 エラーページ (Not Found) を表示するテンプレート
 *
 * @package    WordPress
 * @subpackage 
 */
 
get_header(); ?>
<div class="wrapper clearfix">
    <div class="main clearfix">
        <article>
            <section>
                <h1>Not found <span>:(</span></h1>
 
                <p>あなたが表示しようとしたページは存在しません。</p>
 
                <p>考えられる原因:</p>
                <ul>
                    <li>URLの打ち間違い</li>
                    <li>リンクの期限切れ</li>
                    <li>本ブログ構成の変更</li>
                </ul>
                <p>です。</p>
                <Topページから探してください。</p>
 
            </section>
        </article>
 
    </div>
    <!-- #main -->
 
    <?php get_sidebar(); ?>
 
</div>
<!-- #wrapper -->
 
<?php get_footer(); ?>
