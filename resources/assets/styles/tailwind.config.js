const { wordpressUtilities } = require('tailwindcss-wordpress');

const SITE = process.env.SITE;

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
        'main-90': '#CFDEFC',
        int: {
          turq: '#26D7B2',
          yellow: '#FFE525',
          red: '#FF5547',
          'red-lighter': 'FF7B70',
          fuchsia: '#DB43D8',
        },
        latam: {
          orange: '#FF922D',
          'orange-cream': '#FFC794',
        },
        shade: {
          10: '#0A1729',
          20: '#142F52',
          30: '#1F467A',
          40: '#195BB3',
          50: '#0D59F2',
          60: '#3D7AF5',
          70: '#6E9CF7',
          80: '#9EBDFA',
          90: '#CFDEFC',
        },
        black: '#333333',
        black2: '#4D4D4D',
        dark: '#4A4A4A',
        gray1: '#666666',
        gray2: '#999999',
        gray3: '#CCCCCC',
        gray4: '#E6E6E6',
        gray5: '#F2F2F2',
        light: '#E6E6E6',
      },
      lineHeight: {
        tight: 1.2,
        relaxed: 1.65,
      },
      maxHeight: {
        '16': '4rem',
        '20': '5rem',
      },
      minWidth: {
        '1/2': '50%',
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
      letterSpacing: {
        widest: '1px',
      },
      fontSize: {
        '3xs': '0.5rem',
        '2xs': '0.625rem',
        '3xl': '2rem',
      },
      textStrokeWidth: theme => theme('borderWidth'),
      spacing: {
        '9': '1.75rem',
      },
      margin: {
        '1/12': '8.333333333%',
        '1/3': '33.333333333%',
        '2/3': '66.6666667%',
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
    tableLayout: ['responsive', 'hover', 'focus'],
  },
  plugins: [wordpressUtilities],
};

if (SITE === 'latam') {
  module.exports.theme.extend.colors.primary =
    module.exports.theme.extend.colors.latam.orange;
  module.exports.theme.extend.colors.menuHover =
    module.exports.theme.extend.colors.gray5;
} else {
  module.exports.theme.extend.colors.primary =
    module.exports.theme.extend.colors.main;
  module.exports.theme.extend.colors.menuHover =
    module.exports.theme.extend.colors.shade['90'];
}
