<a href="<?= esc($link ?? "") ?>" class="text-white bg-transparent border border-gray-600 px-4 py-2.5 rounded-lg hover:-translate-y-0.5 shadow-xl shadow-transparent hover:shadow-blue-400/15 ">
    <i class="<?= esc($tag ?? null) ?>"></i> 
    <?= esc($text ?? "default") ?>
</a>