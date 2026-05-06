/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        'theme-dark': '#1a202c',
        'abe-blue': '#0A265D',
        'abe-navy': '#101828',
        'abe-light': '#38B0FF',
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
