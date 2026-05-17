<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        h1 {
            color: #333333;
        }
        p {
            color: #666666;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4F46E5;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- কন্ট্রোলার বা মেইল ক্লাস থেকে পাস করা $name ভেরিয়েবল এখানে প্রিন্ট হবে -->
   <h1>hello{{ $data['name'] ?? "noting"}}</h1>
   <h1>hello{{ $data['address'] }}</h1>
        <p>এটি Laravel Breeze এবং Vite সেটআপ করার পর পাঠানো একটি টেস্ট ইমেইল।</p>
        <p>আপনার মেইল সিস্টেম এখন লোকালি পারফেক্টলি কাজ করছে।</p>
       
    </div>
</body>
</html>