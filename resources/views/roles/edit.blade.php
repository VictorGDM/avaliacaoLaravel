<x-app-layout>
    <x-roles.form :action="route('roles.update', $role->id)" :name="$role->name" />
</x-app-layout>