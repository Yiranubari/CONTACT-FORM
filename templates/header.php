<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* ===== Variables & Reset ===== */
        :root {
            --primary: #4f46e5;
            /* Indigo 600 */
            --primary-hover: #4338ca;
            /* Indigo 700 */
            --bg-body: #f3f4f6;
            /* Gray 100 */
            --bg-card: #ffffff;
            /* White */
            --text-main: #111827;
            /* Gray 900 */
            --text-muted: #6b7280;
            /* Gray 500 */
            --border: #e5e7eb;
            /* Gray 200 */
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --radius: 0.75rem;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', system-ui, sans-serif;
            background-color: var(--bg-body);
            color: var(--text-main);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ===== Layout ===== */


        /* ===== Header & Nav ===== */
        header {
            background-color: var(--bg-card);
            border-bottom: 1px solid var(--border);
            padding: 1rem 0;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 0.5rem;
        }

        h1 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-main);
            letter-spacing: -0.025em;
        }

        nav {
            display: flex;
            gap: 0.5rem;
        }

        nav a {
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            color: var(--text-muted);
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }

        nav a:hover {
            color: var(--primary);
            background-color: #eef2ff;
            /* Very light indigo */
        }

        nav a.active {
            color: var(--bg-card);
            background-color: var(--primary);
        }

        /* ===== Main Content ===== */
        main {
            flex: 1;
            /* Pushes footer down */
            padding: 2rem 0;
        }

        .card {
            background-color: var(--bg-card);
            border-radius: var(--radius);
            padding: 2.5rem;
            box-shadow: var(--shadow);
            border: 1px solid var(--border);


            /* Layout Fixes */
            width: 100%;
            max-width: 700px;
            margin: 0 auto;


        }

        h2 {
            font-size: 1.875rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: var(--text-main);
        }

        p {
            color: var(--text-muted);
            font-size: 1.125rem;
        }

        .cta-button {
            display: inline-block;
            margin-top: 1.5rem;
            background-color: var(--primary);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 500;
            transition: background-color 0.2s;
        }

        .cta-button:hover {
            background-color: var(--primary-hover);
        }

        /* ===== Footer ===== */
        footer {
            background-color: var(--bg-card);
            border-top: 1px solid var(--border);
            padding: 2rem 0;
            margin-top: auto;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        /* ===== Mobile ===== */
        @media (max-width: 640px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
                text-align: center;

            }

            nav {
                flex-wrap: wrap;
                justify-content: center;
            }


        }

        /* Container styling to match the 'Hello' card */
        .contact-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 700px;

            /* Spacing between Hello Card and Form */
            margin-top: 2rem;
            /* Reduced from 40px */
            margin-bottom: 2rem;
            /* Reduced from 40px */
            margin-left: auto;
            margin-right: auto;

            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            font-family: system-ui, -apple-system, sans-serif;
            color: #1f2937;
            box-sizing: border-box;
        }

        .contact-card h2 {
            margin-top: 0;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
        }

        /* Flexbox layout for the form */
        .contact-card form {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        /* Label styling */
        .contact-card label {
            font-size: 0.875rem;
            font-weight: 600;
            color: #374151;
        }

        /* Input and Textarea styling */
        .contact-card input,
        .contact-card textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
            background-color: #f9fafb;
            transition: all 0.2s;
            box-sizing: border-box;
            /* Ensures padding doesn't break width */
        }

        /* Focus states for accessibility and aesthetics */
        .contact-card input:focus,
        .contact-card textarea:focus {
            outline: none;
            border-color: #4f46e5;
            /* Your theme's primary color */
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        /* Button styling to match the 'Learn more' button */
        .contact-card button {
            background-color: #4f46e5;
            color: white;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: background-color 0.2s;
            width: fit-content;
            align-self: flex-start;
            /* Aligns button to left */
        }

        .contact-card button:hover {
            background-color: #4338ca;
            /* Slightly darker on hover */
        }
    </style>
</head>

<body>

    <header>
        <div class="container header-content">
            <h1>Yiranubari</h1>
            <nav>
                <a href="index.php" class="active">Home</a>
                <a href="contact_get.php">Contact</a>
                <a href="note.php">Note</a>
                <a href="guestbook.php">Guestbook</a>
            </nav>
        </div>

    </header>
</body>