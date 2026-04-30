<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $username = htmlspecialchars($_POST['username'] ?? '');
    $current_rank = htmlspecialchars($_POST['current_rank'] ?? '');
    $goal_rank = htmlspecialchars($_POST['goal_rank'] ?? '');
    $frequency = htmlspecialchars($_POST['frequency'] ?? '');
    $notes = htmlspecialchars($_POST['notes'] ?? '');

    // Display a success message
    echo "<!DOCTYPE html>
<html class='dark' lang='en'>
<head>
    <meta charset='utf-8' />
    <meta content='width=device-width, initial-scale=1.0' name='viewport' />
    <title>THE FINALS: Application Received</title>
    <script src='https://cdn.tailwindcss.com'></script>
    <style>body { background: #131313; color: white; display: flex; justify-content: center; align-items: center; height: 100vh; font-family: sans-serif; }</style>
</head>
<body>
    <div class='max-w-2xl w-full bg-[#1c1b1b] p-10 border-2 border-white/10 text-center shadow-[0_0_50px_rgba(217,25,49,0.1)]'>
        <h1 class='text-4xl font-extrabold uppercase italic mb-4 tracking-wider text-white'>Application <span class='text-[#d91931]'>Received!</span></h1>
        <p class='text-gray-300 text-lg'>Thank you, <strong class='text-white'>$name</strong> ($username). We have received your coaching application to reach <strong class='text-white'>$goal_rank</strong>.</p>
        <p class='mt-4 text-gray-300'>Our team will contact you at <strong class='text-white'>$email</strong> shortly to schedule your <strong class='text-white'>$frequency</strong> sessions.</p>
        <div class='mt-10'>
            <a href='index.html' class='inline-block bg-[#d91931] px-6 py-3 font-bold uppercase tracking-widest text-white hover:bg-[#b01024] transition-colors'>Return Home</a>
        </div>
    </div>
</body>
</html>";
} else {
    header("Location: index.html");
    exit;
}
?>
