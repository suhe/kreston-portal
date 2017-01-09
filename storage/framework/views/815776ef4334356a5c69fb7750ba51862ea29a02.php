<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
    <li <?php if($item->hasChildren()): ?> class="parent item-primary item-bg" <?php else: ?> class="item-primary item-bg"  <?php endif; ?>>
        <a href="<?php echo $item->url(); ?>">
            <?php if(!$item->children()): ?> <i class="fa fa-caret-right"></i> <?php endif; ?>
                <?php echo $item->title; ?>

        </a>
        <?php if($item->hasChildren()): ?>
            <ul class="sub">
				<?php echo $__env->make('kreston::navbar.items', array('items' => $item->children()), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </ul>
        <?php endif; ?>
    </li>
	
<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>