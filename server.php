<?php
/**
 * Baseline Server Template
 * Provides  text with the current server timestamp.
 * Confirms that the Docker container and port forwarding 
 * are active.
 */

// 1. Explicitly tell the browser to expect raw text
header("Content-Type: text/plain; charset=UTF-8");

// 2. Prevent the browser from caching the time response
header("Cache-Control: no-cache, must-revalidate");

// 3. Array of quotes
$quotes = [
    "Be yourself; everyone else is already taken. — Oscar Wilde",
    "Two things are infinite: the universe and human stupidity. — Albert Einstein",
    "In three words I can sum up everything I've learned about life: it goes on. — Robert Frost",
    "The only way to do great work is to love what you do. — Steve Jobs",
    "Life is what happens when you're busy making other plans. — John Lennon",
    "Whether you think you can or you think you can't, you're right. — Henry Ford",
    "The mind is its own place, and in itself can make a heaven of hell. — John Milton",
    "I am not a product of my circumstances. I am a product of my decisions. — Stephen Covey",
    "The only true wisdom is in knowing you know nothing. — Socrates",
    "We don't see things as they are, we see them as we are. — Anaïs Nin"
];

//4. Pick a random quote and output it 
$randomIndex = array_rand($quotes);
echo $quotes[$randomIndex];
?>
