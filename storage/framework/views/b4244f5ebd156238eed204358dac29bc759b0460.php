<?php $__env->startSection('cabecalho'); ?>
Evidências
<?php $__env->stopSection(); ?>
<?php $__env->startSection('conteudo'); ?>
<?php if(!@empty($msg)): ?>
        <div class="alert alert-success">
        <?php echo e($msg); ?>

        </div>
<?php endif; ?>
<a href="<?php echo e(route('evidencias.create')); ?>" class="btn btn-dark mb-2">Adicionar</a>
    <ul class="list-group">
    <?php $__currentLoopData = $evidencias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evidencia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class='list-group-item  d-flex justify-content-between align-items-center'><?php echo e($evidencia->evid_descri); ?>

        <span class="d-flex">
            <a href="<?php echo e(route('evidencias.edit',$evidencia->evid_id)); ?>" class="btn btn-danger btn-sm" style="margin-right: 10px">Ed</a>
            <form method="POST" onSubmit="return confirm('tem certeza que deseja resolver <?php echo e(addslashes($evidencia->evid_descri)); ?>')" action="/evidencias/<?php echo e($evidencia->evid_id); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </form>
        </span>
        
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/darley/nomenos/api/catena/resources/views/evidencias/index.blade.php ENDPATH**/ ?>