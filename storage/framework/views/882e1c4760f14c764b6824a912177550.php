<?php if (isset($component)) { $__componentOriginalda50c8a736c70542f601e56d53889e42 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalda50c8a736c70542f601e56d53889e42 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stats','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('stats'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

   <form action="/gs">

    <?php echo csrf_field(); ?>
    <div class="container mb-5 mt-3">
        <div class="row">
            <div class="col-md-6">
                <label for="start_date">Start Date:</label>
                <input type="date" name="start_date" id="start_date" class="form-control" placeholder="YYYY-MM-DD">
            </div>
            <div class="col-md-6">
                <label for="end_date">End Date:</label>
                <input type="date" name="end_date" id="end_date" class="form-control" placeholder="YYYY-MM-DD">
            </div>
            <div class="col-md-6 mt-4" >
                <button class="btn btn-success">ENTER</button>
            </div>
        </div>
    </div>
   </form>
    

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalda50c8a736c70542f601e56d53889e42)): ?>
<?php $attributes = $__attributesOriginalda50c8a736c70542f601e56d53889e42; ?>
<?php unset($__attributesOriginalda50c8a736c70542f601e56d53889e42); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalda50c8a736c70542f601e56d53889e42)): ?>
<?php $component = $__componentOriginalda50c8a736c70542f601e56d53889e42; ?>
<?php unset($__componentOriginalda50c8a736c70542f601e56d53889e42); ?>
<?php endif; ?><?php /**PATH C:\Users\Fourth\Documents\fourth\stats\resources\views/statistic_date_gslrc.blade.php ENDPATH**/ ?>