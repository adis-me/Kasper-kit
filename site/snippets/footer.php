<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<?php echo js('assets/js/jquery.fitvids.js') ?>
<?php echo js('assets/js/index.js') ?>
<?php if($site->analytics()): ?>
<?php snippet('analytics', array('gaId' => $site->analytics()->text())) ?>
<?php endif; ?>
</body>
</html>
