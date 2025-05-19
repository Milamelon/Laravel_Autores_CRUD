
<?php $__env->startSection('contenido'); ?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="table-container">
                    <form action="<?php echo e(route('autores.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <table class="table table-borderless">
                            <tr>
                                <td><label for="codigo_autor" class="form-label">Código Autor:</label></td>
                                <td><input type="text" id="codigo_autor" name="codigo_autor" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="nombre_autor" class="form-label">Nombre Autor:</label></td>
                                <td><input type="text" id="nombre_autor" name="nombre_autor" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td><label for="nacionalidad" class="form-label">Nacionalidad:</label></td>
                                <td><input type="text" id="nacionalidad" name="nacionalidad" class="form-control" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-center">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success mt-3">
                            <?php echo e(session('success')); ?>

                        </div>
                        
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LIS-CICLO2025\Desafio3\resources\views/autores/insertar.blade.php ENDPATH**/ ?>