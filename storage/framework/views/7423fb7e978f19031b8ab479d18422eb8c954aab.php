<?php $__env->startSection('content'); ?>
<div class="container small">
<h1>商品新規登録</h1>



<form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">

<?php echo csrf_field(); ?>
    <fieldset>
        <div class="form-group">
        
        <div>
        <?php if($errors->has('product_name')): ?>
        <h5 style="color:red"><?php echo e($errors->first('product_name')); ?></h5>
    <?php endif; ?>
            <label for="product_name"><?php echo e(__('商品名')); ?><span class="badge badge-danger ml-2"><?php echo e(__('必須')); ?></span></label>
            <input type="text" class="form-control" name="product_name" id="product_name">
        <div class="d-flex justify-content-between pt-3">
            
</dit>

        <div>
        <?php if($errors->has('company_id')): ?>
        <h5 style="color:red"><?php echo e($errors->first('company_id')); ?></h5>
    <?php endif; ?>
        <label for="company_id"><?php echo e(__('メーカー名')); ?><span class="badge badge-danger ml-2"><?php echo e(__('必須')); ?></span></label>
    <select type="text" class="form-control" id="company_id" name="company_id">
    <option disabled style='display:none;' <?php if(empty($product->company_id)): ?> selected <?php endif; ?>>選択してください</option>
    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($company->company_id); ?>" <?php if(isset($product->company_id) && ($product->company_id === $company->company_id)): ?> selected <?php endif; ?>><?php echo e($company->company_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    </label>
</dit>

        <div>
        <?php if($errors->has('price')): ?>
        <h5 style="color:red"><?php echo e($errors->first('price')); ?></h5>
    <?php endif; ?>
            <label for="price"><?php echo e(__('価格')); ?><span class="badge badge-danger ml-2"><?php echo e(__('必須')); ?></span></label>
            <input type="text" class="form-control" name="price" id="price">
        <div class="d-flex justify-content-between pt-3">
</dit>


        <div>
        <?php if($errors->has('stock')): ?>
        <h5 style="color:red"><?php echo e($errors->first('stock')); ?></h5>
    <?php endif; ?>
            <label for="stock"><?php echo e(__('在庫数')); ?><span class="badge badge-danger ml-2"><?php echo e(__('必須')); ?></span></label>
            <input type="text" class="form-control" name="stock" id="stock">
        <div class="d-flex justify-content-between pt-3">
</dit>

        <div>
            <label for="comment"><?php echo e(__('コメント')); ?></label>
            <input type="textarea" class="form-control" name="comment" id="comment">
        <div class="d-flex justify-content-between pt-3">
</dit>

        <div>
            <label for="img_path" class="form-label" ><?php echo e(__('商品画像')); ?></label>
            <input type="file" class="form-" name="img_path" id="img_path">
        <div class="d-flex justify-content-between pt-3">
</dit>

        <a href="<?php echo e(route('products')); ?>" class="btn btn-outline-secondary" role="button">

                <i class="fa fa-reply mr-1" aria-hidden="true"></i><?php echo e(__('◀️ 戻る')); ?>

            </a>
            <button type="submit" class="btn btn-success">
                <?php echo e(__('登録')); ?>

            </button>
        </div>
    </fieldset>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/puls/resources/views/product/create.blade.php ENDPATH**/ ?>