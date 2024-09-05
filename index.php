<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        /* Styling untuk seluruh halaman */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background-image: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
        }

        /* Header Title */
        .page-header {
            font-size: 48px;
            font-weight: bold;
            color: #ff4b5c;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Container form */
        .contact-form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            transition: all 0.3s ease;
        }

        /* Heading form */
        h2 {
            text-align: center;
            color: #ff4b5c;
            font-size: 32px;
            margin-bottom: 20px;
        }

        /* Label dan input */
        label {
            display: block;
            color: #333;
            font-size: 14px;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            font-size: 16px;
            transition: all 0.2s ease-in-out;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input:focus,
        textarea:focus {
            border-color: #ff4b5c;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(255, 75, 92, 0.2);
        }

        /* Textarea styling */
        textarea {
            height: 150px;
            resize: none;
        }

        /* Tombol submit */
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #ff4b5c;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #ff2a3d;
        }

        /* Transition untuk hover pada container */
        .contact-form:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
        }

        /* Responsif */
        @media screen and (max-width: 768px) {
            .contact-form {
                padding: 20px;
            }

            h2 {
                font-size: 28px;
            }

            .page-header {
                font-size: 36px;
            }
        }

    </style>
</head>
<body>

    <!-- Header Title -->
    <div class="page-header">Contact Form</div>

    <!-- Form Container -->
    <div class="contact-form">
        <h2>Get in Touch</h2>
        <form action="prosesform.php" method="post">
            <!-- Field Name -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <!-- Field Email -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <!-- Field Gender -->
            <label>Gender:</label>
            <input type="radio" id="gender_male" name="gender" value="Male" required>
            <label for="gender_male">Male</label>
            <input type="radio" id="gender_female" name="gender" value="Female" required>
            <label for="gender_female">Female</label>
            <input type="radio" id="gender_other" name="gender" value="Other" required>
            <label for="gender_other">Other</label><br><br>

            <!-- Field Age -->
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" required>

            <!-- Field Message -->
            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>

            <!-- Tombol Submit -->
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>

