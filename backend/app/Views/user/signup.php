<?= view('components/header') ?>

<body class="antialiased bg-slate-900 text-slate-100">
    <?= view('components/navbar') ?>

    <main class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <img class="mx-auto h-12 w-auto rounded-md" src="/images/logo.png" alt="BLASTTECH">
                <h2 class="mt-6 text-3xl font-extrabold">Create your account</h2>
                <p class="mt-2 text-sm text-slate-400">Sign up to save builds, track orders, and checkout faster.</p>
            </div>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="rounded-md bg-red-600/90 p-3 text-white text-sm">
                    <?= esc(session()->getFlashdata('error')) ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('errors')): ?>
                <div class="rounded-md bg-red-600/80 p-3 text-white text-sm">
                    <?php $errs = session()->getFlashdata('errors');
                        if (is_array($errs)):
                            foreach ($errs as $e): ?>
                                <div><?= esc($e) ?></div>
                    <?php endforeach; else: ?>
                        <?= esc($errs) ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <form class="mt-8 space-y-6 bg-slate-800/40 p-6 rounded-lg card" action="/register" method="post">
                <?= csrf_field() ?>
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="name" class="sr-only">Full name</label>
                        <input id="name" name="name" type="text" autocomplete="name" required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-transparent placeholder:text-slate-500 text-slate-100 bg-white/3 focus:outline-none focus:ring-2 focus:ring-[var(--brand-accent)] focus:border-transparent"
                            placeholder="Full name" value="<?= esc(old('name')) ?>">
                    </div>

                    <div class="mt-3">
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-transparent placeholder:text-slate-500 text-slate-100 bg-white/3 focus:outline-none focus:ring-2 focus:ring-[var(--brand-accent)] focus:border-transparent"
                            placeholder="you@domain.com" value="<?= esc(old('email')) ?>">
                    </div>

                    <div class="mt-3">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="new-password" required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-transparent placeholder:text-slate-500 text-slate-100 bg-white/3 focus:outline-none focus:ring-2 focus:ring-[var(--brand-accent)] focus:border-transparent"
                            placeholder="Password">
                    </div>

                    <div class="mt-3">
                        <label for="password_confirm" class="sr-only">Confirm password</label>
                        <input id="password_confirm" name="password_confirm" type="password" autocomplete="new-password" required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-transparent placeholder:text-slate-500 text-slate-100 bg-white/3 focus:outline-none focus:ring-2 focus:ring-[var(--brand-accent)] focus:border-transparent"
                            placeholder="Confirm password">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="text-sm">
                        <a href="/terms" class="font-medium text-slate-300 hover:underline">Terms & Privacy</a>
                    </div>
                    <div class="text-sm">
                        <a href="/login" class="font-medium text-[var(--brand-accent)] hover:underline">Already have an account?</a>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button type="submit" class="btn-primary w-full">Create account</button>
                </div>

                <div class="pt-4 text-center">
                    <p class="text-sm text-slate-400">Or sign up with</p>
                    <div class="mt-3 flex justify-center gap-3">
                        <a href="/oauth/google" class="btn-ghost inline-flex items-center gap-2"><i class="fa-brands fa-google"></i> Google</a>
                        <a href="/oauth/github" class="btn-ghost inline-flex items-center gap-2"><i class="fa-brands fa-github"></i> GitHub</a>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?= view('components/footer') ?>
</body>
