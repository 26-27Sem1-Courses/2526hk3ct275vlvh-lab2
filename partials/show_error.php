<?php if (!empty($error_message)): ?>
    <div class="error">
        <p><?= htmlspecialchars($error_message, ENT_QUOTES, "UTF-8") ?>
            <?php if (!empty($reason)): ?>
                <br><?= nl2br(htmlspecialchars($reason, ENT_QUOTES, "UTF-8")) ?>
            <?php endif; ?>
        </p>
        <?php if (!empty($query)): ?>
            <p>Query: <code><?= htmlspecialchars($query, ENT_QUOTES, "UTF-8") ?></code></p>
        <?php endif; ?>
    </div>
<?php endif; ?>