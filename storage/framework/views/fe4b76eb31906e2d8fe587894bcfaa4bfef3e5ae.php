<?php $__env->startSection('content'); ?>
<div class="container small">
<h1>商品編集</h1>
<form action="<?php echo e(route('products.update', ['id'=>$product->products_id])); ?>" method="POST">

<?php echo csrf_field(); ?>

<table class="table table-striped">
<thead>
    <tr>
    <th>ID</th>
    <th>商品画像</th>
    <th>商品名</th>
    <th>価格</th>
    <th>在庫数</th>
    <th>メーカー名</th>
    <th>コメント</th>
    </tr>
</thead>

<tbody>
    <tr>
    <td><?php echo e($product->products_id); ?></td>
    <td><img src="<?php echo e(asset('storage/images/'. $product->img_path)); ?>" class="img-fluid" width = "300px"></td>
    <td><?php echo e($product->product_name); ?></td>
    <td><?php echo e($product->price); ?></td>
    <td><?php echo e($product->stock); ?></td>
    <td><?php echo e($product->company->company_name); ?></td>
    <td><?php echo e($product->comment); ?></td>
    </tr>
</tbody>
</table>

    <fieldset>

    <div class="form-group">
    <div>
        <?php if($errors->has('product_name')): ?>
        <h5 style="color:red"><?php echo e($errors->first('product_name')); ?></h5>
    <?php endif; ?>
        <label for="product_name"><?php echo e(__('商品名')); ?></label>
        <input type="text" class="form-name" name="product_name" id="product_name">
    </div>

    <div class="form-group">
    <div>
        <?php if($errors->has('price')): ?>
        <h5 style="color:red"><?php echo e($errors->first('price')); ?></h5>
    <?php endif; ?>
        <label for="price"><?php echo e(__('価格')); ?></label>
        <input type="text" class="form-name" name="price" id="price">
    </div>

    <div class="form-group">
    <div>
        <?php if($errors->has('stock')): ?>
        <h5 style="color:red"><?php echo e($errors->first('stock')); ?></h5>
    <?php endif; ?>
        <label for="stock"><?php echo e(__('在庫数')); ?></label>
        <input type="text" class="form-name" name="stock" id="stock">
    </div>

    <div class="form-group">
    <div>
        <?php if($errors->has('company_id')): ?>
        <h5 style="color:red"><?php echo e($errors->first('company_id')); ?></h5>
    <?php endif; ?>
    <label for="company_id"><?php echo e(__('メーカー名')); ?></label>
    <select type="text" class="form-select" id="company_id" name="company_id">
    <option disabled style='display:none;' <?php if(empty($product->company_id)): ?> selected <?php endif; ?>>選択してください</option>
    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($company->company_id); ?>" <?php if(isset($product->company_id) && ($product->company_id === $company->company_id)): ?> selected <?php endif; ?>><?php echo e($company->company_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select> 
        
    <div class="form-group">
        <label for="comment"><?php echo e(__('コメント')); ?></label>
        <input type="text" class="form-name" name="comment" id="comment">
    </div>

    <div>
            <label for="img_path"><?php echo e(__('商品画像')); ?></label>
            <input type="file" class="form-" name="img_path" id="img_path">
        <div class="d-flex justify-content-between pt-3">
</dit>

    

        <a href="<?php echo e(route('products.show',['id'=>$product->products_id])); ?>" class="btn btn-outline-secondary" role="button">
            <i class="fa fa-reply mr-1" aria-hidden="true"></i><?php echo e(__('◀️ 戻る')); ?>

        </a>

        <button type="submit" class="btn btn-success" onclick= "return confirm('更新しますか？');">
            <?php echo e(__('更新')); ?>

        </button>
    </div>
    </fieldset>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/puls/resources/views/product/edit.blade.php ENDPATH**/ ?>