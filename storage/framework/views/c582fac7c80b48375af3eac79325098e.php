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
    <div class="container text-center mt-3 mb-3">
        <a class="btn btn-primary" href="<?php echo e(route('preschool')); ?>">PSCLRC</a>
        <a class="btn btn-secondary"href="<?php echo e(route('gradeschool')); ?>">GSLRC</a>
        <a class="btn btn-primary" href="<?php echo e(route('highschool')); ?>" >HSLRC</a>
        <a class="btn btn-success" href="<?php echo e(route('college')); ?>">CLLRC</a>
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
<?php endif; ?>
<?php /**PATH C:\Users\Fourth\Documents\fourth\stats\resources\views/choose.blade.php ENDPATH**/ ?>