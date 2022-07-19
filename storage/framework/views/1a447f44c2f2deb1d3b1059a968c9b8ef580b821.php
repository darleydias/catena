<form method="post" action="<?php echo e($action); ?>">
    <?php echo csrf_field(); ?>
    <?php if(isset($evid_descri)): ?>
        <?php echo method_field('PUT'); ?>
    <?php endif; ?>
    <div class="mb-3">
        <label for="evid_descri" class="form-label">Descrição</label>
        <input  type="text" 
                class="form-control" 
                <?php if(isset($evid_descri)): ?>value="<?php echo e($evid_descri); ?>" <?php endif; ?> 
                name="evid_descri" 
                id="evid_descri"/>
    </div>    
        <label for="tipoEvid_id" class="form-label">Tipo de evidencia</label>
        <input  type="text" 
                class="form-control" 
                name="tipoEvid_id" 
                id="tipoEvid_id" 
                <?php if(isset($tipoEvid_id)): ?>value="<?php echo e($tipoEvid_id); ?>" <?php endif; ?> />
        <button class="btn btn-primary" style="margin-top: 10px;">Gravar</button>
    
</form><?php /**PATH /home/darley/nomenos/api/catena/resources/views/components/evidencias/form.blade.php ENDPATH**/ ?>