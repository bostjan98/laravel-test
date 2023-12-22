  

<?php $__env->startSection('content'); ?>
 <?php $__env->slot('header', null, []); ?> 
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <?php echo e(__('Tasks')); ?>

    </h2>
 <?php $__env->endSlot(); ?>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h1 class="text-2xl font-bold mb-4">User List</h1>

                    <div class="overflow-x-auto">
                        <table class="min-w-full table-fixed border-separate border-spacing-6">
                            <thead>
                                <tr>
                                    <th class="w-1/6">ID</th>
                                    <th class="w-1/4">Name</th>
                                    <th class="w-1/4">Email</th>
                                    <th class="w-1/6">Created At</th>
                                    <th class="w-1/6">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->created_at->format('Y-m-d H:i:s')); ?></td>
                                        <td><?php echo e($user->updated_at->format('Y-m-d H:i:s')); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <?php echo e($users->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-test\resources\views/user/index.blade.php ENDPATH**/ ?>