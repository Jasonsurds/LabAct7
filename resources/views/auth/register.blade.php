<div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">
    @if(session('success'))
        <div style="margin-bottom: 20px; padding: 10px 20px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="/register" style="display: flex; flex-direction: column; gap: 10px; width: 300px; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        @csrf
        <h2 style="text-align: center;">Register</h2>
        <input name="name" placeholder="Name" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
        <input name="email" type="email" placeholder="Email" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
        <input name="password" type="password" placeholder="Password" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
        <input name="password_confirmation" type="password" placeholder="Confirm Password" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
        <button type="submit" style="padding: 10px; border: none; border-radius: 4px; background-color: #28a745; color: white; cursor: pointer;">Register</button>
    </form>
</div>
