<?php $__env->startSection('breadcrumbs', Breadcrumbs::render('people-office',$slug)); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
		<article class="content col-sm-12 col-md-9">
			<?php $__currentLoopData = $peoples; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $people): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
				<div class="row">
					<div class="col-md-12">
						<h4 class="title"><?php echo isset($people) ? $people->name : null; ?></h4>
						<img class="img-responsive" src="<?php echo url(ImageManager::getImagePath(($people->photo_storage_location ? $people->photo_storage_location : Config::get('site.no-image')), 142,160, 'crop')); ?>" style="float:left;margin:0 20px 20px" />
						<?php echo $people->description; ?>

						
						<?php if($people->email): ?>
						<p style="margin-top:5px">
							<a class="btn btn-sm btn-primary" href="mailto:<?php echo $people->email; ?>"><i class="fa fa-envelope"></i> <?php echo Lang::get('people::app.send email'); ?></a>
						</p>
						<?php endif; ?>
						
					</div>
				</div>
				<div class="horizontal_dotted_line"></div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>	
		  </article><!-- .content -->
		  
        <div id="sidebar" class="sidebar col-sm-12 col-md-3">
            <aside class="widget menu">
                <header>
                    <h3 class="title"><?php echo Lang::get('people::app.our people'); ?></h3>
                </header>
                <nav>
                    <ul>
						<?php echo $__env->make('kreston::our-people-links', array('items' => $our_partner_links->roots()), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        
                    </ul>
                </nav>
            </aside><!-- .menu-->
        </div><!-- .sidebar -->
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('kreston::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>