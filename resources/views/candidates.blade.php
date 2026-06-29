<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Candidates | Kishvi Consulting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/premium-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sales-upgrade.css') }}">
    <script defer src="{{ asset('js/sales-upgrade.js') }}"></script>
    <style>body{font-family:'Plus Jakarta Sans',sans-serif}</style>
</head>
<body class="bg-slate-50 text-slate-800">
    @include('partials.navbar')
    <main class="max-w-6xl mx-auto px-4 pt-32 pb-14">
        <section class="mb-12">
            <h1 class="text-4xl font-extrabold mb-4">For Candidates</h1>
            <p class="text-slate-600 max-w-2xl">Get matched with high-quality opportunities across multiple domains.</p>
        </section>
        <section class="grid md:grid-cols-3 gap-6">
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">Profile Review</h3>
                <p class="text-sm">We review your profile and align your strengths with open roles.</p>
            </article>
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">Role Matching</h3>
                <p class="text-sm">Targeted openings based on domain, location and career goals.</p>
            </article>
            <article class="card bg-white p-6">
                <h3 class="text-xl font-bold mb-2">Interview Support</h3>
                <p class="text-sm">Pre-interview mentoring and personalized preparation support.</p>
            </article>
        </section>
        <div class="mt-10 flex gap-3">
            <a href="{{ route('browse-jobs') }}" class="btn btn-primary px-5 py-3 text-white">Browse Jobs</a>
            <a href="{{ route('contact') }}" class="btn px-5 py-3 border border-slate-300">Contact Team</a>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>
