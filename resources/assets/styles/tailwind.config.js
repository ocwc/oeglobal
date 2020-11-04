const { wordpressUtilities } = require("tailwindcss-wordpress");

const SITE = process.env.SITE;

module.exports = {
  theme: {
    extend: {
      colors: {
        'blue-100': '#0d1530',
        'blue-200': '#1c2b5a',
        'blue-300': '#1f377a',
        'blue-400': '#1952b3',
        'blue-500': '#0d59f2',
        'blue-600': '#3b80f7',
        'blue-700': '#6ea5f7',
        'blue-800': '#a7c3fb',
        'blue-900': '#cfdefc',
        'fucsia-100': '#3d0e49',
        'fucsia-200': '#561467',
        'fucsia-300': '#7c1b8d',
        'fucsia-400': '#aa22b4',
        'fucsia-500': '#db43db',
        'fucsia-600': '#e05cdc',
        'fucsia-700': '#e77ee3',
        'fucsia-800': '#f0b2ec',
        'fucsia-900': '#f7d4f2',
        'black-100': '#1a1a1a',
        'black-200': '#333333',
        'black-300': '#4d4d4d',
        'black-400': '#666666',
        'gray-500': '#808080',
        'gray-600': '#999999',
        'gray-700': '#b3b3b3',
        'gray-800': '#d9d9d9',
        'gray-900': '#f2f2f2',
        'white': '#ffffff',
        'red-100': '#600623',
        'red-200': '#7d081f',
        'red-300': '#af0821',
        'red-400': '#d8091a',
        'red-500': '#f50a0a',
        'red-600': '#ff5547',
        'red-700': '#ff8670',
        'red-800': '#ffaa99',
        'red-900': '#ffdacc',
        'turq-100': '#0d454a',
        'turq-200': '#115e5f',
        'turq-300': '#1a8f83',
        'turq-400': '#1fad98',
        'turq-500': '#26d7b2',
        'turq-600': '#47dcbc',
        'turq-700': '#73e2cb',
        'turq-800': '#a4eadc',
        'turq-900': '#cef8ef',
        'yellow-100': '#5d3209',
        'yellow-200': '#8e6106',
        'yellow-300': '#be9304',
        'yellow-400': '#e6c805',
        'yellow-500': '#ffe525',
        'yellow-600': '#fce95a',
        'yellow-700': '#fcec83',
        'yellow-800': '#fcf1a1',
        'yellow-900': '#fdf5ce',
        latam: {
          orange: "#FF922D",
          "orange-cream": "#FFC794",
        },
      },
      lineHeight: {
        tight: 1.2,
        relaxed: 1.65,
      },
      maxHeight: {
        "16": "4rem",
        "20": "5rem",
      },
      minHeight: {
        "16": "4rem",
        "32": "8rem",
      },
      minWidth: {
        "1/2": "50%",
      },
      height: {
        "128": "32rem",
        "192": "48rem",
      },
      fontFamily: {
        sans: [
          "Montserrat",
          "-apple-system",
          "BlinkMacSystemFont",
          '"Segoe UI"',
          "Roboto",
          '"Helvetica Neue"',
          "Arial",
          '"Noto Sans"',
          "sans-serif",
          '"Apple Color Emoji"',
          '"Segoe UI Emoji"',
          '"Segoe UI Symbol"',
          '"Noto Color Emoji"',
        ],
      },
      letterSpacing: {
        widest: "1px",
      },
      fontSize: {
        "3xs": "0.5rem",
        "2xs": "0.625rem",
        small: "0.85rem",
        "3xl": "2rem",
        "4xl": "2.5rem",
      },
      textStrokeWidth: theme => theme("borderWidth"),
      spacing: {
        "2px": "2px",
        "9": "1.75rem",
        "17": "4.25rem",
        "18": "4.5rem",
        "19": "4.75rem",
        "22": "5.5rem",
      },
      margin: {
        "1/12": "8.333333333%",
        "1/3": "33.333333333%",
        "2/3": "66.6666667%",
      },
      boxShadow: {
        box: "0 0 1px 0 #CCCCCC, 1px 2px 13px -5px rgba(0,0,0,0.30);",
      },
    },
    container: {
      center: true,
      padding: "1rem",
    },
  },
  variants: {
    textStrokeWidth: ["responsive", "hover"],
    padding: ["responsive", "last"],
    textColor: ["responsive", "hover", "focus", "active"],
    backgroundColor: ["responsive", "hover", "focus", "active"],
    borderColor: ["responsive", "hover", "focus", "active"],
    width: ["responsive"],
    container: ["responsive"],
  },
  plugins: [wordpressUtilities],
  purge: false,
  future: {
    removeDeprecatedGapUtilities: true,
    purgeLayersByDefault: true,
  },
};

if (SITE === "latam") {
  module.exports.theme.extend.colors.primary =
    module.exports.theme.extend.colors.latam.orange;
  module.exports.theme.extend.colors.menuHover =
    module.exports.theme.extend.colors["gray-900"];
} else if (SITE === "awards") {
  module.exports.theme.extend.colors.primary =
    module.exports.theme.extend.colors["blue-500"];
  module.exports.theme.extend.colors.menuHover =
    module.exports.theme.extend.colors["yellow-900"];
} else {
  module.exports.theme.extend.colors.primary =
    module.exports.theme.extend.colors["blue-500"];
  module.exports.theme.extend.colors.menuHover =
    module.exports.theme.extend.colors["blue-900"];
}
