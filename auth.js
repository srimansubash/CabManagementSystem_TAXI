// Initialize default admin if not exists
if (!localStorage.getItem('admins')) {
    const defaultAdmins = [
        { uname: 'admin', pass: 'admin123' }
    ];
    localStorage.setItem('admins', JSON.stringify(defaultAdmins));
}

// Login functionality
document.getElementById('loginForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const uname = document.getElementById('uname').value;
    const pass = document.getElementById('pass').value;
    
    const admins = JSON.parse(localStorage.getItem('admins')) || [];
    const validAdmin = admins.find(admin => admin.uname === uname && admin.pass === pass);
    
    if (validAdmin) {
        document.getElementById('message').textContent = 'Login successful!';
        document.getElementById('message').style.color = 'lightgreen';
        sessionStorage.setItem('loggedIn', 'true');
        setTimeout(() => {
            window.location.href = 'ahome.html';
        }, 1000);
    } else {
        alert('Invalid login credentials');
        window.location.href = 'index.html';
    }
});

// Register functionality
document.getElementById('registerForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const uname = document.getElementById('uname').value;
    const pass = document.getElementById('pass').value;
    
    let admins = JSON.parse(localStorage.getItem('admins')) || [];
    
    const exists = admins.find(admin => admin.uname === uname);
    if (exists) {
        alert('Username already registered');
        window.location.href = 'index.html';
        return;
    }
    
    admins.push({ uname, pass });
    localStorage.setItem('admins', JSON.stringify(admins));
    
    document.getElementById('message').textContent = 'Registration successful!';
    document.getElementById('message').style.color = 'lightgreen';
    setTimeout(() => {
        window.location.href = 'index.html';
    }, 2000);
});
