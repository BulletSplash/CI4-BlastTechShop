<?= view('components/head') ?>

<body class="antialiased bg-slate-900 text-slate-100">
    <?= view('components/header') ?>

    <main class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full">
            <div class="text-center">
                <img class="mx-auto h-12 w-auto rounded-md" src="/images/logo.png" alt="BLASTTECH">
                <h2 class="mt-6 text-3xl font-extrabold">Sign in to your account</h2>
                <p class="mt-2 text-sm text-slate-400">Enter your credentials to access your orders, carts, and saved builds.</p>
            </div>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="rounded-md bg-red-600/90 p-3 text-white text-sm">
                    <?= esc(session()->getFlashdata('error')) ?>
                </div>
            <?php endif; ?>

            <form class="mt-8 space-y-6 bg-slate-800/40 p-6 rounded-lg card" action="/login" method="post">
                <?= csrf_field() ?>
                <div class="rounded-md shadow-sm -space-y-px">
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-transparent placeholder:text-slate-500 text-slate-100 bg-white/3 focus:outline-none focus:ring-2 focus:ring-[var(--brand-accent)] focus:border-transparent"
                            placeholder="you@domain.com" value="<?= esc(old('email')) ?>">
                    </div>
                    <div class="mt-3">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="appearance-none rounded-md relative block w-full px-3 py-2 border border-transparent placeholder:text-slate-500 text-slate-100 bg-white/3 focus:outline-none focus:ring-2 focus:ring-[var(--brand-accent)] focus:border-transparent"
                            placeholder="Password">
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 border-slate-600 rounded" />
                        <label for="remember" class="ml-2 block text-sm text-slate-400">Remember me</label>
                    </div>

                    <div class="text-sm">
                        <?= view('components/buttons/b_underlined', ['text' => 'Forgot your password']) ?>
                    </div>
                </div>

                <div class="flex items-center gap-3 justify-center">
                    <?= view('components/buttons/b_primary', ['text' => 'Sign in']) ?>
                </div>

                <div class="mt-4 text-sm text-center">
                    <span class="text-slate-400">Don't have an account?</span>
                    <?= view('components/buttons/b_underlined', ['link' => 'signup', 'text' => 'Create one']) ?>
                </div>
            </form>
        </div>
    </main>

    <?= view('components/footer') ?>
</body>
