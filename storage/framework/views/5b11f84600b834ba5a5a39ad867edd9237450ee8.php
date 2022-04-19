<?php $__env->startSection('title', 'Login-two'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
   <div class="container-fluid">
      <div class="row">
         <div class="col-xl-5"><img class="bg-img-cover bg-center" src="<?php echo e(asset('assets/images/login/3.jpg')); ?>" alt="looginpage"></div>
         <div class="col-xl-7 p-0">
            <div class="login-card">
               <div>
                  <div><a class="logo text-start" href=""><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/login.png')); ?>" alt="looginpage"><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt="looginpage"></a></div>
                  <div class="login-main">
                     <form method="POST" class="theme-form" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <h4>Вход в аккаунт</h4>
                        <p>Введите ваш email и пароль</p>
                        <div class="form-group">
                           <label class="col-form-label">Email </label>
                           <input id="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="email" required="" placeholder="Test@gmail.com">
                           <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                           <label class="col-form-label">Пароль</label>
                           <input id="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" name="login[password]" required="" placeholder="*********" >
                           <div class="show-hide"><span class="show"></span></div>

                           <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group mb-0">
                           <div class="checkbox p-0">
                              <input id="remember" name="remember"  type="checkbox">
                              <label class="text-muted" for="remember">Запомнить пароль</label>
                           </div>
                         <button class="btn btn-primary btn-block" type="submit">Войти</button>
                        </div>





                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.authentication.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\OSpanel\OpenServer\domains\8uglov.loc\resources\views/auth/login.blade.php ENDPATH**/ ?>