/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
    fontFamily: {
      sans: ["Poppins", "sans-serif"],
    },
    colors: {
      primary: "#00113F",
      secondary: "#ffffff",
      tertiary: "#2196f3",
      quaternary: "#222222",
      quinary: "#f7f7f7",
    },
    backgroundImage: {
      "main-banner": "url('/public/images/banner.jpg')",
    }
  },
  plugins: [],
}

