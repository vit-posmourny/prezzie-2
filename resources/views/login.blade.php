<x-layouts.guest>

    <form action="/login" method="POST" class="flex flex-col gap-4 px-8">
        @csrf

        <x-input placeholder="E-mail" type="email" name="email" />
        <x-input placeholder="Heslo" type="password" name="password" />

        <x-primary-button type="submit">Přihlásit se</x-primary-button>
    </form>

</x-layouts.guest>
