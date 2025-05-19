<!-- Modal -->
<div class="modal fade" id="modal<?php echo e($autor->codigo_autor); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Editar Autor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php if($errors->any()): ?>
         <div class="alert alert-danger mt-3">
        <ul class="mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
         </div>
         <?php endif; ?>
        <form action="<?php echo e(route('autores.update', $autor->codigo_autor)); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
          <table class="table table-borderless">
            <tr>
              <td><label for="codigo_autor" class="form-label">Código Autor:</label></td>
              <td><input type="text" id="codigo_autor" name="codigo_autor" value="<?php echo e($autor->codigo_autor); ?>" class="form-control" readonly></td>
            </tr>
            <tr>
              <td><label for="nombre_autor" class="form-label">Nombre Autor:</label></td>
              <td><input type="text" id="nombre_autor" name="nombre_autor" value="<?php echo e($autor->nombre_autor); ?>" class="form-control" required></td>
            </tr>
            <tr>
              <td><label for="nacionalidad" class="form-label">Nacionalidad:</label></td>
              <td><input type="text" id="nacionalidad" name="nacionalidad" value="<?php echo e($autor->nacionalidad); ?>" class="form-control" required></td>
            </tr>
          </table>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Actualizar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div><?php /**PATH C:\xampp\htdocs\PN211471-LIS-2025\Desafio3\resources\views/Autores/update.blade.php ENDPATH**/ ?>