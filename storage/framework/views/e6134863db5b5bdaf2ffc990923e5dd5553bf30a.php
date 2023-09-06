<?php $__env->startSection('content'); ?>
<h1>詳細確認</h1>
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
    <td> <img src="<?php echo e(asset('storage/images/'. $product->img_path)); ?>" class="img-fluid" width = "300px"/></td>
    <td><?php echo e($product->product_name); ?></td>
    <td><?php echo e($product->price); ?></td>
    <td><?php echo e($product->stock); ?></td>
    <td><?php echo e($product->company->company_name); ?></td>
    <td><?php echo e($product->comment); ?></td>
    <td><a href="<?php echo e(route('products.edit', ['id'=>$product->products_id])); ?>" class="btn btn-info">編集</a></td>
    </tr>
</tbody>
</table>

<a href="<?php echo e(route('products')); ?>" class="btn btn-outline-secondary" role="button">
        <i class="fa fa-reply mr-1" aria-hidden="true"></i><?php echo e(__('◀️ 戻る')); ?>

        </a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/puls/resources/views/product/show.blade.php ENDPATH**/ ?>