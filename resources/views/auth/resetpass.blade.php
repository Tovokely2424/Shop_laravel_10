<x-auth-layout title="Restauration de mot de passe" :action="route('resetpass')" id="resetpass" submitMessage="Confirmer le modification">
    <x-input name="password" label="Mot de passe" type="password"/>
    <x-input name="password_confirmation" label="Confirmation du mot de passe" type="password"/>
</x-auth-layout>