/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.{php,blade.php,js}',
    './app/**/*.php',
    './resources/views/**/*.blade.php',
    './resources/views/**/**/*.blade.php',
  ],
  plugins: [],
}