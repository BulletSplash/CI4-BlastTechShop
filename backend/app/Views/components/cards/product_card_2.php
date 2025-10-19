<div class="border border-white/4 bg-gradient-to-t from-white/2 to-white/1 p-4">
    <div class="text-center mb-4">
        <h3 class="font-semibold text-white"><?= esc($title ?? 'Component') ?></h3>
        <p class="text-sm text-slate-400"><?= esc($subtitle ?? 'Brand • Model') ?></p>
    </div>
    
    <div class="flex items-center justify-center bg-gradient-to-b from-white/3 to-transparent rounded-md p-4">
        <img src="<?= esc($img ?? '/images/default_product.png') ?>" class="product-img" />
    </div>
    <div class="mt-4">
        <div class="mt-3 flex items-center justify-between">
            <div class="text-center">
                <span class="text-lg font-bold text-amber-600"><?= esc($price ?? '$0.00') ?></span>
                <br>
                <span class="text-sm<?= $availability == 'in stock'? 'animate-pulse text-slate-400' : 'animate-pulse text-red-600' ?>"><?= esc($availability ?? 'in stock') ?></span>
            </div>
            <div class="flex items-center gap-2 text-xs">
                <?= view('components/buttons/b_ghost', ['text' => "Details", 'tag' => null]) ?>
                <?= view('components/buttons/b_primary', ['text' => "Purchase", 'tag' => null]) ?>
            </div>
        </div>
    </div>
</div>
