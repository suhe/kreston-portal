<nav class="collapse collapsing navbar-collapse">
    <ul class="nav navbar-nav navbar-center">
        <?php echo $__env->make('kreston::navbar.items', array('items' => $MyNavBar->roots()), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </ul>
</nav>