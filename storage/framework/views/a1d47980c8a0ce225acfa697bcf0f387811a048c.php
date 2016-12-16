<?php $__env->startSection('home-banner'); ?>
	<div class="slider progressive-slider load">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<ul class="pgwSlideshow">
								<?php $__currentLoopData = $home_banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
									<li><img src="<?php echo url($row->storage_location); ?>" alt="<?php echo $row->name; ?>" data-description="<?php echo $row->description; ?>"></li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
							</ul>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="content" style="background:#fff;padding:15px;margin-top:20px;margin-bottom:10px">
								<h1 class="title">Welcome to Kreston Indonesia</h1>
								<?php echo isset($welcome) ? $welcome->short_content : null; ?>

							</div>
						</div>
					</div>	
					
				</div>
				<div class="col-md-3 latest-post">
					<!-- Nav tabs -->
					<div class="card">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#news" aria-controls="news" role="tab" data-toggle="tab"><?php echo Lang::get('action.news'); ?></a></li>
                            <li role="presentation"><a href="#article" aria-controls="article" role="tab" data-toggle="tab"><?php echo Lang::get('action.article'); ?></a></li>
							<li role="presentation"><a href="#publication" aria-controls="publication" role="tab" data-toggle="tab"><?php echo Lang::get('action.publication'); ?></a></li>
                        </ul>
						<!-- Tab panes -->
                       <div class="tab-content" style="padding:5px 10px;">
                           <div role="tabpanel" class="tab-pane active" id="news">
								<ul class="most__wrap clearfix">
									
									<?php $__currentLoopData = $latest_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $news): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
									<li class="most__item">
										<div class="most__num"><?php echo ($key + 1); ?></div>
										<div class="most__title">
											<a target="_blank" class="latest-post" href="<?php echo url('news/read/'.$news->id.'/'.Str::slug($news->title,'-')); ?>" data-toggle="tooltip" title="<?php echo $news->title; ?>"> <?php echo str_limit($news->title,35,''); ?> </a>
										</div>	
										
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
								</ul>
							</div>
                            <div role="tabpanel" class="tab-pane" id="article">
								<ul class="most__wrap clearfix">
									<?php $__currentLoopData = $latest_article; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
									<li class="most__item">
										<div class="most__num"><?php echo ($key + 1); ?></div>
										<div class="most__title">
											<a class="latest-post" href="<?php echo url('article/read/'.$article->id.'/'.Str::slug($article->title,'-')); ?>" data-toggle="tooltip" title="<?php echo $article->title; ?>"> <?php echo str_limit($article->title,35,''); ?> </a>
										</div>	
										<!--<span class="most__info">Reading : <?php echo $article->total_view; ?> viewer</span>-->
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
								</ul>
							</div>
							<div role="tabpanel" class="tab-pane" id="publication">
								<ul class="most__wrap clearfix">
									<?php $__currentLoopData = $latest_publications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pub): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
									<li class="most__item">
										<div class="most__num"><?php echo ($key + 1); ?></div>
										<div class="most__title">
											<a target="_blank" class="latest-post" href="<?php echo url($pub->storage_location); ?>" data-toggle="tooltip" title="<?php echo $pub->title; ?>"> <?php echo str_limit($pub->title,35,''); ?> </a>
										</div>	
										
									</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
								</ul>
							</div>
                        </div>
					</div>
					
					<div class="banner" style="margin-top:20px;">
						<div class="row">
							<?php $__currentLoopData = $advertisings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading"><?php echo $row->name; ?></div>
									<div class="panel-body" style="padding:0px">
										<img class="img-responsive" src="<?php echo asset($row->storage_location); ?>" />
									</div>
								</div>
							</div>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
						</div>
					</div>
					
				</div>
			</div>			
		</div>
	</div>
	<?php echo $__env->make('home::popup-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('css'); ?>
	<link rel='stylesheet' href="<?php echo asset('vendor/pgwslideshow/pgwslideshow.min.css'); ?>">
	<link rel='stylesheet' href="<?php echo asset('vendor/pgwslideshow/pgwslideshow_light.min.css'); ?>">
	<link rel='stylesheet' href="<?php echo asset('vendor/perfect-scrollbar/css/perfect-scrollbar.min.css'); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo asset('vendor/pgwslideshow/pgwslideshow.min.js'); ?>"></script>
	<script src="<?php echo asset('vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js'); ?>"></script>
	<script>
	$(document).ready(function() {
		<?php if($popup_banners): ?>
		$('#popup-banner').modal('show');
		<?php endif; ?>
		
		$('.pgwSlideshow').pgwSlideshow({
			maxHeight:550,
			autoSlide:true,
		});
		$('[data-toggle="tooltip"]').tooltip({
			placement:"bottom",
			
		}); 
		$('.tab-content').perfectScrollbar();
	});
</script
<?php $__env->stopPush(); ?>



<?php echo $__env->make('kreston::home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>