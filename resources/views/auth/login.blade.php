<div style="display: 
    flex; 
    flex-direction: column; 
    align-items:center; 
    justify-content: center; 
    height: 100vh;">

    <!-- login -->
    <form method="POST" action="/login" style="display: flex; flex-direction: column; gap: 10px; width: 300px; padding: 20px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        @csrf
        <h2 style="text-align: center;">Login</h2>
        <input name="email" type="email" placeholder="Email" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
        <input name="password" type="password" placeholder="Password" required style="padding: 10px; border-radius: 4px; border: 1px solid #ccc;">
        <button type="submit" style="padding: 10px; border: none; border-radius: 4px; background-color: #007bff; color: white; cursor: pointer;">Login</button>
    </form>
</div>
