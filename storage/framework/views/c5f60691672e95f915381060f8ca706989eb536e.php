<?php if(Auth::guard('web')->check()): ?>
<p class="text-success">
	You are logged in as <strong>USER</strong>
</p>

<?php else: ?>
<p class="text-danger">
	You are logged out as <strong>USER</strong>
</p>

<?php endif; ?>

<?php if(Auth::guard('admin')->check()): ?>
<p class="text-success">
	You are logged in as <strong>ADMIN</strong>
</p>

<?php else: ?>
<p class="text-danger">
	You are logged out as <strong>ADMIN</strong>
</p>

<?php endif; ?><?php /**PATH C:\xampp\htdocs\ecom\resources\views/components/who.blade.php ENDPATH**/ ?>