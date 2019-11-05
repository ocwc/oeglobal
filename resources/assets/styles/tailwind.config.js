const { wordpressUtilities } = require('tailwindcss-wordpress');

module.exports = {
  theme: {
    extend: {
      colors: {
        main: '#0D59F2',
        'main-dark': '#195BB3',
        'main-darker': '#1F467A',
        'main-light': '#3D7AF5',
        'main-lighter': '#6E9CF7',
        'main-lightest': '#9EBDFA',
        int: {
          turq: '#26D7B2',
          yellow: '#FFE525',
          red: '#FF5547',
          fuchsia: '#DB43D8',
        },
        latam: {
          orange: '#FF922D',
          'orange-cream': '#FFC794',
        },
        black: '#3333333',
        black2: '#4D4D4D',
        dark: '#4A4A4A',
        gray1: '#666666',
        gray2: '#999999',
        gray3: '#CCCCCC',
        gray4: '#E6E6E6',
        light: '#E6E6E6',
      },
      lineHeight: {
        tight: 1.2,
        relaxed: 1.6,
      },
      maxHeight: {
        '16': '4rem',
      },
      fontFamily: {
        sans: [
          'Montserrat',
          '-apple-system',
          'BlinkMacSystemFont',
          '"Segoe UI"',
          'Roboto',
          '"Helvetica Neue"',
          'Arial',
          '"Noto Sans"',
          'sans-serif',
          '"Apple Color Emoji"',
          '"Segoe UI Emoji"',
          '"Segoe UI Symbol"',
          '"Noto Color Emoji"',
        ],
      },
      fontSize: {
        '3xs': '0.5rem',
        '2xs': '0.625rem',
      },
      textStrokeWidth: theme => theme('borderWidth'),
      margin: {
        '1/12': '8.333333333%',
      },
    },
    container: {
      center: true,
      padding: '1rem',
    },
  },
  variants: {
    textStrokeWidth: ['responsive', 'hover'],
    padding: ['responsive', 'last'],
  },
  plugins: [wordpressUtilities],
};
