<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="<?php echo e(route('index')); ?>"><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="<?php echo e(route('index')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="<?php echo e(route('index')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>
					<li class="sidebar-main-title">
						<div>
							<h6 class="lan-1"><?php echo e(__('Админ.раздел')); ?>  </h6>
							<p class="lan-2"><?php echo e(__('Менеджеры, клиенты')); ?></p>
						</div>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/manager' ? 'active' : ''); ?>"
						   href="#"><i data-feather="home"></i><span class="lan-3"><?php echo e(__('Отдел продаж')); ?></span>
							<div class="according-menu"><i
										class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/manager' ? 'down' : 'right'); ?>"></i>
							</div>
						</a>

						<ul class="sidebar-submenu"
							style="display: <?php echo e(request()->route()->getPrefix() == '/manager' ? 'block;' : 'none;'); ?>">
							
							

								<li><a href="<?php echo e(route('users')); ?>"
									   class="lan-4 <?php echo e(Route::currentRouteName()=='users' ? 'active' : ''); ?>"><?php echo e(__('Пользователи')); ?></a>
								</li>
								<li><a href="<?php echo e(route('user.create')); ?>"
									   class="lan-4 <?php echo e(Route::currentRouteName()=='user.create' ? 'active' : ''); ?>"><?php echo e(__('Добавить')); ?></a>
								</li>
								<li><a href="<?php echo e(route('roles')); ?>"
									   class="lan-4 <?php echo e(Route::currentRouteName()=='roles' ? 'active' : ''); ?>"><?php echo e(__('Роли')); ?></a>
								</li>
								<li><a href="<?php echo e(route('permission')); ?>"
									   class="lan-4 <?php echo e(Route::currentRouteName()=='permission' ? 'active' : ''); ?>"><?php echo e(__('Доступы')); ?></a>
								</li>

						</ul>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/leads' ? 'active' : ''); ?>"
						   href="#"><i data-feather="home"></i><span class="lan-3"><?php echo e(__('Заявки')); ?></span>
							<div class="according-menu"><i
										class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/leads' ? 'down' : 'right'); ?>"></i>
							</div>
						</a>

						<ul class="sidebar-submenu"
							style="display: <?php echo e(request()->route()->getPrefix() == '/leads' ? 'block;' : 'none;'); ?>">

							<li><a href="<?php echo e(route('leads')); ?>"
								   class="lan-4 <?php echo e(Route::currentRouteName()=='leads' ? 'active' : ''); ?>"><?php echo e(__('Лиды')); ?></a>
							</li>
							<li><a href="<?php echo e(route('vk.leads')); ?>"
								   class="lan-4 <?php echo e(Route::currentRouteName()=='vk.leads' ? 'active' : ''); ?>"><?php echo e(__('Vk форма')); ?></a>
							</li>
							
						</ul>
					</li>


				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div><?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>