                //for user validation example using js halata ,kapoy na uy 
    const users = [
        { username: 'camille', password: 'barola' },
        { username: 'user2', password: 'baho' },
        { username: 'user3', password: 'pass3' },
        { username: 'user4', password: 'pass4' },
        { username: 'user5', password: 'pass5' },
        { username: 'user6', password: 'pass6' }
    ];

    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const loginMessage = document.getElementById('loginMessage');

        const user = users.find(user => user.username === username);

        if (user) {
            if (user.password === password) {
                loginMessage.style.color = 'green';
                loginMessage.textContent = 'Successfully logged in!';
                // Redirect to home page after a brief delay
                setTimeout(() => {
                    window.location.href = 'index.html';
                }, 1500);
            } else {
                loginMessage.style.color = 'red';
                loginMessage.textContent = 'Incorrect password, please try again.';
            }
        } else {
            loginMessage.style.color = 'red';
            loginMessage.textContent = 'Username not found, please try again.';
        }
    });

    // Facebook Login Simulation
    document.getElementById('facebookLogin').addEventListener('click', function(event) {
        event.preventDefault();
        // Simulate Facebook login
        // In a real implementation, you would redirect to the Facebook OAuth page
        alert('Redirecting to Facebook login...');
        // You can use FB.login() for actual Facebook login
    });

    // Instagram Login Simulation
    document.getElementById('instagramLogin').addEventListener('click', function(event) {
        event.preventDefault();
        // In a real implementation, you would redirect to the Instagram OAuth page
        
        alert('Redirecting to Instagram login...');

    });
