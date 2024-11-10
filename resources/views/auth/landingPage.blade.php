<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIKOMTI - Politeknik Negeri Malang</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .container {
            flex: 1;
            background: linear-gradient(135deg, #1a237e 60%, #0d47a1 100%);
            clip-path: polygon(0 0, 100% 0, 100% 85%, 0% 100%);
            padding: 2rem;
            text-align: center;
            color: white;
        }

        .logo-container {
            margin: 2rem auto;
            max-width: 200px;
        }

        .logo-container img {
            width: 100%;
            height: auto;
        }

        .title {
            font-size: 2.5rem;
            margin: 1rem 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .login-button {
            background-color: #2196f3;
            color: white;
            padding: 1rem 3rem;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            display: inline-block;
            margin-top: 2rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0,0,0,0.2);
        }

        footer {
            background-color: #1a237e;
            text-align: center;
            
            padding: 1rem;
            background-color: white;
            color: #666;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            .title {
                font-size: 2rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo-container">
            <img src="/api/placeholder/200/100" alt="SIKOMTI Logo">
        </div>
        <h1 class="title">SIKOMTI</h1>
        <p class="subtitle">Sistem Informasi Komunikasi Terpadu</p>
        <p class="subtitle">POLITEKNIK NEGERI MALANG</p>
        <a href="#" class="login-button">Go to Login</a>
    </div>
    <footer>
        ©2024 Sistem Kompetensi Jurusan
    </footer>
</body>
</html>