<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo e($page['page_title']); ?></div>

                    <div class="panel-body">
                        <?php echo e($page['page_content']); ?>


                        <br/><br/>

                        <?php echo e(date("d.m.Y", strtotime($page['created_at']))); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>