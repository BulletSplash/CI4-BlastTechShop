<div class="border border-white/4 bg-gradient-to-t from-white/2 to-white/1 p-4">
    <div class="flex items-center justify-center bg-gradient-to-b from-white/3 to-transparent rounded-md p-4">
        <img src="<?= esc($img ?? '/images/default_product.png') ?>" alt="<?= esc($title ?? 'Product') ?>" class="product-img" />
    </div>
    <div class="mt-4">
        <h3 class="font-semibold"><?= esc($title ?? 'Component') ?></h3>
        <p class="text-sm text-slate-400 mt-1"><?= esc($subtitle ?? 'Brand • Model') ?></p>
        <div class="mt-3 flex items-center justify-between">
            <div>
                <span class="text-lg font-bold"><?= esc($price ?? '$0.00') ?></span>
                <span class="text-sm text-slate-400 ml-2"><?= esc($availability ?? 'in stock') ?></span>
            </div>
            <div class="flex items-center gap-2 text-xs">
                <?= view('components/buttons/b_ghost', ['text' => "Details"]) ?>
                <?= view('components/buttons/b_primary', ['text' => "Purchase"]) ?>
            </div>
        </div>
    </div>
</div>
