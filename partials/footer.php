<?php

function render_page_footer(bool $is_loggedin = false): void
{
?>
    <!-- END CHANGEABLE CONTENT. -->
    <?php if ((is_administrator() && (basename($_SERVER['PHP_SELF']) !== 'logout.php')) || $is_loggedin): ?>
        <hr>
        <p>
            <a href="add_quote.php">Thêm Trích dẫn</a> <->
                <a href="view_quotes.php">Xem tất cả Trích dẫn</a> <->
                    <a href="logout.php">Đăng xuất</a>
        </p>
    <?php else: ?>
        <hr>
        <p><a href="/">Trang chủ</a> <-> <a href="login.php">Đăng nhập</a></p>
    <?php endif; ?>
    </div><!-- container -->
    <div id="footer">Content &copy; 2025</div>
    </body>

    </html>
<?php
}
