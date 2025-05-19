
<?php $__env->startSection('titulo'); ?>
Insertar Autor
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="table-container">
                     <?php if($errors->any()): ?>
                    <div class="alert alert-danger mt-3">
                        <ul class="mb-0">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                    <form action="<?php echo e(route('autores.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <table class="table table-borderless">
                            <tr>
                                <td><label for="codigo_autor" class="form-label">Código Autor:</label></td>
                                <td><input type="text" id="codigo_autor" name="codigo_autor" class="form-control" value="<?php echo e(old('codigo_autor')); ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="nombre_autor" class="form-label">Nombre Autor:</label></td>
                                <td><input type="text" id="nombre_autor" name="nombre_autor" class="form-control" value="<?php echo e(old('nombre_autor')); ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="nacionalidad" class="form-label">Nacionalidad:</label></td>
                                <td><input type="text" id="nacionalidad" name="nacionalidad" class="form-control" value="<?php echo e(old('nacionalidad')); ?>" required></td>
                            </tr>
                            <tr>
                             <td colspan="2">
                              <div class="d-flex justify-content-between">
                               <a href="<?php echo e(route('autores.index')); ?>" class="btn btn-secondary">Volver</a>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                              </div>
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
<?php echo $__env->make('templates.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PN211471-LIS-2025\Desafio3\resources\views/autores/insertar.blade.php ENDPATH**/ ?>