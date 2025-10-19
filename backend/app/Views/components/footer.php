<footer class="pt-2 border-t border-white/6 grid grid-flow-col grid-rows-2 gap-3">
    <div class="text-center text-sm">
        <?= view('components/buttons/b_underlined.php', ['link' => 'moodboard', 'text' => 'MOOD BOARD']) ?>
    <br>
        <?= view('components/buttons/b_underlined.php', ['link' => 'roadmap', 'text' => 'ROADMAP']) ?>
    </div>
    <div class="text-center italic text-slate-500 text-sm">© <?= date('Y') ?> BLAST TECH SHOP — All rights reserved.</div>
</footer>
