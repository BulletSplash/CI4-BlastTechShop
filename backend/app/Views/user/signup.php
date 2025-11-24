<?php 
    $session = session();

    $flashMessage = $session->getFlashdata('success');
    $successMessage;
    $errflashMessage = $session->getFlashdata('error');
    $successMessage;
    $errorMessage;

    if (!empty($flashMessage)){
        $successMessage = $flashMessage['message'];
    }

    if (!empty($errflashMessage)){
        $errorMessage = $errflashMessage['message'];
    }
?>

<?= view('components/head') ?>

<body class="antialiased bg-slate-900 text-slate-100">
    <?= view('components/header') ?>

    <main class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <img class="mx-auto h-12 w-auto rounded-md" src="/images/logo.png" alt="BLASTTECH">
                <h2 class="mt-6 text-3xl font-extrabold">Create your account</h2>
                <p class="mt-2 text-sm text-slate-400">Sign up to save builds, track orders, and checkout faster.</p>
            </div>

            <form class="mt-8 space-y-6 bg-slate-800/40 p-6 rounded-lg card" action="register" method="post">
                <?= csrf_field() ?>
                <div class="rounded-md shadow-sm -space-y-px">

                    <?php if (!empty($successMessage)): ?>
                        <div class="rounded-md p-3 text-center text-green-600/90 text-sm">
                            <?= esc($successMessage) ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($errorMessage)): ?>
                        <div class="rounded-md p-3 text-center text-red-600/90 text-sm">
                            <?= esc($errorMessage) ?>
                        </div>
                    <?php endif; ?>

                    <div>
                        <label for="name" class="sr-only">Full name</label>
                        <input id="fullname" name="fullname" type="text" autocomplete="name" required
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

                <div class="flex items-center justify-end">
                    <div class="text-sm">
                        <?= view('components/buttons/b_underlined', ['link' => 'signin', 'text' =>'Already have an account?']) ?>
                    </div>
                </div>

                <div class="flex justify-center">
                    <input type="submit" value="Sign Up" class="text-white font-bold bg-gradient-to-r from-blue-900 to-violet-950 px-4 py-2.5 rounded-lg hover:-translate-y-0.5 shadow-xl shadow-transparent hover:shadow-blue-400/10 ">
                </div>
            </form>
        </div>
    </main>

    <?= view('components/footer') ?>
</body>
