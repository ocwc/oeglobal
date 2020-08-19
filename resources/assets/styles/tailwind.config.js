const { wordpressUtilities } = require("tailwindcss-wordpress");

const SITE = process.env.SITE;

module.exports = {
  theme: {
    extend: {
      colors: {
        "blue-100": "#0d1530",
        "blue-200": "#1c2b5a",
        "blue-300": "#1f377a",
        "blue-400": "#1952b3",
        "blue-500": "#0d59f2",
        "blue-600": "#3b80f7",
        "blue-700": "#6ea5f7",
        "blue-800": "#a7c3fb",
        "blue-900": "#cfdefc",
        "black-100": "#1a1a1a",
        "black-200": "#333333",
        "black-300": "#4d4d4d",
        "black-400": "#666666",
        "gray-500": "#808080",
        "gray-600": "#999999",
        "gray-700": "#b3b3b3",
        "gray-800": "#cccccc",
        "gray-900": "#f2f2f2",
        "red-100": "#330400",
        "red-200": "#66001b",
        "red-300": "#990033",
        "red-400": "#cc0022",
        "red-500": "#ff0000",
        "red-600": "#ff5547",
        "red-700": "#ff8670",
        "red-800": "#ffaa99",
        "red-900": "#ffdacc",
        "turq-100": "#072b2c",
        "turq-200": "#0d5952",
        "turq-300": "#158473",
        "turq-400": "#18b493",
        "turq-500": "#26d7b2",
        "turq-600": "#50e2c4",
        "turq-700": "#7aebcf",
        "turq-800": "#a5f3dc",
        "turq-900": "#d2f9ec",
        "yellow-100": "#4c4c00",
        "yellow-200": "#707000",
        "yellow-300": "#a89d00",
        "yellow-400": "#e5d600",
        "yellow-500": "#ffe525",
        "yellow-600": "#ffe44d",
        "yellow-700": "#ffe270",
        "yellow-800": "#ffe499",
        "yellow-900": "#ffebc2",
        "fuchsia-200": "#561467",
        "fuchsia-100": "#3d0e49",
        "fuchsia-300": "#7c1b8d",
        "fuchsia-400": "#aa22b4",
        "fuchsia-500": "#db43db",
        "fuchsia-600": "#e05cdc",
        "fuchsia-700": "#e77ee3",
        "fuchsia-800": "#f0b2ec",
        "fuchsia-900": "#f7d4f2",
        latam: {
          orange: "#FF922D",
          "orange-cream": "#FFC794"
        }
      },
      lineHeight: {
        tight: 1.2,
        relaxed: 1.65
      },
      maxHeight: {
        "16": "4rem",
        "20": "5rem"
      },
      minWidth: {
        "1/2": "50%"
      },
      height: {
        '128': '32rem'
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
          '"Noto Color Emoji"'
        ]
      },
      letterSpacing: {
        widest: "1px"
      },
      fontSize: {
        "3xs": "0.5rem",
        "2xs": "0.625rem",
        "3xl": "2rem"
      },
      textStrokeWidth: theme => theme("borderWidth"),
      spacing: {
        "9": "1.75rem",
        "22": "5.5rem"
      },
      margin: {
        "1/12": "8.333333333%",
        "1/3": "33.333333333%",
        "2/3": "66.6666667%"
      },
      boxShadow: {
        'box': '0 0 1px 0 #CCCCCC, 1px 2px 13px -5px rgba(0,0,0,0.30);'
      }
    },
    container: {
      center: true,
      padding: "1rem"
    }
  },
  variants: {
    textStrokeWidth: ["responsive", "hover"],
    padding: ["responsive", "last"],
    textColor: ['responsive', 'hover', 'focus', 'active'],
    backgroundColor: ['responsive', 'hover', 'focus', 'active'],
    borderColor: ['responsive', 'hover', 'focus', 'active'],
    width: ['responsive'],
  },
  plugins: [wordpressUtilities],
  purge: false
};

if (SITE === "latam") {
  module.exports.theme.extend.colors.primary =
    module.exports.theme.extend.colors.latam.orange;
  module.exports.theme.extend.colors.menuHover =
    module.exports.theme.extend.colors["gray-900"];
} else {
  module.exports.theme.extend.colors.primary =
    module.exports.theme.extend.colors["blue-500"];
  module.exports.theme.extend.colors.menuHover =
    module.exports.theme.extend.colors["blue-900"];
}
