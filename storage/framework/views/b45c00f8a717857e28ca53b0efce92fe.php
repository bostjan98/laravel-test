<div>
    <h1>Family Members</h1>

    <table>
        <thead>
          <tr>
            <th>User_id</th>
            <th>User_name</th>
            <th>Family Name</th>
            <th>relation_name_id</th>
            <th>Relations</th>
          </tr>
        </thead>
        <tbody>
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $familyMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $familyMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($familyMember->user_id); ?></td>
            <td><?php echo e($familyMember->user->name); ?></td>
            <td><?php echo e($familyMember->name); ?></td>
            <td><?php echo e($familyMember->relation_name_id); ?></td>
            <td>
                <?php echo e($familyMember->relationship->name); ?>

            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
        </tbody>
      </table>

</div>
<?php /**PATH C:\xampp\htdocs\Laravel-test\resources\views/livewire/family-members.blade.php ENDPATH**/ ?>