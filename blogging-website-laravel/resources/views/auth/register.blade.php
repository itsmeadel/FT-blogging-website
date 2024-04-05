<x-guest-layout>
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="full_name">Full Name</label>
        <input id="full_name" type="text" name="full_name" required>
    </div>

    <div>
        <label for="date_of_birth">Date of Birth</label>
        <input id="date_of_birth" type="date" name="date_of_birth" required>
    </div>

    <div>
        <button type="submit">Sign Up</button>
    </div>
    </form>
</x-guest-layout>
