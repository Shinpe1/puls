<?php $__env->startSection('content'); ?>

    <h1>商品情報一覧</h1>


    <a href="<?php echo e(route('products.create')); ?>">商品新規登録</a>

<table class="table table-striped">
<thead>
    <tr>
    <th>ID</th>
    <th>商品画像</th>
    <th>商品名</th>
    <th>価格</th>
    <th>在庫数</th>
    <th>メーカー名</th>
    </tr>
</thead>
<tbody>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <td><?php echo e($product->products_id); ?></td>
    <td> <img src="<?php echo e(asset('storage/images/'. $product->img_path)); ?>" class="img-fluid" width = "300px"></td>
    <td><?php echo e($product->product_name); ?></td>
    <td><?php echo e($product->price); ?></td>
    <td><?php echo e($product->stock); ?></td>
    <td><?php echo e($product->company->company_name); ?></td>
    <td><a href="<?php echo e(route('products.show',['id'=>$product->products_id])); ?>" class="btn btn-primary">詳細表示</a></td>
    <td>
        <form  action="<?php echo e(route('products.destroy', ['id'=>$product->products_id])); ?>" method="POST" >
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger" onclick= "return confirm('本当に削除しますか？');" >削除</button>
        </form>
    </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>

<!-- 検索フォームのセクション -->
<div class="search mt-5">
    
    <!-- 検索のタイトル -->
    <h4>検索</h4>
    
    <!-- 検索フォーム。GETメソッドで、商品一覧のルートにデータを送信 -->
    <form action="<?php echo e(route('products')); ?>" method="GET" class="row g-3">

        <div class="col-sm-12 col-md-3">
            <input type="text" name="product_name" id= "product_name" class="form-control" placeholder="商品名" value="<?php echo e(request('product_name')); ?>">
        </div>

        <div class="col-sm-12 col-md-2">
            <select type="text" name="company_id" id= "company_id" class="form-control"  value="<?php echo e(request('company_id')); ?>">
            <option disabled style='display:none;' <?php if(empty($product->company_id)): ?> selected <?php endif; ?>>選択してください</option>
    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($company->company_id); ?>" <?php if(isset($product->company_id) && ($product->company_id === $company->company_id)): ?> selected <?php endif; ?>><?php echo e($company->company_name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        </div>

        <!-- 絞り込みボタン -->
        <div class="col-sm-12 col-md-1">
            <button class="btn btn-outline-secondary" type="submit">検索</button>
        </div>
    </form>
</div>

<!-- 検索条件をリセットするためのリンクボタン -->
<a href="<?php echo e(route('products')); ?>" class="btn btn-success mt-3">検索条件を元に戻す</a>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/puls/resources/views/product/index.blade.php ENDPATH**/ ?>