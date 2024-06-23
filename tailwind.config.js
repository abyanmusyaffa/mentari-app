/** @type {import('tailwindcss').Config} */
const defaultTheme = require("./node_modules/tailwindcss/defaultTheme");
const { addDynamicIconSelectors } = require("./node_modules/@iconify/tailwind");

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        baloo: ['"Baloo 2"', ...defaultTheme.fontFamily.sans],
      },
      boxShadow: {
        mentari: "4px 4px 10px rgba(228, 230, 232, 0.90) inset",
        mentari2: "5px 5px 13px rgba(235, 235, 235, 0.90)",
      },
    },
  },
  plugins: [addDynamicIconSelectors()],
}