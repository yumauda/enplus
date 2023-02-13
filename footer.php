<footer class="l-footer p-footer">
    <div class="l-inner">
        <div class="p-footer__content">
            <div class="p-footer__lists">
                <div class="p-footer__list">
                    <p class="p-footer__head">会社を知る</p>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/reading/')); ?>" class="p-footer__link">先をよむターゲット領域</a>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/other/')); ?>" class="p-footer__link">他がやらないエンプラスの事業</a>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/challenge/')); ?>" class="p-footer__link">エンプラス挑戦の軌跡</a>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/future/')); ?>" class="p-footer__link">エンプラスが目指すこと</a>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/number/')); ?>" class="p-footer__link">数字で見る</a>
                </div>
            </div>
            <div class="p-footer__lists">
                <div class="p-footer__list">
                    <p class="p-footer__head">仕事を知る</p>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/introduce/')); ?>" class="p-footer__link">職種紹介</a>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/interview/')); ?>" class="p-footer__link">社員インタビュー</a>
                </div>
            </div>
            <div class="p-footer__lists">
                <div class="p-footer__list">
                    <p class="p-footer__head">環境を知る</p>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/training/')); ?>" class="p-footer__link">研修制度</a>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/environment/')); ?>" class="p-footer__link">福利厚生</a>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="p-footer__link">ギャラリー</a>
                </div>
            </div>
            <div class="p-footer__lists">
                <div class="p-footer__list">
                    <p class="p-footer__head">採用情報</p>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/question/')); ?>" class="p-footer__link">Q＆A</a>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/recruit/')); ?>" class="p-footer__link">新卒募集要項</a>
                </div>
                <div class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/career/')); ?>" class="p-footer__link">キャリア募集要項</a>
                </div>
            </div>
            <div class="p-footer__logo-wrapper">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer__logo-link">
                    <img src="<?php echo get_template_directory_uri() ?>/images/common/footer_logo.png" alt="エンプラス">
                </a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>