/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{php,js}"],
  theme: {
    extend: {
      fontSize: {
        xs: "12px",
        sm: "14px",
        base: "16px",
        base2: "18px",
        xl: "20px",
        "2xl": "24px",
        "2base": "32px",
      },
    },
  },
  plugins: [],
};
