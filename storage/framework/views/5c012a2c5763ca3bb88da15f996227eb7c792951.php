<style>
table {
    width: 100%;
}

th {
    height: 50px;
}
Try it Yourself »

</style>


<?php $__env->startSection('content'); ?>
<div class="container">
            <form action="crearBaseDatos" method="post">
                         <input type = "hidden" name = "_token" value="<?php echo e(csrf_token()); ?>">
                        <button type="submit"> Crear base de datos</button>
                     </form><div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Probar base de datos</div>

                <div class="panel-body">
                    <form class="form-horizontal" action="actualizarBaseDatos" method="post" >
                        <input type = "hidden" name = "_token" value="<?php echo e(csrf_token()); ?>">

                        <label for="name"> Nombre: </label>
                        <input type="text" name="nombre" value="">

                        <label for="rut"> Rut: </label>
                        <input type="text" name="rut" value=""> <br>
                        <label for="select"> Permisos: </label>
                        <select name="select" id="">
                            <option value="voluntario"> Voluntario </option>
                            <option value="gobierno"> Gobierno </option>
                            <option value="organizacion"> Organización </option>
                        </select>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Agregar a base de datos
                                </button>
                            </div>
                        </div>
                    </form>
                    
                  
                </div>

            </div>

            <form action="mostrarBaseDatos" method="post">
                         <input type = "hidden" name = "_token" value="<?php echo e(csrf_token()); ?>">
                        <button type="submit"> Mostrar base de datos</button>
                        <table>
                                <tr>
                                    <th>Nombre:   </th>
                                    <th>Rut:      </th>
                                </tr>

                        <?php if(count($datos) > 0): ?>
                            <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><?php echo e($valor->nombre); ?></td>
                                    <td><?php echo e($valor->rut); ?></td>
                                </tr>
                            

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        <?php endif; ?>
                        
                     </form>
                     <br>

                      <form action="consultaWhere" method="post">
                         <input type = "hidden" name = "_token" value="<?php echo e(csrf_token()); ?>">
                         <label for="nombre"> Buscar rut por nombre de usuario </label>
                        <input type="text" name="nombre" value=""> <br>
                        <button type="submit"> Mostrar</button>
                        <table>
                                <tr>
                                    <th>Nombre:   </th>
                                    <th>Rut:      </th>
                                </tr>

                        <?php if(count($datosConsulta) > 0): ?>
                            <?php $__currentLoopData = $datosConsulta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><?php echo e($valor->nombre); ?></td>
                                    <td><?php echo e($valor->rut); ?></td>
                                </tr>
                            

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        <?php endif; ?>
                        
                     </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>