
<?php $__env->startSection('contenido'); ?>
<div class="container">
    <h1 class="mb-4">Lista de Autores</h1>
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('autores.create')); ?>" class="btn btn-primary mb-3">Insertar Autor</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Nacionalidad</th>
                <th class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $autores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($autor->codigo_autor); ?></td>
                    <td><?php echo e($autor->nombre_autor); ?></td>
                    <td><?php echo e($autor->nacionalidad); ?></td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <button type="button" class="btn btn-info btn-sm" data-target="#modal<?php echo e($autor->codigo_autor); ?>">Editar</button>
                            <?php echo $__env->make('Autores.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <form action="" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar este autor?')">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center">No hay autores registrados.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>     
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LIS-CICLO2025\Desafio3\resources\views/autores/index.blade.php ENDPATH**/ ?>