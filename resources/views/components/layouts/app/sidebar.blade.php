<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- remove class=dark-->
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('dashboard') }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a>

            <flux:navlist variant="outline">

                    <flux:navlist.item icon="list-bullet" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>Buchungen</flux:navlist.item>
                    <flux:navlist.item icon="archive-box" :href="route('product-management')" :current="request()->routeIs('product-management')" wire:navigate>Product Management</flux:navlist.item>

            </flux:navlist>





        </flux:sidebar>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
