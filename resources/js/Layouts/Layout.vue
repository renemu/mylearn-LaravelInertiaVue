<script setup></script>
<template>
    <Head>
        <title>Testing Laravel Inertia Vue</title>
        <meta name="description" content="This is vue js" />
    </Head>
    <div>
        <header>
            <nav>
                <div class="space-x-6">
                    <Link :href="route('home')" class="nav-link">Home</Link>
                    <Link :href="route('about')" class="nav-link">About</Link>
                </div>
                <!-- <h2>{{ $page.props.user }}</h2> -->
                <Link :href="route('register')" class="nav-link">Register</Link>
            </nav>
        </header>
        <main class="p-4">
            <slot />
        </main>
    </div>
</template>
