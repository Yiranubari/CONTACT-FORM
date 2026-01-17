<section class="contact-card">
    <h2>Leave a Public Note/Question</h2>
    <form method="POST" action="/contact">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required />
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@email.com" />
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea rows="4" id="message" name="message" placeholder="Write your note here..." required></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
    <style>
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
</section>