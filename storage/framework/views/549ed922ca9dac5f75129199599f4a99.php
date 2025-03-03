<?php if (isset($component)) { $__componentOriginal2efcf882222b9ef14bfedb4223b1a568 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2efcf882222b9ef14bfedb4223b1a568 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.statHeader','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('statHeader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>



<a href="/hslrc">back</a>
    <div class="container py-md-5">
        <div class="row align-items-center">
          <div class="col-lg-7 py-3 py-md-5">
            <h3>Good Day! <?php echo e(auth()->user()->fullname); ?> </h3>
         
          </div>
          
        </div>
      </div>
    
      <div class="container  mb-5  ">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow-lg rounded-lg ">
                    <div class="card-header text-center"> 
                        <h2>STUDENTS
                           
                        </h2>
                    </div>
                    <div class="card-body">
                        <table id="mytable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                   <th>cardnumber</th>
                                    <th>name</th>
                                    <th>date</th>
                                    <th>entry</th>
                                    <th>Exit</th> 
                                    <th>Location</th>
                                    <th>Section</th>

                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                  <td><?php echo e($value['cardnumber']); ?></td>
                                    <td><?php echo e($value['name']); ?></td>
                                    <td><?php echo e($value['date']); ?></td>
                                    <td><?php echo e($value['entry']); ?></td>
                                    <td><?php echo e($value['exit']); ?></td> 
                                    <td><?php echo e($value['loc']); ?></td>
                                    <td><?php echo e($value['sort1']); ?></td>
                                   
                                        

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
      
   





 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2efcf882222b9ef14bfedb4223b1a568)): ?>
<?php $attributes = $__attributesOriginal2efcf882222b9ef14bfedb4223b1a568; ?>
<?php unset($__attributesOriginal2efcf882222b9ef14bfedb4223b1a568); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2efcf882222b9ef14bfedb4223b1a568)): ?>
<?php $component = $__componentOriginal2efcf882222b9ef14bfedb4223b1a568; ?>
<?php unset($__componentOriginal2efcf882222b9ef14bfedb4223b1a568); ?>
<?php endif; ?><?php /**PATH C:\Users\Fourth\Documents\fourth\stats\resources\views/statistics.blade.php ENDPATH**/ ?>