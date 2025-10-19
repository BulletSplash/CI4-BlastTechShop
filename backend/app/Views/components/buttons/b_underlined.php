<a class="group text-slate-400 hover:text-white transition-all duration-300 ease-in-out grid-cols-2" href="<?= esc($link ?? "") ?>">
    <span class="bg-left-bottom bg-gradient-to-r from-white to-white bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out p-1">
        <?= esc($text ?? null ? $text : "") ?>
    </span>
</a>