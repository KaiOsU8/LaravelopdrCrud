<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructeurs</title>
</head>
<style>
    th, td {
        border: 1px solid black;
    }
</style>
<body>
    <h1>Instructeurs</h1>
    <a href="<?php echo e(route('instructeur.create')); ?>">Create</a>

    <table>
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
                <th>Mobiel</th>
                <th>DatumInDienst</th>
                <th>AantalSterren</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $instructeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructeur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($instructeur->Voornaam); ?></td>
                <td><?php echo e($instructeur->Tussenvoegsel); ?></td>
                <td><?php echo e($instructeur->Achternaam); ?></td>
                <td><?php echo e($instructeur->Mobiel); ?></td>
                <td><?php echo e($instructeur->DatumInDienst); ?></td>
                <td><?php echo e($instructeur->AantalSterren); ?></td>
                <td>
                    <a href="<?php echo e(route('instructeur.edit', $instructeur->id)); ?>">U</a>
                </td>
                <td>
                    <form action="<?php echo e(route('instructeur.delete', $instructeur->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">X</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

</body>
</html><?php /**PATH C:\wamp64\www\LaravelCRUD\resources\views/instructeur/index.blade.php ENDPATH**/ ?>