<section id="cta" class="mt-12 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="card p-6 bg-gradient-to-r from-blue-900/10 via-transparent to-violet-950/20 border-transparent">
        <div class="flex flex-col md:flex-row items-center justify-between gap-2">
            <div>
                <h3 class="text-2xl font-bold text-white">Ready to upgrade your rig?</h3>
                <p class="text-slate-200 mt-1 max-w-xl">Explore curated bundles, save with limited-time deals, and get expert recommendations tailored to your build.</p>
            </div>
            <div class="flex items-center gap-5">
                <?= view('components/buttons/b_primary.php', ['link' => '/products?filter=deals', 'text' => 'Shop the Sale', 'tag' => 'fa-solid fa-bolt']) ?>
                <form class="w-full sm:w-auto sm:flex items-center gap-2 relative" method="post" action="/subscribe">
                    <label for="email" class="sr-only">Email address</label>
                    <input id="email" name="email" type="email" placeholder="you@domain.com" required class="bg-white/5 rounded-md px-3 py-2 text-sm text-white placeholder:text-slate-400 outline-none" />
                    <label class="absolute bg-gradient-to-r from-blue-900 to-violet-950 px-10 py-4 rounded-2xl right-3 -z-10 animate-ping hover:-translate-y-0.5"></label>
                    <button type="submit" class="text-white font-bold bg-gradient-to-r from-blue-900 to-violet-950 px-4 py-2.5 rounded-lg hover:-translate-y-0.5 shadow-xl shadow-transparent hover:shadow-blue-400/10 ">Subscribe</button>
                </form>
            </div>
        </div>
</section>