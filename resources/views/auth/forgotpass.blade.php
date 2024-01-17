<x-auth-layout title="Mot de passe oublié" :action="route('forgotpass')" submitMessage="Envoyer le lien">
    <x-input name="email" label="Votre email"/>
</x-auth-layout>