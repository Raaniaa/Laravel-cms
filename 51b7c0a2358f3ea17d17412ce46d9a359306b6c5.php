
<?php $__env->startSection('content'); ?>
<div class="card card-default">
<div class="card-header">
<?php echo e(isset($tag) ? "Update Tag" : "Add a new Tag"); ?>

    </div>
    <div class="card-body">
    <form action="<?php echo e(isset($tag) ? route('tags.update',$tag->id) : route('tags.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php if(isset($tag)): ?>
             <?php echo method_field('PUT'); ?>
        <?php endif; ?>
        <div class="form-group">
        <label for="category" >
            Tag Name :
            </label>
            <input type="text" name="name"  class=" <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                   is-valid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control" placeholder="Add a new tag" value="<?php echo e(isset($tag) ? $tag->name : ""); ?>">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger">
            <?php echo e($message); ?>

            </div>       
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
        <button class="btn btn-success">
            <?php echo e(isset($tag) ? "Update " : "Add"); ?>


            </button>
        </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Music\practicel laraval\cms-app\resources\views/tags/create.blade.php ENDPATH**/ ?>