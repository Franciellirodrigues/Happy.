/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    fontFamily: {
      'nunito': ['Nunito', 'sans-serif']
    },
    extend: {
      colors: {
        customBlue: '#96feff',
        customYellow: '#ffd666',
        customGray: '#4D6F80',
        customOcean: 'rgba(179, 218, 226, 1)',
        customWhite: 'rgba(230, 247, 251, 1)',
        customGreen:'rgba(161, 233, 197, 1)',
        customGreenLight: 'rgba(237, 255, 246, 1)',
        customPink: 'rgba(241, 126, 161, 1)',
        customPinkLight: 'rgba(255, 188, 212, 1)',

      },
    },
  },
  plugins: [],
}

