<?php if (!empty($error_message)): ?>
    <div class="error">
        <p><?= html_escape($error_message) ?>
            <?php if (!empty($reason)): ?>
                <br><?= nl2br(html_escape($reason)) ?>
            <?php endif; ?>
        </p>
        <?php if (!empty($query)): ?>
            <p>Query: <code><?= html_escape($query) ?></code></p>
        <?php endif; ?>
    </div>
<?php endif; ?>