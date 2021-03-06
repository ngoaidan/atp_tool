<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
        <div class="col-lg-5 panel panel-default custom-center">
            <h3 class="text-center" style="color: #6b5f98">RIP <span style="color: #2196F3">auto</span></h3>
            <p class="text-center" style="color: #FF8F00">© ATP Software Company</p>
            <hr class="clean">
             <form class="form-horizontal" style="padding: 20px 55px" role="form" method="POST" action="<?php echo e(url('/login')); ?>"  role="form">
                        <?php echo csrf_field(); ?>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <div class="col-md-12">
                                
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control"  placeholder="Địa chỉ Email" name="email" value="<?php echo e(old('email')); ?>">
                                </div>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

                            <div class="col-md-12">
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                                  </div>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
              
              
                  <div class="form-group">
                    <label class="cr-styled">
                        <input type="checkbox" name="remember">
                        <i class="fa"></i> 
                    </label>
                    Nhớ mật khẩu 
                  </div>
                  <button type="submit" class="btn btn-purple btn-block">Đăng nhập</button>
                  <br/>
                  <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>"><b>Bạn quên mật khẩu?</b></a>
            </form>
            <hr>
            
            
        </div>
        </div>
    </div>
    
    
    
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>