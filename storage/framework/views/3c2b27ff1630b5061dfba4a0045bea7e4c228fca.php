<?php $__env->startSection('title'); ?>
    Welcome People!
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
    <div class="col-md-4">
        <h3>Sign up</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Your E-mail</label>
                <input class="form-control" type="text" name="first" id="first">
            </div>
            <div class="form-group">
                <label for="first_name">Your First Name</label>
                <input class="form-control" type="text" name="first_name" id="first_name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-md-4">
        <h3>Sign in</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Your E-mail</label>
                <input class="form-control" type="text" name="first" id="first">
            </div>
            <div class="form-group">
                <label for="first_name">Your First Name</label>
                <input class="form-control" type="text" name="first_name" id="first_name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn-primary">Submit</button>
    </form>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>