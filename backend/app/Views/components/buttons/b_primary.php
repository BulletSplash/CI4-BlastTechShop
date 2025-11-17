<a href="<?= esc($link ?? "") ?>" class="text-white font-bold bg-gradient-to-r from-blue-900 to-violet-950 px-4 py-2.5 rounded-lg hover:-translate-y-0.5 shadow-xl shadow-transparent hover:shadow-blue-400/10 ">  
    <i class="<?= esc($tag ?? null) ?>"></i> 
    <?= esc($text ?? null ? $text : "") ?>
</a>