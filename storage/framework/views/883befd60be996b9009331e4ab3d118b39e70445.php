<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit instructeur</title>
</head>
<body>
    <h1>Edit instructeur</h1>
    <a href="<?php echo e(route('instructeur.index')); ?>">Back to index</a><br><br><br>
    <div>
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <?php endif; ?>
    </div>
    <form method="post" action="<?php echo e(route('instructeur.update', ['instructeur' => $instructeur])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

<label for="Voornaam-input">Voornaam:</label><br>
<input type="text" id="Voornaam-input" name="Voornaam" placeholder="verplicht" value="<?php echo e($instructeur->Voornaam); ?>"> <br>

<label for="Tussenvoegsel-input">Tussenvoegsel:</label><br>
<input type="text" id="Tussenvoegsel-input" name="Tussenvoegsel" value="<?php echo e($instructeur->Tussenvoegsel); ?>"> <br>

<label for="Achternaam-input">Achternaam:</label><br>
<input type="text" id="Achternaam-input" name="Achternaam" placeholder="verplicht" value="<?php echo e($instructeur->Achternaam); ?>"> <br><br>

<label for="Mobiel-input">Mobiel:</label><br>
<input type="tel" id="Mobiel-input" name="Mobiel" placeholder="verplicht" value="<?php echo e($instructeur->Mobiel); ?>"> <br><br>


<label for="DatumInDienst-date">DatumInDienst:  (verplicht veld)</label><br>
<input type="date" id="DatumInDienst-date" name="DatumInDienst" value="<?php echo e($instructeur->DatumInDienst); ?>"> <br><br>

<label for="AantalSterren-input">AantalSterren:</label><br>
<input type="text" id="AantalSterren-input" name="AantalSterren" placeholder="verplicht" value="<?php echo e($instructeur->AantalSterren); ?>"> <br><br>

<button type="submit" class="button">Submit Change</button>
    </form>
</body>
</html><?php /**PATH C:\wamp64\www\LaravelCRUD\resources\views/instructeur/edit.blade.php ENDPATH**/ ?>