
<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; text-align: center;">
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p>You are logged in as {{ auth()->user()->email }}</p>
<form method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form>
